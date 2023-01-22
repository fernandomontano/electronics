@extends('layouts.app')

@section('title', 'Home')

@section('content')


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
