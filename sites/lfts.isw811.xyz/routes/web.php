<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\PostCommentsController;


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
Route::post('newsletter',function(){
    request()->validate(['email'=>'required|email']);

    $mailchimp = new \MailchimpMarketing\ApiClient();

    $mailchimp->setConfig([
        'apiKey'=>config('services.mailchimp.key'),
        'server'=> 'us21'
    ]);
    $response = $mailchimp->lists->addListMember('607de9bcac',[
        'email_address'=>request('email'),
        'status'=>'subscribed'
    ]);
    return redirect('/')->with('success','You are now signed up for our newsletter!');
});

Route::get('/', [PostController::class, 'index'])->name('home');

Route::get('/posts/{post:slug}', function (Post $post) {

    // $post = Post::findOrFail($id);

    return view('post',['post' => $post,
    'categories' => Category::all()

    ]);

});

Route::post('posts/{post:slug}/comments',[PostCommentsController::class, 'store']);

Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('login', [SessionsController::class, 'create'])->middleware('guest');
Route::post('sessions', [SessionsController::class, 'store'])->middleware('guest');

Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth');

//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
