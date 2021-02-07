<?php

namespace App\Http\Controllers;

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
        $post = Post::latest()->published()->get();
        return view('about.index');
    }


    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        $all = $this->validate(request(), [
                    'slug' => 'required|unique:posts|regex:/^[a-zA-Z0-9-_]+$/',
                    'name' => 'required|min:5|max:100',
                    'short_description' => 'required|max:255',
                    'long_description' => 'required',
                    'body' => 'required',
                ]);
        $all['published'] = (request()->get('published') === 'on');
        Post::create($all);
        return redirect(route('main'));
    }
}
