@extends('layout.master')
@section('title', 'Страница статьи')
@section('content')

    <div class="col-md-8 blog-main">
        <h3 class="pb-3 mb-4 font-italic border-bottom">
            One article
        </h3>
        <div class="blog-post">
            <h2 class="blog-post-title">{{ $post->name }}</h2>
            <p><a href="/posts/{{ $post->slug }}/edit">Редактировать</a></p>
            <p class="blog-post-meta">{{ $post->created_at->toFormattedDateString() }}</p>
            <p>{{ $post->short_description }}</p>
            <hr>
            <p>{{ $post->long_description  }}</p>
            <hr>
            <p>{{ $post->body }}</p>
            <hr>
            <p><a href="<?=route('posts.index');?>">На главную</a></p>

        </div>
    </div>

@endsection
