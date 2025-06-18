@extends('Articles.layouts')

@section('content')
<div class="container">
    <h3>Show Article</h3>
    <a href="{{ route('articles.index') }}" class="btn btn-secondary mb-3">Back to Articles</a>
</div>
<div class="card">
    <div class="card-body">
        <h5 class="card-title">{{ $article->title }}</h5>
        <p class="card-text">{{ $article->content }}</p>
        @if($article->image)
            <img src="{{ asset('images/articles/' . $article->image) }}"
                alt="Article Image" style="width:100%; height:auto; object-fit:cover; border-radius:5px;">
        @else
            <p>No image available.</p>
        @endif
    </div>
</div>
@endsection
