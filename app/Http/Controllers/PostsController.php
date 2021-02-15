<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->published()->get();
        return view('index', compact('posts'));
    }

    public function about()
    {
        return view('about.index');
    }


    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function create(Post $post)
    {
        return view('posts.create', compact('post'));
    }

    public function store(PostRequest $postRequest)
    {
        $validated = $postRequest->validated();

        if (!request()->get('published')) {
            $validated['created_at'] = null;
        }

        $validated['published'] = (request()->get('published') === 'on');

        Post::create($validated);
        return redirect(route('posts.index'))->with('status', 'Post saved!');
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Post $post, PostRequest $postRequest)
    {
        $validated = $postRequest->validated();

        if (!request()->get('published')) {
            $validated['created_at'] = null;
        }

        $validated['published'] = (request()->get('published') === 'on');

        $post->update($validated);
        return redirect(route('posts.index'))->with('status', 'Updates saved!');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect(route('posts.index'))->with('status', 'Post deleted!');
    }
}
