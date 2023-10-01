<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.home');
    }

    //logout
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();
        $notification = array(
            'message' => 'You logout successfully!',
            'alert-type' => 'success'
           );

        return redirect('/login')->with($notification);
    }

    //profile
    public function profile()
    {
        $id = Auth::user()->id;
        $adminData = User::find($id);
        return view('admin.admin_profile', compact('adminData'));

    }

    //store profile
    public function storeProfile(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:users',
        ]);

       $id = Auth::user()->id;
       $data = User::find($id);

       $data->name = $request->name;
       $data->email = $request->email; 
       $data->username = $request->username;
       
       if($request->file('profile_image'))
       {
            $file = $request->file('profile_image');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/admin_images'),$filename);
            $data['profile_image'] = $filename;
       }
       $data->save();
       
       $notification = array(
        'message' => 'Admin Profile updated successfully!',
        'alert-type' => 'success'
       );
       return redirect()->route('admin.profile')->with($notification);

    }

    //change password
    public function changePassword()
    {
        return view('admin.admin_change_password');
    }

    //update Password
    public function updatePassword(Request $request)
    {
        $validateData = $request->validate([
            'oldPassword' => 'required',
            'newPassword' => 'required',
            'confirm_Password' => 'required|same:newPassword',
        ]);

        $hashPassword = Auth::user()->password;
        if(Hash::check($request->oldPassword, $hashPassword))
        {
            $users = User::find(Auth::id());
            $users->password = bcrypt($request->newPassword);
            $users->save();

            session()->flash('message','Password updated Successfully');
            return redirect()->back();

        }else{
            session()->flash('message','Old password not match!');
            return redirect()->back();
        }
       
        
    }

}
