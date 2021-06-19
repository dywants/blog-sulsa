<?php

namespace App\Providers;

use App\Http\ViewComposers\HeaderComposer;
use App\Http\ViewComposers\HomeComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer([
            'front.posts.show-by-category',
            'front.homepage',
            'front.posts.show',
            'front.posts.index',
            'front.posts.show-by-category',
            'front.pages',
            'front.about',
            'front.email'

        ], HeaderComposer::class);
    }
}
