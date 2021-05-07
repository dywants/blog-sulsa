<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class FrontPostController extends Controller
{
    public function index(){
        return view('front.posts.index');
    }

    public function show($slug){
        $post = Post::with('category')->whereSlug($slug)->firstOrFail();
        return view('front.posts.show',['post' => $post]);
    }

    public function category(){
        return view('front.posts.show-by-category');
    }
}
