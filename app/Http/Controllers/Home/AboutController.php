<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\MultiImage;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Image;

class AboutController extends Controller
{
    public function aboutPage(){
        $aboutData = About::find(1);
        return view('admin.about_page.about_page_all', compact('aboutData'));
    }

    //update About
    public function updateAbout(Request $request){
        $about_id = $request->id;
        $old_data=About::findorFail($about_id);
        
        if($request->file('about_image')){
            $image = $request->file('about_image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();

            Image::make($image)->resize(523,605)->save('upload/home_about/'.$name_gen);
            $save_url = 'upload/home_about/'.$name_gen;

            About::findorFail($about_id)->update([
                'title' => $request->title,
                'short_title' => $request->short_title,
                'short_description' => $request->short_description,
                'long_description' => $request->long_description,
                'about_image' => $save_url,
            ]);

            unlink($old_data->about_image);

            $notification = array(
                'message' => 'Home About updated with image successfully!',
                'alert-type' => 'success'
               );
            return redirect()->route('about.page')->with($notification);

        }else{
            About::findorFail($about_id)->update([
                'title' => $request->title,
                'short_title' => $request->short_title,
                'short_description' => $request->short_description,
                'long_description' => $request->long_description,
            ]);

            $notification = array(
                'message' => 'Home About updated successfully!',
                'alert-type' => 'success'
               );
            return redirect()->route('about.page')->with($notification);

        }


    }

    public function homeAbout()
    {
        $aboutData = About::find(1);
        return view('frontend.about_page', compact('aboutData'));
    } //end

    public function aboutMultiImage()
    {
        return view('admin.about_page.multiImage');
    } //end

    public function storeAboutMultiImage(Request $request)
    {
        $images = $request->file('multi_image');

        foreach($images as $multi_image){
            $name_gen = hexdec(uniqid()).'.'.$multi_image->getClientOriginalExtension();

            Image::make($multi_image)->resize(220,220)->save('upload/multi/'.$name_gen);
            $save_url = 'upload/multi/'.$name_gen;

            MultiImage::insert([
              
                'multi_image' => $save_url,
                'created_at' => Carbon::now(),
            ]);
        }

            $notification = array(
                'message' => 'Images Insert successfully!',
                'alert-type' => 'success'
               );
            
            return redirect()->route('about.all.multi_image')->with($notification);
    } //end

    public function allMultiImage()
    {
        $allMultiImage = MultiImage::all();
        return view('admin.about_page.all_multiImage', compact('allMultiImage'));
    } //end

    public function editMultiImage($id)
    {
        $multiImage = MultiImage::findOrFail($id);
        return view('admin.about_page.edit_multi_image', compact('multiImage'));
    } //end

    public function updateMultiImage(Request $request)
    {
        $multi_id = $request->id;

        if($request->file('multi_image')){
            $image = $request->file('multi_image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();

            Image::make($image)->resize(220,220)->save('upload/multi/'.$name_gen);
            $save_url = 'upload/multi/'.$name_gen;

            MultiImage::findorFail($multi_id)->update([
                
                'multi_image' => $save_url,
            ]);

            $notification = array(
                'message' => 'Multi image update successfully!',
                'alert-type' => 'success'
               );
            return redirect()->route('about.all.multi_image')->with($notification);

        }
    } // end

    public function deleteMultiImage($id)
    {
        $deleteMultiImage = MultiImage::findOrFail($id);
        $img = $deleteMultiImage->multi_image;

        MultiImage::findOrFail($id)->delete();

        unlink($img);

        $notification = array(
            'message' => 'Multi image deleted successfully!',
            'alert-type' => 'success'
           );
        return redirect()->route('about.all.multi_image')->with($notification);

    }



}
