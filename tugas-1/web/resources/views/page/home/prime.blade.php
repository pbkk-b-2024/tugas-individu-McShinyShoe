<!-- resources/views/home.blade.php -->
@extends('template.home')

@section('title', 'Prime')

@section('content')
<div class="container mt-5">
    <h1>Prime Number Generator</h1>
    <form action="{{ route('prime') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="number" class="form-label">Enter a Number</label>
            <input type="number" class="form-control" id="number" name="number" required min="1">
        </div>
        <button type="submit" class="btn btn-primary">Generate</button>
    </form>

    @if (isset($primes))
        <div class="alert alert-success mt-3">
            <h4>First {{ count($primes) }} prime numbers:</h4>
            <p>{{ implode(', ', $primes) }}</p>
        </div>
    @endif
</div>
@endsection
