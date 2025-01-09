<!-- Live as if you were to die tomorrow. Learn as if you were to live forever. - Mahatma Gandhi -->

@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between mb-4">
    <h1>Articles</h1>
    <a href="{{ route('articles.create') }}" class="btn btn-primary">Add Article</a>
</div>

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<table class="table table-bordered">
    <thead>
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>Category</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($articles as $article)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $article->title }}</td>
                <td>{{ $article->category }}</td>
                <td>
                    <a href="{{ route('articles.show', $article->id) }}" class="btn btn-info btn-sm">View</a>
                    <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('articles.destroy', $article->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
