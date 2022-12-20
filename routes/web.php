<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Client\HomeController as ClientHomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', [ClientHomeController::class, 'index'])->name('/');

Auth::routes([
  'register' => false,
  // 'reset' => false,
  'verify' => false,
]);

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
  Route::get('/home', [HomeController::class, 'index'])->name('home');

  // Category 
  Route::prefix('category')->controller(CategoryController::class)->name('category.')->group(function () {
    Route::get('/', 'index')->name('index');
  });
});
