<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class PostController extends Controller
{
    public function listPosts()
    {
        $posts = Post::orderBy('created_at', 'DESC')->paginate(10);
        return view('admin.posts.index', compact('posts'));
    }

    public function createPost()
    {
        $categories = Category::all();
        $tags = Tag::all();

        if ($categories->count() == 0 || $tags->count() == 0) {
            return redirect()->back()->with("warning", "Please add categories and tags before adding posts!");
        }

        return view('admin.posts.create', compact('categories', 'tags'));
    }

    public function storePost(Request $request)
    {
        $this->validate($request, [
            'postTitle' => 'required',
            'postContent' => 'required',
            'fImagePost' => 'required|image',
            'category_id' => 'required',
            'tags' => 'required',
        ]);

        $featured_image = $request->fImagePost;
        $featured_image_new_name = time() . $featured_image->getClientOriginalName();
        $featured_image->move('uploads/posts/', $featured_image_new_name);

        $post = Post::create([
            'postTitle' => $request->postTitle,
            'postContent' => $request->postContent,
            'fImagePost' => 'uploads/posts/' . $featured_image_new_name,
            'category_id' => $request->category_id,
            'slugPost' => Str::slug($request->postTitle) . '-' . Str::random(20),
            'meteDes' => $request->meteDes,
            'metaKey' => $request->metaKey,
            'metaTitle' => $request->metaTitle,
        ]);

        $post->tags()->attach($request->tags);
        $post->save();
        return redirect()->route('post.list')->with(['message' => 'Create post: ' . $post->postTitle . ' success!']);
    }

    public function editPost($id)
    {
        $post = Post::findOrFail($id);
        $categories = Category::all();
        $tags = Tag::all();

        return view('admin.posts.edit', compact('post', 'categories', 'tags'));
    }

    public function updatePost(Request $request, $id)
    {
        $this->validate($request, [
            'postTitle' => 'required',
            'postContent' => 'required',
            'fImagePost' => 'required|image',
            'category_id' => 'required',
            'tags' => 'required',
        ]);

        $post = Post::findOrFail($id);

        $oldFeatured = $post->featured_image;
        // Update new image path
        if ($request->featured_image != '') {
            File::delete($post->featured_image);
            $featured_image = $request->featured_image;
            $featured_image_new_name = time() . $featured_image->getClientOriginalName();
            $featured_image->move('uploads/posts/', $featured_image_new_name);

            $post->featured_image = 'uploads/posts/' . $featured_image_new_name;
        } else {
            $post->featured_image = $oldFeatured;
        }

        if ($request->status == 'featured') {
            $post->status = 'featured';
        } else {
            $post->status = 'non-featured';
        }

        $post->postTitle = $request->postTitle;
        $post->postContent = $request->postContent;
        $post->category_id = $request->category_id;

        $oldSlug = $post->slugPost;
        if ($request->postTitle) {
            $post->slugPost = Str::slug($request->postTitle) . '-' . Str::random(20);
        } else {
            $post->slug = $oldSlug;
        }

        $post->tags()->sync($request->tags);

        $post->save();
        return redirect()->route('post.list')->with(['message' => 'Update post: ' . $post->postTitle . ' success!']);
    }
}
