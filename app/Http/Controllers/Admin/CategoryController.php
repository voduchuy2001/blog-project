<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{
    public function listCategories()
    {
        $categories = Category::orderBy('created_at', 'DESC')->paginate(10);
        return view('admin.categories.index', compact('categories'));
    }

    public function createCategory()
    {
        return view('admin.categories.create');
    }

    public function storeCategory(Request $request)
    {
        $this->validate($request, [
            'nameCat' => 'required|unique:categories',
            'fImageCat' => 'required',
        ]);

        $category =  new Category();

        $featured_image_cat = $request->fImageCat;
        $featured_image_new_name = time() . $featured_image_cat->getClientOriginalName();
        $featured_image_cat->move('uploads/categories/', $featured_image_new_name);

        $category = Category::create([
            'nameCat' => $request->nameCat,
            'fImageCat' => 'uploads/categories/' . $featured_image_new_name,
            'slugCat' => Str::slug($request->nameCat),
        ]);

        return redirect()->route('category.list')->with(['message' => 'Create category: ' . $category->nameCat . ' success!']);
    }

    public function editCategory($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.categories.edit', compact('category'));
    }

    public function updateCategory(Request $request, $id)
    {
        $this->validate($request, [
            'nameCat' => 'required|unique:categories',
        ]);

        $category = Category::findOrFail($id);

        $oldFImage = $category->fImageCat;
        if ($request->fImageCat) {
            File::delete($category->fImageCat);
            $featured_image_cat = $request->fImageCat;
            $featured_image_new_name = time() . $featured_image_cat->getClientOriginalName();
            $featured_image_cat->move('uploads/categories/', $featured_image_new_name);

            $category->fImageCat = 'uploads/categories/' . $featured_image_new_name;
        } else {
            $category->fImageCat = $oldFImage;
        }

        $category->nameCat = $request->nameCat;
        $category->slugCat = Str::slug($request->nameCat);
        $category->save();

        return redirect()->route('category.list')->with(['message' => 'Update category: ' . $category->nameCat . ' success!']);
    }

    public function deleteCategory($id)
    {
        $category = Category::findOrFail($id);

        File::delete($category->fImageCat);
        $category->delete();

        return redirect()->route('category.list')->with(['message' => 'Delete category: ' . $category->nameCat . ' success!']);
    }
}
