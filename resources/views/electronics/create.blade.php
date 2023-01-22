@extends('layouts.app')

@section('title', 'Create')

@section('content')

<form action="{{ route('store') }}" method="post" enctype="multipart/form-data"
class="flex flex-col justify-center items-center my-3">
<!-- Add CSRF Token -->
@csrf
<div class="bg-base-content/10 rounded-xl p-4">
    <div class="rounded-xl gap-3 p-3 text-primary flex flex-col justify-center items-center">
        <label class="font-bold">Product Name</label>
        <input type="text" placeholder="Product Name" name="name"
        class="bg-neutral text-white p-2 rounded placeholder-white w-full"/>

        <label class="font-bold">Description</label>
        <textarea type="text" placeholder="Product Description" name="description"
        class="bg-neutral text-white p-2 rounded placeholder-white w-full"></textarea>

        <div class="flex text-center gap-2 my-3 items-center justify-center">
            <label class="font-bold">Product Price</label>
            <input type="number" step="0.01" placeholder="Price" name="price"
            class="bg-neutral text-white p-2 rounded placeholder-white w-full"/>

            <label class="font-bold">Stock</label>
            <input type="number" step="1" placeholder="Stock" name="stock"
            class="bg-neutral text-white p-2 rounded placeholder-white w-full"/>
        </div>


        <div class="flex text-center gap-2 my-3 items-center justify-center w-full">
            <label class="font-bold">Category</label>
            <select name="category" id="" class="bg-neutral text-white p-2 rounded placeholder-white w-full"    >
                @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->category}}</option>
                @endforeach
            </select>

            <label class="font-bold">Brand</label>
            <select name="brand" id="" class="bg-neutral text-white p-2 rounded placeholder-white w-full"    >
                @foreach ($brands as $brand)
                    <option value="{{$brand->id}}">{{$brand->brand}}</option>
                @endforeach
            </select>
        </div>

        <div class="flex flex-col items-center justify-center">
            <input type="file" name="file" required class="">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
</form>

<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>

@endsection
