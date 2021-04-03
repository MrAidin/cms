<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Photo;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $postsCount = Post::count();
        $posts = Post::orderBy('created_at', 'desc')->limit(5)->get();
        $users = User::orderBy('created_at', 'desc')->limit(5)->get();
        $categoriesCount = Category::count();
        $photosCount = Photo::count();
        $usersCount = Post::count();
        return view('admin.dashboard.index', compact(['postsCount', 'categoriesCount', 'photosCount', 'usersCount', 'posts', 'users']));
    }
}
