<?php

use App\Http\Controllers\FrontPostController;
use App\Http\Controllers\HomepageController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomepageController::class, 'index'])->name('homepage');
Route::name('category')->get('categories/{category:slug}', [FrontPostController::class, 'category']);
Route::prefix('articles')->group(function (){
    Route::name('posts.all')->get('/', [FrontPostController::class, 'index']);
    Route::name('posts.display')->get('{slug}', [FrontPostController::class, 'show']);
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
