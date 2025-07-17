<?php

use App\Http\Controllers\frontend\ViewController;
use Illuminate\Support\Facades\Route;

Route::group([], function () {
    Route::get('/',             [ViewController::class, 'home'])->name('view.home');
    Route::get('/about',        [ViewController::class, 'about'])->name('view.about');
    Route::get('/catalog',      [ViewController::class, 'catalog'])->name('view.catalog');
    Route::get('/posts',        [ViewController::class, 'posts'])->name('view.posts');
    Route::get('/contact',      [ViewController::class, 'contact'])->name('view.contact');
});
