<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    //login page
    public function login(){
        return view('login');
    }

    //register page
    public function register(){
        return view('register');
    }

    //visitor page
    public function visitor(){
        $posts = Post::get();
        return view('visitor',compact('posts'));
    }

    //blog page
    public function blog(){
        $user = Auth::guard('user')->user();
        $posts = Post::get();
        return view('blog',compact(['user','posts']));
    }

    //object details page
    public function view_object($object_id){
        $user = Auth::guard('user')->user();
        $post = Post::find($object_id);
        return view('object_details',compact(['user','post']));
    }

    //create object page
    public function create_object(){
        $user = Auth::guard('user')->user();
        return view('create_object',compact('user'));
    }

    //edit object page
    public function edit_object($object_id){
        $user = Auth::guard('user')->user();
        $post = Post::find($object_id);
        return view('edit',compact(['user','post']));
    }
}
