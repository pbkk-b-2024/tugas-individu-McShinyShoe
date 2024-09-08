<!-- resources/views/home.blade.php -->
@extends('layout.home')

@section('title', 'View ' . $category)

@section('content')
<div class="container-fluid py-5 px-3">
    <h1>Articles</h1>
    <ul>
        <table class="table align-middle">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Author</th>
                <th scope="col">Year</th>
                <th scope="col">Link</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
                @foreach($articles as $article)
                <tr>
                <th scope="row">{{ $article->id }}</td>
                <td>{{ $article->title }}</td>
                <td>{{ $article->author }}</td>
                <td>{{ $article->year }}</td>
                <td>{{ $article->link }}</td>
                <td><a href="/home/edit/{{ $category }}/{{ $article->id }}"><button type="button" class="btn btn-primary rounded-pill btn-sm px-3">Edit</button></a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </ul>

    {{ $articles->links() }} <!-- Pagination links -->
</div>
@endsection
