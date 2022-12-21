<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Client\HomeController as ClientHomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', [ClientHomeController::class, 'index'])->name('/');

Auth::routes([
  'register' => false,
  'verify' => false,
]);

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
  Route::get('/home', [HomeController::class, 'index'])->name('home');

  // Category
  Route::prefix('category')->controller(CategoryController::class)->name('category.')->group(function () {
    Route::get('/', 'listCategories')->name('list');

    Route::get('/create', 'createCategory')->name('create');
    Route::post('/store', 'storeCategory')->name('store');

    Route::get('/edit/{id}', 'editCategory')->name('edit');
    Route::put('/update/{id}', 'updateCategory')->name('update');

    Route::delete('/delete/{id}', 'deleteCategory')->name('delete');
  });

    // Tag
    Route::prefix('tag')->controller(TagController::class)->name('tag.')->group(function () {
      Route::get('/', 'listTags')->name('list');
  
      Route::get('/create', 'createTag')->name('create');
      Route::post('/store', 'storeTag')->name('store');
  
      Route::get('/edit/{id}', 'editTag')->name('edit');
      Route::put('/update/{id}', 'updateTag')->name('update');
  
      Route::delete('/delete/{id}', 'deleteTag')->name('delete');
    });
});
