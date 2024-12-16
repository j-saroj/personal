<?php

namespace App\Http\Controllers;

use App\Mail\BusinessMail;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Profile;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;


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
        Mail::to($request->email)->queue(new BusinessMail($contact));
        return redirect()->route('contact');

    }
}
