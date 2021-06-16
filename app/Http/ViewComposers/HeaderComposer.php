<?php


namespace App\Http\ViewComposers;


use App\Models\Page;
use Illuminate\View\View;
use App\Models\Category;

class HeaderComposer
{
    public function compose(View $view){
        $view->with([
            'pages' => Page::all(),
            'category ' => Category::with('posts')->firstOrFail(),
            'categories' => $categories =  Category::with('posts')->with('children')->whereNull('parent_id')->get(),
        ]);
    }
}
