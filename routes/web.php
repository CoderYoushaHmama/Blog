<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\UserController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/login',[PagesController::class,'login'])->name('login');
Route::get('/register',[PagesController::class,'register'])->name('register');
Route::get('/visitor',[PagesController::class,'visitor'])->name('visitor');

Route::post('/signup',[UserController::class,'register'])->name('signup');
Route::post('/signin',[UserController::class,'login'])->name('signin');

Route::group(['prefix'=>'blog','middleware'=>'check_login'],function(){
    Route::get('logout',[UserController::class,'logout'])->name('logout');
    Route::get('/',[PagesController::class,'blog'])->name('blog');
    Route::get('/blog/{object_id}',[PagesController::class,'view_object'])->name('view');
    Route::get('/create_object',[PagesController::class,'create_object'])->name('create');
    Route::get('/edit_object/{object_id}',[PagesController::class,'edit_object'])->name('edit');

    Route::put('/edit/{object_id}',[BlogController::class,'edit'])->name('save');
    Route::delete('/delete/{object_id}',[BlogController::class,'delete'])->name('delete');
    Route::post('/create',[BlogController::class,'create'])->name('creat_post');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');