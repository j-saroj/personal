<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Work;
use Illuminate\Http\Request;
use App\Models\Testimonial;
use App\MOdels\About_Us;
use App\Models\BlogPost;
use App\Models\OurValue;
use App\Models\Service;
use App\Models\Feature;
use App\Models\Faq;

class PageController extends Controller
{
    public function home()
    {
        $Ourvalues = OurValue::all();
        $services = Service::all();
        $about_us = About_Us::where('page_name','homepage')->first();
        $products = Work::all();
        $teams = Team::all();
        $testimonials = Testimonial::all();
        $features = Feature::all();
        $faqs = Faq::all();

        return view('homepage',compact('about_us','faqs','testimonials','teams','Ourvalues','services','products','features'));
    }
    public function portfolio()
    {
        $product = Work::first();


        return view('portfolio', compact('product'));
    }
    public function about()
    {
        return view('about');
    }
    public function team()
    {
        $teams = Team::all();
        return view('teams', compact('teams'));
    }


    public function testimonial()
    {
        $testimonials = Testimonial::all();
        return view('testimonial',compact('testimonials'));
    }

    public function blogs(){
        $blogs = BlogPost::all();
        return view('blogs',compact('blogs'));
    }

    public function blogdetail($id){
        $blog = BlogPost::find($id);
        $blogs = BlogPost::all();
        return view('blog-details',compact('blog','blogs'));
    }

    public function ourvalues(){
        $Ourvalues = OurValue::all();
        return view('homepage',compact('Ourvalues'));
    }
}
