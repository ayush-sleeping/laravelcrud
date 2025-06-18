@extends('Articles.layouts')

@section('content')
<div class="container">
    <h3>Edit Article</h3>
    <a href="{{ route('articles.index') }}" class="btn btn-secondary mb-3">Back to Articles</a>
</div>
<form method="POST" action="{{ route('articles.update', $article->id) }}"
    enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" value="{{ old('title', $article->title) }}" id="title"
            class="form-control">
        @error('title')
            <div class="alert alert-danger mt-2 mb-2">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="content">Content</label>
        <textarea name="content" id="content" class="form-control"
            rows="5">{{ old('content', $article->content) }}</textarea>
        @error('content')
            <div class="alert alert-danger mt-2 mb-2">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="image">Image</label>
        <input type="file" name="image" id="image" class="form-control-file">
        @if($article->image)
            <img src="{{ asset('images/articles/' . $article->image) }}"
                alt="Article Image" style="width:40px; height:40px; object-fit:cover; border-radius:50%;">
        @endif
        @error('image')
            <div class="alert alert-danger mt-2 mb-2">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-dark">Update</button>

    @endsection
