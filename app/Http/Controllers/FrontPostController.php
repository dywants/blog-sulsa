<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use TCG\Voyager\Models\Category;

class FrontPostController extends Controller
{
    public function index(){
        $posts = \TCG\Voyager\Models\Post::published()->orderBy('id', 'desc')->paginate(8);
        return view('front.posts.index', ['posts' => $posts]);
    }

    public function show($slug){
        $post = Post::with('category')->whereSlug($slug)->firstOrFail();

       $postsRelated =  Post::inRandomOrder()->where('category_id', '=', $post->category->id)
           ->where('id', '!=', $post->id)
           ->take(3)
           ->get();

        //        View count post
        $blogKey = 'blog_' . $post->id;
        if (!Session::has($blogKey)) {
            $post->increment('views_count');
            Session::put($blogKey,1);
        }

        // Previous post
        $post->previous = $this->getPreviousPost($post->id);
        // Next post
        $post->next = $this->getNextPost($post->id);

        return view('front.posts.show',[
            'post' => $post,
            'postsRelated' => $postsRelated
        ]);
    }

    public function category(){
        return view('front.posts.show-by-category');
    }

    protected function getPreviousPost($id)
    {
        return Post::select('title', 'slug')
            ->published()
            ->latest('id')
            ->firstWhere('id', '<', $id);
    }

    protected function getNextPost($id)
    {
        return Post::select('title', 'slug')
            ->published()
            ->oldest('id')
            ->firstWhere('id', '>', $id);
    }

    public function queryCategory(Category $category)
    {
        $posts = $this->getPostByCategory($category->slug);
        return view('front.posts.show-by-category', ['posts' => $posts]);
    }

    protected function getPostByCategory($category_slug)
    {
      return \TCG\Voyager\Models\Post::published()
            ->orderBy('id', 'desc')
            ->whereHas('category', function ($q) use ($category_slug) {
                $q->where('category.slug', $category_slug);
            })->paginate(8);
    }

    public function indexCategory($category)
    {
        $category = Category::whereSlug($category)->with('posts')->firstOrFail();
        $posts = $category->posts;

        return view('front.posts.show-by-category', compact('category', 'posts'));
    }

    public function toggle(Post $post, Request $request)
    {
        $post->toggleReaction($request->reaction);
    }
}
