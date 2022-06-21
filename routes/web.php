<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\http\Controllers\Auth\LoginController;
use App\http\Controllers\LogoutController;
use App\Http\Controllers\PostController;
use App\http\Controllers\ProfileController;
use GuzzleHttp\Middleware;

Route::get('/', function(){
    return view ('home');
}) ->name('home');


Route::post('/post', [PostController::class, 'postMessage'])->name("post"); 
Route::get('/post/', [PostController::class, "index"]);


Route::post('/logout',[LogoutController::class,'store'])->name('logout');


Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/login',[LoginController::class,'store']); // this should be in the Api

Route::get('/register',[RegisterController::class,'index'])->name('register');
Route::post('/register',[RegisterController::class,'store']); // this should be in the Api

Route::get('/profile',[ProfileController::class,'index'])->name('profile');
