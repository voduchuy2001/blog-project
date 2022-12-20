<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        // $categories = Category::orderBy('created_at')->paginate(10);
        // return view('admin.categories.index', compact('categories'));
    }

    public function createCategory(Request $request){
        
    }
}
