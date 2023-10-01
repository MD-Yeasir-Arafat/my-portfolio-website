<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class ContactController extends Controller
{
    public function contact()
    {
        return view('frontend.contact');
    }

    public function storeContact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:50',
            'email'=> 'required',
            'subject'=> 'required',
            'phone' => 'required|numeric|digits:11',
            ]);

            Contact::insert([
                'name' => $request->name,
                'email' => $request->email,
                'subject' => $request->subject,
                'phone' => $request->phone,
                'message' => $request->message,
                'created_at' => Carbon::now(),
            ]);
            $notification = array(
                'message' => 'Your Message save successfully!',
                'alert-type' => 'success'
               );
            return redirect()->back()->with($notification);
    }

    public function contactMessage()
    {
        $contact = Contact::latest()->get();
        return view('admin.contact.allcontact', compact('contact'));
    }

    public function contactDelete($id)
    {
        $contact = Contact::findOrFail($id)->delete();
        $notification = array(
            'message' => 'Contact message successfully!',
            'alert-type' => 'success'
           );
        return redirect()->back()->with($notification);

    }
}
