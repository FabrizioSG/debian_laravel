<?php

namespace App\Http\Controllers;
use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Http\Request;

class PostCommentsController extends Controller
{
    public function store(Post $post){

        $post->comments()->create([
            'user_id'=>auth()->id(),
            'body'=>request('body')
        ]);

        return back();
    }
}
