@extends('layouts.app')

@section('title', 'Home')

@section('content')

<div class="dropdown">
    <label tabindex="0" class="btn m-1">Category</label>
    <ul tabindex="0" class="dropdown-content menu p-2 shadow bg-base-100 rounded-box w-52 text-center">
        <li><label  for="my-modal-4" class="btn" >+ Add new</label></li>
        @foreach ($categories as $category)
        <li>
            <a>
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
    <h4 class="text-xl font-bold text-center">Please, enter the name of the category you'd like to add.</h4>
    <form action="{{ route('categories.create') }}" method="POST"
        enctype="multipart/form-data"
        class="flex justify-center items-center my-3 flex-col">
        @csrf

        @include('electronics.form')
    </form>
  </label>
</label>
</div>
<div>

</div>

@endsection
