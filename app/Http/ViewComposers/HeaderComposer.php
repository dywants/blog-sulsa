<?php


namespace App\Http\ViewComposers;


use Illuminate\View\View;
use TCG\Voyager\Models\Category;

class HeaderComposer
{
    public function compose(View $view){
        $view->with([
            'category ' => Category::with('posts')->firstOrFail(),
            'categories' => Category::All(),
        ]);

    }

}
