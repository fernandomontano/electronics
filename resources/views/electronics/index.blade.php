@extends('layouts.app')

@section('title', 'Home')

@section('content')

<form action="" class="flex flex-col items-center justify-center">
    <label for="category" class="font-bold text-xl">Select a Category</label>
    <p class="text-sm">(to create another category, click on add new)</p>
    <div>
        <select name="category" id="" class="p-3 rounded mt-2 w-32">
            <option value="" selected disabled></option>
            @foreach ($categories as $category)
                <option value="{{$category->id}}" class="p-3 text-md w-6 font-bold">{{ $category->category }}</option>
            @endforeach
        </select>
        <button class="btn btn-primary">Search</button>
    </div>
</form>

@foreach ($electronics as $electronic)
<div class="grid-cols-6">
    <img src={{ url('storage/electronic/'.$electronic->file_path )}} alt="" class="w-25 h-25">
    <div>
        {{$electronic->name}}
    </div>
</div>
@endforeach

<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>

@endsection
