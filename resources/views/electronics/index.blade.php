@extends('layouts.app')

@section('title', 'Home')

@section('content')

<div class="gap-5 flex items-center">
    <div class="flex gap-5 text-lg uppercase">
        @foreach ($categories as $category)
        <div class="bg-primary font-bold rounded my-2">
            <a href="{{ route('categories.show', $category->id) }}" class="p-3">
                {{ $category->category }}
            </a>
        </div>
        @endforeach
    </div>
</div>

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
