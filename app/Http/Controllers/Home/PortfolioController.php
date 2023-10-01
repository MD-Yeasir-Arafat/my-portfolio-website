<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Image;

class PortfolioController extends Controller
{
    public function portfolioPage()
    {
        $portfolio = Portfolio::latest()->get();
        return view('admin.portfolio.portfolio_all', compact('portfolio'));
    } //end

    public function addPortfolio()
    {
        return view('admin.portfolio.protfolio_add');
    } //end

    public function storePortfolio(Request $request)
    {
        $request->validate([
            'portfolio_name' => 'required',
            'portfolio_title' => 'required',
            'portfolio_image' => 'required',
        ],[
            'portfolio_name.required' => 'Portfolio name is required',
            'portfolio_title.required' => 'Portfolio title is required',
        ]);

        $image = $request->file('portfolio_image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();

        Image::make($image)->resize(1020,519)->save('upload/portfolio/'.$name_gen);
        $save_url = 'upload/portfolio/'.$name_gen;

        Portfolio::insert([
            'portfolio_name' => $request->portfolio_name,
            'portfolio_title' => $request->portfolio_title,
            'portfolio_description' => $request->portfolio_description,
            'portfolio_image' => $save_url,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Portfolio data insert successfully!',
            'alert-type' => 'success'
            );
        return redirect()->route('portfolio.page')->with($notification);
    } //end

    public function editPortfolio($id)
    {
        $portfolio = Portfolio::findOrFail($id);
        return view('admin.portfolio.portfolio_edit', compact('portfolio'));
    } //eend

    public function updatePortfolio(Request $request)
    {
        $portfolio_id = $request->id;

        if($request->file('portfolio_image')){
            $image = $request->file('portfolio_image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();

            Image::make($image)->resize(1020,519)->save('upload/portfolio/'.$name_gen);
            $save_url = 'upload/portfolio/'.$name_gen;

            Portfolio::findorFail($portfolio_id)->update([
                'portfolio_name' => $request->portfolio_name,
                'portfolio_title' => $request->portfolio_title,
                'portfolio_description' => $request->portfolio_description,
                'portfolio_image' => $save_url,
                
            ]);

            $notification = array(
                'message' => 'Portfolio data updated with image successfully!',
                'alert-type' => 'success'
               );
            return redirect()->route('portfolio.page')->with($notification);

        }else{
            Portfolio::findorFail($portfolio_id)->update([
                'portfolio_name' => $request->portfolio_name,
                'portfolio_title' => $request->portfolio_title,
                'portfolio_description' => $request->portfolio_description,
            ]);

            $notification = array(
                'message' => 'Portfolio data updated successfully!',
                'alert-type' => 'success'
               );
            return redirect()->route('portfolio.page')->with($notification);

        }

    }

    public function deletePortfolio($id)
    {
        $deletePortfolio = Portfolio::findOrFail($id);
        $img = $deletePortfolio->portfolio_image;

        Portfolio::findOrFail($id)->delete();
        unlink($img);

        $notification = array(
            'message' => 'Portfolio deleted successfully!',
            'alert-type' => 'success'
           );
        return redirect()->route('portfolio.page')->with($notification);

    }

    public function portfolioDetailes($id)
    {
        $portfolio = Portfolio::findOrFail($id);
        return view('frontend.portfolio_detailes', compact('portfolio'));
    }

    public function homePortfolio()
    {
        $portfolio = Portfolio::latest()->get();
        return view('frontend.portfolio', compact('portfolio'));
    }
}
