<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PengetahuanController extends Controller
{
    public function index()
    {
        $posts = Post::published()->paginate(9);
        return view('pages.pengetahuan', compact('posts'));
    }

    public function show(string $slug)
    {
        $post        = Post::where('slug', $slug)->where('is_published', true)->firstOrFail();
        $relatedPosts = Post::published()->where('id', '!=', $post->id)->take(3)->get();

        return view('pages.pengetahuan-detail', compact('post', 'relatedPosts'));
    }
}
