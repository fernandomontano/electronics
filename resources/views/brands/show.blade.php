@extends('layouts.app')

@section('filtered', 'Home')

@section('content')

@foreach ($electronics as $electronic)
    <div>
        {{ $electronic->name }}
    </div>
@endforeach

@endsection
