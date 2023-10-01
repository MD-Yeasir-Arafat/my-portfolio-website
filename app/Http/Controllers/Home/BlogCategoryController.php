<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class BlogCategoryController extends Controller
{
    public function allBlogCategory()
    {
        $blogCategory = BlogCategory::latest()->get();
        return view('admin.blog.blogCategory_all', compact('blogCategory'));
    }

    public function addBlogCategory()
    {
        return view('admin.blog.blogCategory_add');
    }

    public function storeBlogCategory(Request $request)
    {
        
        BlogCategory::insert([
            'blog_category' => $request->blog_category,
        ]);

        $notification = array(
            'message' => 'Blog category data insert successfully!',
            'alert-type' => 'success'
            );
        return redirect()->route('all.blog.category')->with($notification);
    }

    public function editBlogCategory($id)
    {
        $blogCategory = BlogCategory::findOrFail($id);
        return view('admin.blog.blogCategory_edit', compact('blogCategory'));
    }

    public function updateBlogCategory(Request $request,$id)
    {
        $request->validate([
            'blog_category' => 'required',
        ],[
            'blog_category.required' => 'Blog category name is required',
        ]);

        BlogCategory::findOrFail($id)->update([
            'blog_category' => $request->blog_category,
        ]);

        $notification = array(
            'message' => 'Blog category data Update successfully!',
            'alert-type' => 'success'
            );
        return redirect()->route('all.blog.category')->with($notification);
    }

    public function deleteBlogCategory($id)
    {
       BlogCategory::findOrFail($id)->delete();

       $notification = array(
        'message' => 'Blog category delete successfully!',
        'alert-type' => 'success'
        );
    return redirect()->back()->with($notification);

    }
}
