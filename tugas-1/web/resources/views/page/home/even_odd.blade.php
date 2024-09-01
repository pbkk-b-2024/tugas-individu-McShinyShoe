<!-- resources/views/home.blade.php -->
@extends('template.home')

@section('title', 'Even or Odd')

@section('content')
<div class="container mt-5">
    <h1>Even or Odd Number Generator</h1>
    <form action="{{ route('even_odd') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="number" class="form-label">Enter a Number</label>
            <input type="number" class="form-control" id="number" name="number" required>
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Choose Even or Odd</label>
            <select class="form-control" id="type" name="type" required>
                <option value="even">Even</option>
                <option value="odd">Odd</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Generate</button>
    </form>

    @if (isset($numbers))
        <div class="alert alert-success mt-3">
            <h4>First {{ count($numbers) }} {{ $type }} numbers:</h4>
            <p>{{ implode(', ', $numbers) }}</p>
        </div>
    @endif
</div>
@endsection
