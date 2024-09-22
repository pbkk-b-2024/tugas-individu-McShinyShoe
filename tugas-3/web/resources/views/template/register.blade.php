<!-- resources/views/home.blade.php -->
@extends('layout.empty')

@section('title', 'Register')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <h2 class="text-center">Register</h2>
            <form action="/register" method="post">
                @csrf
                <div class="mb-3">
                    <label for="registerEmail" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" id="registerName" placeholder="Enter name" autofocus required value="{{ old('name') }}">
                </div>
                <div class="mb-3">
                    <label for="registerEmail" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="registerEmail" placeholder="Enter email" required value="{{ old('email') }}">
                    @error('email')
                    <div  class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="registerPassword" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="registerPassword" placeholder="Enter password" required>
                </div>
                <button type="submit" class="btn btn-success w-100">Register</button>
            </form>
        </div>
    </div>
</div>

@endsection
