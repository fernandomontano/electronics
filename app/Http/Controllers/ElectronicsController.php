<?php

namespace App\Http\Controllers;

use App\Models\categories;
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

        return view('electronics.index', compact('electronics'), compact('categories')) ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    public function edit(electronics $electronics)
    {
        //
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\electronics  $electronics
     * @return \Illuminate\Http\Response
     */
    public function destroy(electronics $electronics)
    {
        //
    }
}
