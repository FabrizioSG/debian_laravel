<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
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

Route::get('/', function () {

    return view('posts', [
        'posts' => Post::with('category')->get()
    ]);
});

Route::get('/posts/{post:slug}', function (Post $post) {

    // $post = Post::findOrFail($id);

    return view('post',['post' => $post]);

});

Route::get('categories/{category:slug}',function (Category $category){
    return view('posts', [
        'posts' => $category->posts
    ]);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
