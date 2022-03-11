<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;


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

Route::get('/', [MainController::class, 'Index'])->name('home');
Route::get('/about/us', [MainController::class, 'About'])->name('about');
Route::get('/write/post', [MainController::class, 'WritePost'])->name('post');
Route::get('/contact/us', [MainController::class, 'Contact'])->name('contact');
Route::get('/view/posts/{id}', [MainController::class, 'View_post']);
Route::post('/upload/posts', [MainController::class, 'Upload_Post'])->name('upload');
