<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\FrontPostController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomepageController::class, 'index'])->name('homepage');
Route::name('category')->get('categories/{category:slug}', [FrontPostController::class, 'indexCategory']);
Route::prefix('articles')->group(function () {
    Route::name('posts.all')->get('/', [FrontPostController::class, 'index']);
    Route::name('posts.display')->get('{slug}', [FrontPostController::class, 'show']);
    Route::post('/{post}/reaction', [FrontPostController::class, 'toggle'])
        ->middleware('auth');
});
//Route::resource('abouts', AboutController::class);
Route::get('about', [AboutController::class, 'index'])->name('about');
//Contact form
Route::get('/contact', [App\Http\Controllers\EmailController::class, 'create'])->name('contact');
Route::post('/email', [App\Http\Controllers\EmailController::class, 'sendEmail'])->name('send.email');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
Route::name('page')->get('{page:slug}', PageController::class);
