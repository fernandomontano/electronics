@extends('layouts.app')

@section('title', 'Home')

@section('content')

<div class="dropdown">
    <label tabindex="0" class="btn m-1">Category</label>
    <ul tabindex="0" class="dropdown-content menu p-2 shadow bg-base-100 rounded-box w-52 text-center">
        <li><label  for="my-modal-4" class="btn" >+ Add new</label></li>
        @foreach ($categories as $category)
        <li>
            <a id="{{ $category->id }}">
                {{ $category->category }}
            </a>
        </li>
        @endforeach
    </ul>
</div>
<div>
    <input type="checkbox" id="my-modal-4" class="modal-toggle" />
    <label for="my-modal-4" class="modal cursor-pointer">
    <label class="modal-box relative" for="">
        <form action="{{ route('categories.store') }}" method="POST"
        enctype="multipart/form-data"
        class="flex justify-center items-center my-3 flex-col">
        @csrf

        @include('electronics.form')
    </form>
  </label>
</label>
</div>
<div>
    @foreach ($electronics as $electronic)
    <div class="grid-cols-6">
            <img src={{ url('storage/electronic/'.$electronic->file_path )}} alt="" class="w-25 h-25">
            <div>
            </div>
        </div>

        @endforeach
</div>

<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>

@endsection
