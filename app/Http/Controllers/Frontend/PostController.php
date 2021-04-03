<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class PostController extends Controller
{
    public function show($slug)
    {
        $post = Post::with('user', 'category', 'photo')
            ->Where('slug', $slug)
            ->Where('status', 1)
            ->first();
        $categories = Category::all();
        return view('frontend.posts.show', compact(['post', 'categories']));


    }

    public function searchTitle()
    {
        $query=\request()->get('title');
        $posts =Post::with('user', 'category', 'photo')
            ->Where('title','like',"%".$query."%")
            ->Where('status', 1)
            ->orderBy('created_at','desc')
            ->paginate(3);
        $categories = Category::all();
        return view('frontend.posts.search', compact(['posts', 'categories','query']));
    }
}
