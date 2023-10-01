<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\HomeSlide;
use Illuminate\Http\Request;
use Image;

class HomeSliderController extends Controller
{
    public function homeSlider(){
        $homeslide = HomeSlide::find(1);
        return view('admin.home_slide.home_slide_all', compact('homeslide'));
    }

    //update slider
    public function updateSlider(Request $request){
        $slide_id = $request->id;
        $old_data = HomeSlide::findorFail($slide_id);


        if($request->file('home_slide')){
            $image = $request->file('home_slide');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();

            Image::make($image)->resize(636,852)->save('upload/home_slider/'.$name_gen);
            $save_url = 'upload/home_slider/'.$name_gen;

            HomeSlide::findorFail($slide_id)->update([
                'title' => $request->title,
                'short_title' => $request->short_title,
                'video_url' => $request->video_url,
                'home_slide' => $save_url,
            ]);
           unlink($old_data->home_slide);

            $notification = array(
                'message' => 'Home slide updated with image successfully!',
                'alert-type' => 'success'
               );
            return redirect()->route('home.slide')->with($notification);

        }else{
            HomeSlide::findorFail($slide_id)->update([
                'title' => $request->title,
                'short_title' => $request->short_title,
                'video_url' => $request->video_url,
            ]);

            $notification = array(
                'message' => 'Home slide updated successfully!',
                'alert-type' => 'success'
               );
            return redirect()->route('home.slide')->with($notification);

        }


    }
}
