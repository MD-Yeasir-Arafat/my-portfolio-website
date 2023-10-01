<?php

namespace App\Http\Controllers\home;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Image;

class BlogController extends Controller
{
    public function allBlog()
    {
        $blog = Blog::latest()->get();
        return view('admin.blog.blog_all', compact('blog'));
    }

    public function addBlog()
    {
        $categorie = BlogCategory::orderby('blog_category', 'ASC')->get();
        return view('admin.blog.blog_add', compact('categorie'));
    }

    public function storeBlog(Request $request)
    {
        $image = $request->file('blog_image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();

        Image::make($image)->resize(430,327)->save('upload/blog/'.$name_gen);
        $save_url = 'upload/blog/'.$name_gen;

        Blog::insert([
            'blog_category_id' => $request->blog_cattegory_id,
            'blog_title' => $request->blog_title,
            'blog_tags' => $request->blog_tags,
            'blog_description' => $request->blog_description,
            'blog_image' => $save_url,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Blog insert successfully!',
            'alert-type' => 'success'
            );
        return redirect()->route('all.blog')->with($notification);
    }

    public function editBlog($id)
    {
        $categorie = BlogCategory::orderby('blog_category', 'ASC')->get();
        $blog = Blog::findOrFail($id);
        return view('admin.blog.blog_edit', compact('blog','categorie'));
    }

    public function updateBlog(Request $request)
    {

        
        $blog_id = $request->id;

        if($request->file('blog_image')){
            $image = $request->file('blog_image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();

            Image::make($image)->resize(430,327)->save('upload/blog/'.$name_gen);
            $save_url = 'upload/blog/'.$name_gen;

            Blog::findorFail($blog_id)->update([
                'blog_category_id' => $request->blog_category_id,
                'blog_title' => $request->blog_title,
                'blog_tags' => $request->blog_tags,
                'blog_description' => $request->blog_description,
                'blog_image' => $save_url,
                
            ]);

            $notification = array(
                'message' => 'Blog data updated with image successfully!',
                'alert-type' => 'success'
               );
            return redirect()->route('all.blog')->with($notification);

        }else{
            Blog::findorFail($blog_id)->update([
                'blog_category_id' => $request->blog_category_id,
                'blog_title' => $request->blog_title,
                'blog_tags' => $request->blog_tags,
                'blog_description' => $request->blog_description,
            ]);

            $notification = array(
                'message' => 'Blog data updated successfully!',
                'alert-type' => 'success'
               );
            return redirect()->route('all.blog')->with($notification);

        }
    }

    public function deleteBlog($id)
    {
        $deleteBlog = Blog::findOrFail($id);
        $img = $deleteBlog->blog_image;

        Blog::findOrFail($id)->delete();
        unlink($img);

        $notification = array(
            'message' => 'Blog deleted successfully!',
            'alert-type' => 'success'
           );
        return redirect()->route('all.blog')->with($notification);
    }

    public function blogDetails($id)
    {
        $allBlogs = Blog::latest()->limit(5)->get();
        $blog = Blog::findOrFail($id);
        $categorie = BlogCategory::orderby('blog_category', 'ASC')->get();
        return view('frontend.blog_details', compact('blog','allBlogs','categorie'));
    }

    public function categoryBlog($id)
    {
        $categoryBlog = Blog::where('blog_category_id',$id)->orderBy('id','DESC')->get();
        $allBlogs = Blog::latest()->limit(5)->get();
        $categorie = BlogCategory::orderby('blog_category', 'ASC')->get();
        $categoryName = BlogCategory::findOrFail($id);

        return view('frontend.category_blog', compact('categoryBlog','allBlogs','categorie','categoryName'));
    }

    public function allBlogHome()
    {
        $blog = Blog::latest()->paginate(2);
        $categorie = BlogCategory::orderby('blog_category', 'ASC')->get();
        return view('frontend.all_blogs', compact('blog','categorie'));
    }
}
