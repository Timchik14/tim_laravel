<div class="blog-post">
    <a href="<?=route('posts.show', ['post' => $post]);?>"><h2 class="blog-post-title">{{ $post->name }}</h2><a>
    <p class="blog-post-meta">{{ $post->created_at->toFormattedDateString() }}</p>
    <hr>
    <p>{{ $post->short_description }}</p>
    <hr>
</div>
