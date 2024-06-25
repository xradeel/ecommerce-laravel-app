<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\AdminProductModel;
use App\Models\backend\BlogModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class AdminBlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = BlogModel::select('id', 'title', 'content', 'read_time', 'image')
            ->get();
        return view('backend.blogs-list', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.add-blog');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'summary' => 'required|string|max:255',
            'tags' => 'nullable|string|max:255',
            'read_time' => 'required|numeric',
            'content' => 'required|string',
            'blog_pic' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
        ]);

        $blog = new BlogModel();
        $blog->title = $request->input('title');
        $blog->author = $request->input('author');
        $blog->summary = $request->input('summary');
        $blog->tags = $request->input('tags');
        $blog->read_time = $request->input('read_time');
        $blog->accesstoken = $request->_token;
        $blog->content = $request->input('content');

        if ($request->hasFile('blog_pic')) {
            $thumbnail = $request->file('blog_pic');
            $thumbnailName = 'blog_' . time() . '.' . $thumbnail->getClientOriginalExtension();
            $thumbnail->storeAs('public/blogs', $thumbnailName);
            $blog->image = 'blogs/' . $thumbnailName;
        }

        if ($blog->save()) {
            Log::info('Blog added successfully');
            return redirect()->route('blogs.list')->with('success', 'Blog added successfully');
        } else {
            Log::error('Failed to add blog');
            return back()->with('error', 'Failed to add blog');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $blog = BlogModel::findOrFail($id);
        return view('backend.edit-blog', compact('blog'));
    }

    // Update method to handle the update logic
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'summary' => 'required|string|max:255',
            'tags' => 'nullable|string',
            'read_time' => 'nullable|integer',
            'content' => 'required|string',
            'blog_pic' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
        ]);

        $blog = BlogModel::findOrFail($id);
        $blog->title = $request->input('title');
        $blog->author = $request->input('author');
        $blog->summary = $request->input('summary');
        $blog->tags = $request->input('tags');
        $blog->read_time = $request->input('read_time');
        $blog->content = $request->input('content');

        if ($request->hasFile('blog_pic')) {
            // Delete old blog picture if exists
            if ($blog->image) {
                Storage::delete('public/' . $blog->image);
            }
            $blogPic = $request->file('blog_pic');
            $blogPicName = 'blog_' . time() . '.' . $blogPic->getClientOriginalExtension();
            $blogPic->storeAs('public/blogs', $blogPicName);
            $blog->image = 'blogs/' . $blogPicName;
        }

        if ($blog->save()) {
            Log::info('Blog updated successfully');
            return redirect()->route('blogs.list')->with('success', 'Blog updated successfully');
        } else {
            Log::error('Failed to update blog');
            return back()->with('error', 'Failed to update blog');
        }
    }

    // Destroy method to handle the delete logic
    public function destroy($id)
    {
        $blog = BlogModel::findOrFail($id);
        if ($blog->blog_pic) {
            Storage::delete('public/' . $blog->blog_pic);
        }
        $blog->delete();

        return response()->json(['success' => 'Blog deleted successfully']);
    }
}
