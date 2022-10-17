<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function create(){
        return view('register.create');
    }
    public function store(){

        $attributes = request()->validate([
            'name'=>'required|max:255',
            'email'=>'required|email|max:255|unique:users,email',
            'password'=>'required|min:4'
        ]);

        // $attributes['password'] = bcrypt($attributes['password']);

        User::create($attributes);

        session()->flash('success','Your account has been created');

        return redirect('/');
    }
}
