<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreBlogRequest;
use App\Http\Requests\UpdateBlogRequest;
use App\Models\Blog;
use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::orderBy('id', 'desc')->get();
        return view('pages.blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $blogCategories = BlogCategory::all();
        return view('pages.blogs.create', compact('blogCategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBlogRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBlogRequest $request)
    {
        $inputs = $request->input();
        $inputs['slug'] = Str::slug($request->title);
        // $inputs['admin_id'] = Auth::guard('admin')->id();
        // $inputs['author_name'] =  Auth::guard('admin')->user()->name;
        if ($request->hasFile('thumbnail')) {
            $image = $request->file('thumbnail');
            $name = str_replace(' ', '-', $image->getClientOriginalName());
            $image->move(public_path().'/storage/images/blogs/thumbnail', $name);
            $inputs['thumbnail'] = $name;
        }

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = str_replace(' ', '-', $image->getClientOriginalName());
            $image->move(public_path().'/storage/images/blogs', $name);
            $inputs['image'] = $name;
        }
        Blog::create($inputs);
        return redirect()->route('admin.blogs.index')->with('success', 'Created Successfuly !');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        return view('pages.blogs.show', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        $blogCategories = BlogCategory::all();
        return view('pages.blogs.edit', compact('blog', 'blogCategories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBlogRequest  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBlogRequest $request, Blog $blog)
    {
        $id = $blog->id;
        $this->validate($request, [
            'title' => 'required|string|unique:blogs,title,'.$id,
        ]);

        $inputs = $request->except(['_token', '_method']);
        $inputs['slug'] = Str::slug($request->title);

        if ($request->hasFile('thumbnail')) {
            $image = $request->file('thumbnail');
            $name=time().'_'.$image->getClientOriginalName();
            $image->move(public_path().'/storage/images/blogs/thumbnail', $name);
            $inputs['thumbnail'] = $name;
        }
        else{
            unset($inputs['thumbnail']);
        }

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name=time().'_'.$image->getClientOriginalName();
            $image->move(public_path().'/storage/images/blogs', $name);
            $inputs['image'] = $name;
        }
        else{
            unset($inputs['image']);
        }
        if(Blog::find($id)){
            Blog::where('id', $id)->update($inputs);
        }
        else{
            return redirect()->back()->with('error', 'Blog not found !');
        }
        return redirect()->back()->with('success', 'Updated Successfuly !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        //
    }
}
