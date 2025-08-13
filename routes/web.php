<?php

use App\Http\Controllers\backend\ContactController;
use App\Http\Controllers\backend\MachineController;
use App\Http\Controllers\backend\PostController;
use App\Http\Controllers\backend\ServiceController;
use App\Http\Controllers\backend\TestimonialController;
use App\Http\Controllers\backend\UserController;
use App\Http\Controllers\backend\ValueController;
use App\Http\Controllers\frontend\CartController;
use App\Http\Controllers\frontend\ViewController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::group([], function () {
    Route::get('/',                                     [ViewController::class, 'home'])->name('view.home');
    Route::get('/about',                                [ViewController::class, 'about'])->name('view.about');
    Route::get('/catalog',                              [ViewController::class, 'catalog'])->name('view.catalog');
    Route::get('/posts',                                [ViewController::class, 'posts'])->name('view.posts');
    Route::get('/contact',                              [ViewController::class, 'contact'])->name('view.contact');
    Route::get('/post/{id}',                            [ViewController::class, 'post'])->name('view.post');
    Route::get('/detail/{id}',                          [ViewController::class, 'detail'])->name('view.detail');
    Route::get('/devis',                                [ViewController::class, 'devis'])->name('view.devis');
    Route::get('/cart',                                 [CartController::class, 'index'])->name('view.cart');
    Route::get('/congrats',                             [ViewController::class, 'congrats'])->name('view.congrats');
    Route::get('/search',                               [ViewController::class, 'searchStore'])->name('view.search');

    Route::post('/cart/add',                            [CartController::class, 'add'])->name('cart.add');
    Route::post('/cart/remove',                         [CartController::class, 'remove'])->name('cart.remove');
    Route::post('cart/increase',                        [CartController::class, 'increaseQuantity'])->name('cart.increase');
    Route::post('cart/decrease',                        [CartController::class, 'decreaseQuantity'])->name('cart.decrease');
    Route::post('/cart/save',                           [CartController::class, 'cartsave'])->name('cart.save');
    Route::post('/contact/store',                       [ContactController::class, 'store'])->name('contact.store');
});

Route::prefix('panel')->name('panel.')->group(function () {
    Route::get('/',                         [ViewController::class, 'dashboard'])->name('index');


    Route::get('/users',                                [UserController::class, 'index'])->name('users.index');
    Route::get('/users/{id}',                           [UserController::class, 'store'])->name('users.store');
    Route::put('/users/{id}',                           [UserController::class, 'update'])->name('users.update');
    Route::delete('/users/{id}',                        [UserController::class, 'destroy'])->name('users.destroy');

    Route::get('/posts',                                [PostController::class, 'index'])->name('posts.index');
    Route::get('/posts/{id}',                           [PostController::class, 'store'])->name('posts.store');
    Route::put('/posts/{id}',                           [PostController::class, 'update'])->name('posts.update');
    Route::delete('/posts/{id}',                        [PostController::class, 'destroy'])->name('posts.destroy');

    Route::get('/values',                               [ValueController::class, 'index'])->name('values.index');
    Route::get('/values/{id}',                          [ValueController::class, 'store'])->name('values.store');
    Route::put('/values/{id}',                          [ValueController::class, 'update'])->name('values.update');
    Route::delete('/values/{id}',                       [ValueController::class, 'destroy'])->name('values.destroy');

    Route::get('/services',                             [ServiceController::class, 'index'])->name('services.index');
    Route::get('/services/{id}',                        [ServiceController::class, 'store'])->name('services.store');
    Route::put('/services/{id}',                        [ServiceController::class, 'update'])->name('services.update');
    Route::delete('/services/{id}',                     [ServiceController::class, 'destroy'])->name('services.destroy');

    Route::get('/contacts',                             [ContactController::class, 'index'])->name('contacts.index');
    Route::get('/contacts/{id}',                        [ContactController::class, 'store'])->name('contacts.store');
    Route::put('/contacts/{id}',                        [ContactController::class, 'update'])->name('contacts.update');
    Route::delete('/contacts/{id}',                     [ContactController::class, 'destroy'])->name('contacts.destroy');

    Route::get('/testimonials',                         [TestimonialController::class, 'index'])->name('testimonials.index');
    Route::get('/testimonials/{id}',                    [TestimonialController::class, 'store'])->name('testimonials.store');
    Route::put('/testimonials/{id}',                    [TestimonialController::class, 'update'])->name('testimonials.update');
    Route::delete('/testimonials/{id}',                 [TestimonialController::class, 'destroy'])->name('testimonials.destroy');

    Route::get('/machines',                         [MachineController::class, 'index'])->name('machines.index');
    Route::get('/machines/{id}',                    [MachineController::class, 'store'])->name('machines.store');
    Route::put('/machines/{id}',                    [MachineController::class, 'update'])->name('machines.update');
    Route::delete('/machines/{id}',                 [MachineController::class, 'destroy'])->name('machines.destroy');
});

Route::get('/run-setup', function () {
    Artisan::call('migrate:fresh', ['--force' => true]);
    Artisan::call('db:seed', ['--force' => true]);
    Artisan::call('config:cache');
    Artisan::call('route:cache');
    return 'Setup executed.';
});
