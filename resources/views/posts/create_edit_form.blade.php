
    @csrf
    <div class="mb-3">
        <label for="slug" class="form-label">Символьный код</label>
        <input type="text" class="form-control" id="slug" name="slug" value="{{ old('slug', $post->slug) }}">
    </div>
    <div class="mb-3">
        <label for="name" class="form-label">Название статьи</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $post->name) }}">
    </div>
    <div class="mb-3">
        <label for="short_description" class="form-label">Краткое описание</label>
        <input type="text" class="form-control" id="short_description" name="short_description" value="{{ old('short_description', $post->short_description) }}">
    </div>
    <div class="mb-3">
        <label for="long_description" class="form-label">Детальное описание</label>
        <input type="text" class="form-control" id="long_description" name="long_description" value="{{ old('long_description', $post->long_description) }}">
    </div>
    <div class="mb-3">
        <label for="body" class="form-label">Текст статьи</label>
        <textarea type="text" class="form-control" id="body" name="body" value="">{{ old('body', $post->body) }}</textarea>
    </div>

    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="published" name="published" {{ $post->created_at ? 'checked' : '' }}>
        <label class="form-check-label" for="published">Опубликовать</label>
    </div>
    <button type="submit" class="btn btn-primary">Принять</button>

