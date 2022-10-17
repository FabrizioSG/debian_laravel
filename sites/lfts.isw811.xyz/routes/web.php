<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use App\Http\Controllers\PostController;
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

Route::get('/', [PostController::class, 'index'])->name('home');

Route::get('/posts/{post:slug}', function (Post $post) {

    // $post = Post::findOrFail($id);

    return view('post',['post' => $post,
    'categories' => Category::all()

]);

});

/* Route::get('categories/{category:slug}',function (Category $category){
    return view('posts', [
        'posts' => $category->posts,
        'categories' => Category::all()

    ]);
}); */

Route::get('authors/{author}',function (User $author){
    return view('posts', [
        'posts' => $author->posts,
        'categories' => Category::all()
    ]);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
