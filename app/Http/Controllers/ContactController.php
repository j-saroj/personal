<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Profile;

class ContactController extends Controller
{
    public function index(){

        $profile=Profile::first();
        return view('contact',compact('profile'));
    }

    public function adminshow(){
        $contacts=Contact::all();
        return view('admin.contact',compact('contacts'));
    }


    public function receive(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);
        $contact=new Contact();
        $contact->name=$request->name;
        $contact->email=$request->email;
        $contact->subject=$request->subject;
        $contact->message=$request->message;
        $contact->save();
        return redirect()->route('contact');

    }
}
