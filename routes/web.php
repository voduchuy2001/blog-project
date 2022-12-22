<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Client\HomeController as ClientHomeController;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
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

  // Post
  Route::prefix('post')->controller(PostController::class)->name('post.')->group(function () {
    Route::get('/', 'listPosts')->name('list');

    Route::get('/create', 'createPost')->name('create');
    Route::post('/store', 'storePost')->name('store');

    Route::get('/edit/{id}', 'editPost')->name('edit');
    Route::put('/update/{id}', 'updatePost')->name('update');

    Route::delete('/delete/{id}', 'deletePost')->name('delete');
  });

  // User
  Route::prefix('user')->controller(UserController::class)->name('user.')->group(function () {
    Route::get('/change-profile', 'changeProfile')->name('changeProfile');
    Route::put('/change-profile/update-profile', 'updateProfile')->name('updateProfile');

    Route::get('/change-password', 'changePassword')->name('changePassword');
    Route::put('/change-profile/update-password', 'updatePassword')->name('updatePassword');
  });

  // Search Post
  Route::get('/search/post-results', function () {
    $posts = Post::orderBy('created_at', 'desc')->where('postTitle', 'like', '%' . request('query') . '%')
      ->paginate(10);

    return view('admin.components.post-results', compact('posts'))->with('query', request('query'));
  });

  // Search Tag
  Route::get('/search/tag-results', function () {
    $tags = Tag::orderBy('created_at', 'desc')->where('nameTag', 'like', '%' . request('query') . '%')
      ->paginate(10);

    return view('admin.components.tag-results', compact('tags'))->with('query', request('query'));
  });

  // Search Post
  Route::get('/search/category-results', function () {
    $categories = Category::orderBy('created_at', 'desc')->where('nameCat', 'like', '%' . request('query') . '%')
      ->paginate(10);

    return view('admin.components.category-results', compact('categories'))->with('query', request('query'));
  });
});
