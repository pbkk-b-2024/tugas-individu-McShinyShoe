<!-- resources/views/home.blade.php -->
@extends('template.home')

@section('title', 'Fibonacci')

@section('content')
<div class="container mt-5">
    <h1>Fibonacci Number Generator</h1>
    <form action="{{ route('fibonacci') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="number" class="form-label">Enter a Number</label>
            <input type="number" class="form-control" id="number" name="number" required min="1">
        </div>
        <button type="submit" class="btn btn-primary">Generate</button>
    </form>

    @if (isset($fibonacciSeq))
        <div class="alert alert-success mt-3">
            <h4>First {{ count($fibonacciSeq) }} numbers in the Fibonacci sequence:</h4>
            <p>{{ implode(', ', $fibonacciSeq) }}</p>
        </div>
    @endif
</div>
@endsection
