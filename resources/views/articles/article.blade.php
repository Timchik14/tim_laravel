<div class="blog-post">
    <a href="{{ route('articles.show', ['article' => $article]) }}">
        <h2 class="blog-post-title">{{ $article->name }}</h2>
    </a>
    <p class="blog-post-meta">{{ $article->created_at->toFormattedDateString() }}</p>
    <hr>
    <p>{{ $article->short_description }}</p>
    <hr>
</div>
