<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faq;

class FaqController extends Controller
{
    public function admin_view(){
        $faqs = Faq::all();
        return view('admin.faqs.index',compact('faqs'));
    }
    public function viewfaq($id){
        $faq = Faq::find($id);
        return view('admin.faqs.view',compact('faq'));
    }
    public function addfaq(){
        return view('admin.faqs.add');
    }
    public function savefaq(Request $request){
        $request->validate([
            'question' => 'required',
            'answer' => 'required'
        ]);
        $faq = new Faq();
        $faq->question = $request->question;
        $faq->answer = $request->answer;
        $faq->save();
        return redirect()->route('admin.faqs')->with('success','FAQ added successfully');
    }
    public function editfaq($id){
        $faq = Faq::find($id);
        return view('admin.faqs.add',compact('faq'));
    }
    public function updatefaq(Request $request,$id){
        $request->validate([
            'question' => 'required',
            'answer' => 'required'
        ]);
        $faq = Faq::find($id);
        $faq->question = $request->question;
        $faq->answer = $request->answer;
        $faq->save();
        return redirect()->route('admin.faqs')->with('success','FAQ updated successfully');
    }
    public function deletefaq($id){
        $faq = Faq::find($id);
        $faq->delete();
        return redirect()->route('admin.faqs')->with('success','FAQ deleted successfully');
    }

}
