<?php

use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',  [HomeController::class,'home']);


Route::get('/about', [HomeController::class,'show'])->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/gallery/images', [GalleryController::class,'image'])->name('gallery.images');

Route::get('/gallery/videos', [GalleryController::class,'video'])->name('gallery.videos');

Route::get('/posts', [PostController::class,'list'])->name('posts');

Route::get('/post/{post}',[PostController::class,'show'])->name('post');
