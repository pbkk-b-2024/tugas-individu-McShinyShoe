<!-- resources/views/home.blade.php -->
@extends('layout.basic')

@section('page')
<div class="container-fluid d-flex flex-grow-1">
    <div class="row flex-grow-1 w-100">
        @yield('content')
    </div>
</div>
@endsection
