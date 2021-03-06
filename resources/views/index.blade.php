@extends('layout.master')
@section('title', 'Главная')
@section('content')

    <div class="col-md-8 blog-main">

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <h3 class="pb-3 mb-4 font-italic border-bottom">
            All articles
        </h3>
        @foreach($posts as $post)
            @include('posts.item')
        @endforeach

        <nav class="blog-pagination">
            <a class="btn btn-outline-primary" href="#">Older</a>
            <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
        </nav>

    </div>

@endsection
