<?php

use App\Http\Controllers\Admin\AdminCategoryController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AdminPhotoController;
use App\Http\Controllers\Admin\AdminPostsController;
use App\Http\Controllers\Frontend\MainController;
use App\Http\Controllers\Frontend\PostController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminUserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [MainController::class, 'index']);
Route::get('posts/{slug}', [PostController::class, 'show'])->name('frontend.posts.show');
Route::get('search', [PostController::class, 'searchTitle'])->name('frontend.posts.search');


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

//for Admin Routes
Route::group(['middleware' => 'admin'], function () {

    Route::resource('admin/users', AdminUserController::class);
    Route::resource('admin/posts', AdminPostsController::class);
    Route::resource('admin/categories', AdminCategoryController::class);
    Route::resource('admin/photos', AdminPhotoController::class);
    Route::get('admin/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard.index');


});
