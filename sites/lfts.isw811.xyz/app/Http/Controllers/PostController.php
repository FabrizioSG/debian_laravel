<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){

        return view('posts', [
            'posts' => Post::latest()->filter(
                request(['search','category','author']))->paginate(3),
            'categories' => Category::all()
        ]); 

    }

}
