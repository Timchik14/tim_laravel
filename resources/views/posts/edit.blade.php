@extends('layout.master')
@section('title', 'Редактировать статью')
@section('content')
    <div class="col-md-8 blog-main">
        <h3 class="pb-3 mb-4 font-italic border-bottom">
            Edit article
        </h3>

        @include('layout.errors')
        <form method="post" action="/posts/{{ $post->slug }}">
            @method('PATCH')
            @include('posts.create_edit_form')
        </form>
        <br>
        <form method="post" action="/posts/{{ $post->slug }}">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Удалить</button>
        </form>
    </div>
@endsection
