@extends('layouts.app')

@section('title', 'Filtered')

@section('content')

<div class="grid grid-cols-5 my-3 gap-3">
@foreach ($electronics as $electronic)
    <div class="bg-black/30 rounded">
        <div class="p-5">
            <div class="flex gap-5">
                <img src={{ url('storage/electronic/'.$electronic->file_path )}} alt=""  class="rounded w-12 object-cover">
                <div class="text-xl font-bold text-center">{{ $electronic->name }}</div>
            </div>
        </div>
    </div>

@endforeach
</div>

@endsection
