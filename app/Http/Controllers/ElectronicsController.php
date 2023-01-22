<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Brands;
use App\Models\Electronics;
use Illuminate\Http\Request;

class ElectronicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $electronics = Electronics::all();
        $categories = categories::all();

        return view('electronics.index', compact('electronics'), compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $electronics = new Electronics;
        $categories = Categories::all();
        $brands = Brands::all();

        return view('electronics.create', compact('categories'), compact('brands'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->file->store('electronic', 'public');

        $electronic = new Electronics([
            "name" => $request->get('name'),
            "description" => $request->get('description'),
            "price" => $request->get('price'),
            "stock" => $request->get('stock'),
            "has_offers" => $request->get('offers'),
            "file_path" => $request->file->hashName(),
            "category_id" => $request->get('category'),
            "brand_id" => $request->get('brand'),

        ]);
        $electronic->save();

        $electronics = Electronics::all();
        $categories = categories::all();

        return view('electronics.index', compact('electronics'), compact('categories'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\electronics  $electronics
     * @return \Illuminate\Http\Response
     */
    public function show(electronics $electronics)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\electronics  $electronics
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $electronic = Electronics::find($id);

        return view('electronics.index', compact('electronic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\electronics  $electronics
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, electronics $electronics)
    {
        //
        $electronics->update($request->all());

        return redirect()->route('electronics.index')
            ->with('success', 'Appliance updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\electronics  $electronics
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

    }
}
