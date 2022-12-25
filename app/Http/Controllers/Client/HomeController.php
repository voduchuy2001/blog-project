<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Setting;
use App\Models\Tag;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $settings = Setting::first();
        $categories = Category::orderBy('created_at', 'desc')->get();

        $featuredPosts = Post::orderBy('created_at', 'desc')
            ->where('status', 'featured')
            ->get();

        $latestPost1 = Post::orderBy('created_at', 'desc')
            ->take(1)->get();

        $latestPost2 = Post::orderBy('created_at', 'desc')
            ->skip(1)->take(1)->get();

        $latestPost3 = Post::orderBy('created_at', 'desc')
            ->skip(2)->take(1)->get();
        $latestPost45 = Post::orderBy('created_at', 'desc')
            ->skip(3)->take(2)->get();

        $popularPost = Post::orderBy('countViews', 'desc')
            ->limit(10)->get();

        return view('client.home.index', compact(
            'categories',
            'featuredPosts',
            'latestPost1',
            'latestPost2',
            'latestPost3',
            'latestPost45',
            'popularPost',
            'settings',
        ));
    }

    public function singlePost($slugPost)
    {
        $settings = Setting::first();
        $categories = Category::orderBy('created_at', 'desc')->get();
        $tags = Tag::orderBy('created_at', 'desc')->get();

        $post = Post::where('slugPost', $slugPost)->first();
        $post->increment('countViews');

        $relatedPosts = Post::orderBy('countViews', 'desc')
            ->where('category_id', '=', $post->category->id)
            ->where('id', '!=', $post->id)
            ->take(10)
            ->get();

        return view('client.components.single-post', compact(
            'categories',
            'tags',
            'post',
            'relatedPosts',
            'settings',
        ));
    }

    public function categoryPost($slugCat)
    {
        $settings = Setting::first();
        $categories = Category::orderBy('created_at', 'desc')->get();
        $categoryPost = Category::where('slugCat', $slugCat)->first();

        $posts = $categoryPost->posts()->orderBy('created_at', 'desc')->paginate(10);

        return view('client.components.category-posts', compact(
            'categories',
            'categoryPost',
            'posts',
            'settings',
        ));
    }

    public function tagPost($slugTag)
    {
        $settings = Setting::first();
        $categories = Category::orderBy('created_at', 'desc')->get();
        $tagPost = Tag::where('slugTag', $slugTag)->first();
        $posts = $tagPost->posts()->orderBy('created_at', 'desc')->paginate(10);

        return view('client.components.tag-posts', compact(
            'categories',
            'tagPost',
            'posts',
            'settings',
        ));
    }
}
