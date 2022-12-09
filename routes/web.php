<?php

use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
  return view('welcome');
});

Auth::routes([
  'register' => false,
  'reset' => false,
  'verify' => false,
]);

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
  Route::get('/home', [HomeController::class, 'index'])->name('home');

  // Post 
  // Route::prefix('post')->controller(PostController::class)->name('post.')->group(function () {
  //   Route::get('/', 'index')->name('index');
  // });
});
