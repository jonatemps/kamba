<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Artisan;
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

Route::get('/foo', function () {
    Artisan::call('storage:link');
});
Route::get('/',  [HomeController::class,'home'])->name('home');


Route::get('/about', [HomeController::class,'show'])->name('about');

Route::get('/contact', [ContactController::class,'index'])->name('contact');
Route::post('/contact', [ContactController::class,'submit'])->name('contact.submit');


Route::get('/gallery/images', [GalleryController::class,'image'])->name('gallery.images');

Route::get('/gallery/videos', [GalleryController::class,'video'])->name('gallery.videos');

Route::get('/posts', [PostController::class,'list'])->name('posts');

Route::get('/post/{post}',[PostController::class,'show'])->name('post');


Route::post('/newsletter', [ContactController::class,'newsletter'])->name('newsletter.submit');
Route::post('/comment/send/{post}', [PostController::class,'commentSend'])->name('comment.send');


// Route qui permet de connaître la langue active
Route::get('locale', [LocalizationController::class,'getLang'])->name('getlang');

// Route qui permet de modifier la langue
Route::get('locale/{lang}', [LocalizationController::class,'setLang'])->name('setlang');
