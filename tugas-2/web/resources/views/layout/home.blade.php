<!-- resources/views/home.blade.php -->
@extends('layout.basic')

@section('page')
<div class="container-fluid d-flex flex-grow-1">
    <div class="row flex-grow-1 w-100">
        @include('partials.sidebar')

        <!-- Main Content -->
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 d-flex flex-column">
            @yield('content')
        </main>
    </div>
</div>
@endsection
