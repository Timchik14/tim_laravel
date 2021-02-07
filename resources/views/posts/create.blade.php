@extends('layout.master')
@section('title', 'Создать статью')
@section('content')
    <div class="col-md-8 blog-main">
        <h3 class="pb-3 mb-4 font-italic border-bottom">
            Create article
        </h3>

        @include('layout.errors')

        <form method="post" action="<?=route('posts')?>">

            @csrf

            <div class="mb-3">
                <label for="slug" class="form-label">Символьный код</label>
                <input type="text" class="form-control" id="slug" name="slug" value="{{ old('slug') }}">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Название статьи</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
            </div>
            <div class="mb-3">
                <label for="short_description" class="form-label">Краткое описание</label>
                <input type="text" class="form-control" id="short_description" name="short_description" value="{{ old('short_description') }}">
            </div>
            <div class="mb-3">
                <label for="long_description" class="form-label">Детальное описание</label>
                <input type="text" class="form-control" id="long_description" name="long_description" value="{{ old('long_description') }}">
            </div>
            <div class="mb-3">
                <label for="body" class="form-label">Текст статьи</label>
                <input type="text" class="form-control" id="body" name="body" value="{{ old('body') }}">
            </div>

            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="published" name="published">
                <label class="form-check-label" for="published">Опубликовать</label>
            </div>
            <button type="submit" class="btn btn-primary">Принять</button>
        </form>
    </div>
@endsection
