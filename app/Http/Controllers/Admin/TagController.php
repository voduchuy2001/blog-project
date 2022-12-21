<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TagController extends Controller
{
    public function listTags()
    {
        $tags = Tag::orderBy('created_at', 'DESC')->paginate(10);
        return view('admin.tags.index', compact('tags'));
    }

    public function createTag()
    {
        return view('admin.tags.create');
    }

    public function storetag(Request $request)
    {
        $this->validate($request, [
            'nameTag' => 'required|unique:tags',
        ]);

        $tag = new Tag();

        $tag = Tag::create([
            'nameTag' => $request->nameTag,
            'slugTag' => Str::slug($request->nameTag),
        ]);

        return redirect()->route('tag.list')->with(['message' => 'Create tag: ' . $tag->nameTag . ' success!']);
    }

    public function editTag($id)
    {
        $tag = Tag::findOrFail($id);
        return view('admin.tags.edit', compact('tag'));
    }

    public function updateTag(Request $request, $id)
    {
        $this->validate($request, [
            'nameTag' => 'required|unique:tags',
        ]);

        $tag = Tag::findOrFail($id);

        $tag->nameTag = $request->nameTag;
        $tag->slugTag = Str::slug($request->nameTag);
        $tag->save();

        return redirect()->route('tag.list')->with(['message' => 'Update tag: ' . $tag->nameTag . ' success!']);
    }

    public function deleteTag($id)
    {
        $tag = Tag::findOrFail($id);
        
        $tag->delete();

        return redirect()->route('tag.list')->with(['message' => 'Delete tag: ' . $tag->nameTag . ' success!']);
    }
}
