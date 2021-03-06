<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use TCG\Voyager\Models\Post;

class HomepageController extends Controller
{
    public function index(){
        $posts = Post::published()->orderBy('id', 'desc')->get();

        $postsFeatured = Post::published()->where('featured', '=', 1)->orderBy('id', 'desc')->get();

        $postFirst = $posts->first();
        $query =  $posts->slice(1);
        $postsResult = $query->take(8);

        return view('front.homepage', [
            'posts' => $posts,
            'postFirst' => $postFirst,
            'postsResult' => $postsResult,
            'postsFeatured' => $postsFeatured
        ]);
    }
}
