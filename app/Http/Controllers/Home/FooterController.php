<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Footer;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    public function footerManage()
    {
        $footer = Footer::find(1);
        return view('admin.footer.footer_all', compact('footer'));
    }

    public function updateFooter(Request $request)
    {
        $footer_id = $request->id;

        Footer::findorFail($footer_id)->update([
            'number' => $request->number,
            'short_description' => $request->short_description,
            'address' => $request->address,
            'email' => $request->email,
            'facebook' => $request->facebook,
            'linkedin' => $request->linkedin,
            'copyright' => $request->copyright,
        ]);

        $notification = array(
            'message' => 'Footer data updated successfully!',
            'alert-type' => 'success'
           );
        return redirect()->back()->with($notification);
    }
}
