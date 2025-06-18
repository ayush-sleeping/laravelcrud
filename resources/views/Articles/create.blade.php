@extends('Articles.layouts')

@section('content')
<div class="container">
    <h3>Create Article</h3>
    <a href="{{ route('articles.index') }}" class="btn btn-secondary mb-3">Back to Articles</a>
</div>

<form method="POST" action="{{ route('articles.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" value="{{ old('title') }}" id="title" class="form-control">
        @error('title')
            <div class="alert alert-danger mt-2 mb-2">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="content">Content</label>
        <textarea name="content" id="content" class="form-control"
            rows="5">{{ old('content') }}</textarea>
        @error('content')
            <div class="alert alert-danger mt-2 mb-2">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="image">Image</label>
        <input type="file" name="image" id="image" class="form-control-file">
        @error('image')
            <div class="alert alert-danger mt-2 mb-2">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-dark">Create</button>
</form>
@endsection
