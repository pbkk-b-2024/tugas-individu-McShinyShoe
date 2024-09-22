<!-- resources/views/dashboard.blade.php -->
@extends('layout.dashboard')

@section('title', 'Edit ' . old('title', $article->title))

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Edit Article</h1>
    <!-- Success message -->
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <!-- Form for editing the article -->
    <form action="/dashboard/edit/{{ $category }}/{{ $article->id }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Title:</label>
            <input type="text" id="title" name="title" class="form-control" value="{{ old('title', $article->title) }}" required>
            @error('title')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="author" class="form-label">Author:</label>
            <input type="text" id="author" name="author" class="form-control" value="{{ old('author', $article->author) }}" required>
            @error('author')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="year" class="form-label">Year:</label>
            <input type="number" id="year" name="year" class="form-control" value="{{ old('year', $article->year) }}" required>
            @error('year')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="link" class="form-label">Link:</label>
            <input type="url" id="link" name="link" class="form-control" value="{{ old('link', $article->link) }}" required>
            @error('link')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary rounded-pill">Save</button>
    </form>
    <!-- Delete form -->
    <form action="/dashboard/edit/{{ $category }}/{{ $article->id }}" method="POST" class="mt-3">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger rounded-pill" onclick="return confirm('Are you sure you want to delete this article?');">Delete</button>
    </form>
    <!-- Back button -->
    <a href="/dashboard/view/{{ $category }}" class="btn btn-secondary rounded-pill mt-3">Back to Articles List</a>
</div>
@endsection
