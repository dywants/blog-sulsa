<?php


namespace App\Http\ViewComposers;


use Illuminate\View\View;
use App\Models\Category;

class HeaderComposer
{
    public function compose(View $view){
        $view->with([
            'category ' => Category::with('posts')->firstOrFail(),
            'categories' => $categories =  Category::inRandomOrder()->with('children')->whereNull('parent_id')->take(6)->get(),
        ]);
    }
}
