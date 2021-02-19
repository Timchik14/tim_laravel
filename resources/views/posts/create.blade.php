@extends('layout.master')
@section('title', 'Создать статью')
@section('content')
    <div class="col-md-8 blog-main">
        <h3 class="pb-3 mb-4 font-italic border-bottom">
            Create article
        </h3>

        @include('layout.errors')
        <form method="post" action="{{ route('posts.store') }}">
            @include('posts.create_edit_form')
        </form>
    </div>
@endsection
