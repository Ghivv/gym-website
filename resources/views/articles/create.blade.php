<!-- An unexamined life is not worth living. - Socrates -->

@extends('layouts.app')

@section('content')
<h1>Add New Article</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('articles.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}" required>
    </div>
    <div class="mb-3">
        <label for="content" class="form-label">Content</label>
        <textarea name="content" id="content" rows="5" class="form-control" required>{{ old('content') }}</textarea>
    </div>
    <div class="mb-3">
        <label for="category" class="form-label">Category</label>
        <input type="text" name="category" id="category" class="form-control" value="{{ old('category') }}" required>
    </div>
    <button type="submit" class="btn btn-success">Save</button>
    <a href="{{ route('articles.index') }}" class="btn btn-secondary">Cancel</a>
</form>
@endsection
