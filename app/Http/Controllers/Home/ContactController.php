<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Carbon;

class ContactController extends Controller
{
    public function Contact(){
        return view('frontend.contact');
    } // end mehtod 


    public function StoreMessage(Request $request)
    {
        $insertResult = Contact::insert([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'phone' => $request->phone,
            'message' => $request->message, 
            'created_at' => Carbon::now(),
        ]);
    
        if ($insertResult) {
            return response()->json(['success' => true]);
        } else {
            return response()->json(['success' => false]);
        }
    }

    public function ContactMessage(){

        $contacts = Contact::latest()->get();
        return view('admin.contact.allcontact',compact('contacts'));

    } // end mehtod 


    public function DeleteMessage($id){
     
     Contact::findOrFail($id)->delete();

     $notification = array(
            'message' => 'Mensagem Deleteda!', 
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    } // end mehtod 

}
 