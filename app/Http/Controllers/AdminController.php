<?php

namespace App\Http\Controllers;

use App\Models\About_Us;
use App\Models\Profile;
use App\Models\Service;
use App\Models\Team;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;
use App\Models\OurValue;
use App\Models\Feature;

class AdminController extends Controller
{

    public function index()
    {
        $profile = Profile::first();
        $services = Service::all();
        return view('admin.dashboard.index');
    }


    public function profile()
    {
        $profiles = Profile::all();
        return view('admin.profile.view', compact('profiles'));
    }






    public function services()
    {
        $services = Service::all();
        return view('admin.services.service', compact('services'));
    }



    public function editService($id)
    {
        $service = Service::find($id);
        return view('admin.services.addservice', compact('service'));
    }


    public function updateService(Request $request, $id)
    {

        $service = Service::find($id);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');


            if ($service->image) {
                Storage::delete('public/' . $service->image);
            }
            $service->title = request('title');
            $service->description = request('description');
            $service->image = $imagePath;
            $service->save();
        } else {
            $service->title = request('title');
            $service->description = request('description');
            $service->save();
        }







        return redirect()->route('admin.services');
    }
    public function viewService($id)
    {
        $service = Service::find($id);
        return view('admin.services.view', compact('service'));
    }


    public function addService()
    {
        return view('admin.services.addservice');
    }

    public function saveService(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required',
        ]);
        $imagePath = $request->file('image')->store('images', 'public');
        $service = new Service();
        $service->title = $request->title;
        $service->image = $imagePath;

        $service->description = $request->description;

        $service->save();
        return redirect()->route('admin.services');
    }
    public function deleteService($id)
    {
        $service = Service::find($id);
        $service->delete();
        return redirect()->route('admin.services');
    }


    public function addProfile()
    {
        return view('admin.profile.add');
    }


    // public function viewprofile($id){
    //     $profile=Profile::find($id)->get();
    //     return view('admin.profile.view',compact('profile'));

    // }


    public function saveProfile(Request $request)
    {

        $request->validate([
            'name' => 'string|required',
            'dob' => 'required|date',
            'address' => 'required',
            'number' => 'required',
            'title' => 'required',
            'personalIntroduction' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'words' => 'required',
            'email' => 'required|email',
            'fathersName' => 'required',
            'mothersName' => 'required',
            'grandfather' => 'required',
            'grandmother' => 'required',
            'spouse' => 'required',
            'education' => 'required',
            'achievement' => 'required',
            'training' => 'required',
            'experience' => 'required',
            'hobby' => 'required',
            'skills' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images');
        } else {
            $imagePath = null;
        }

        $imagePath = $request->file('image')->store('images');

        Profile::create([
            'name' => $request->name,
            'dob' => $request->dob,
            'address' => $request->address,
            'number' => $request->number,
            'title' => $request->title,
            'personalIntroduction' => $request->personalIntroduction,
            'image' => $imagePath,
            'words' => $request->words,
            'email' => $request->email,
            'fathersName' => $request->fathersName,
            'mothersName' => $request->mothersName,
            'grandfather' => $request->grandfather,
            'grandmother' => $request->grandmother,
            'spouse' => $request->spouse,
            'education' => $request->education,
            'achievement' => $request->achievement,
            'training' => $request->training,
            'experience' => $request->experience,
            'hobby' => $request->hobby,
            'skills' => $request->skills,
        ]);
        return redirect()->route('admin.dashboard');
    }


    public function viewProfile($id)
    {
        $profile = Profile::find($id)->first();
        return view('admin.profile.details', compact('profile'));
    }


    public function editProfile($id)
    {
        $profile = Profile::find($id)->first();
        return view('admin.profile.add', compact('profile'));
    }






    public function updateProfile($id, Request $request)
    {
        $profile = Profile::find($id);
        if ($request->has('image')) {
            $imagePath = request('image')->store('images', 'public');
            $profile->image = $imagePath;
        }

        $profile->name = request('name');
        $profile->dob = request('dob');
        $profile->address = request('address');
        $profile->number = request('number');
        $profile->title = request('title');
        $profile->personalIntroduction = request('personalIntroduction');
        $profile->email = request('email');
        $profile->fathersName = request('fathersName');
        $profile->mothersName = request('mothersName');
        $profile->grandfather = request('grandfather');
        $profile->grandmother = request('grandmother');
        $profile->spouse = request('spouse');
        $profile->education = request('education');
        $profile->achievement = request('achievement');
        $profile->training = request('training');
        $profile->experience = request('experience');
        $profile->hobby = request('hobby');
        $profile->skills = request('skills');
        $profile->save();
        return redirect()->route('admin.profile');
    }


    public function deleteProfile($id)
    {
        $profile = Profile::find($id);
        $profile->delete();
        return redirect()->route('admin.profile');
    }





    public function teams()
    {
        $teams = Team::all();
        return view('admin.Teams.teams', compact('teams'));
    }


    public function addteam()
    {
        return view('admin.Teams.add');
    }


    public function saveteam(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'content' => 'required',
            'position' => 'required',
            'image' => 'required',
            'facebook' => 'nullable',
            'twitter' => 'nullable',
            'linkedin' => 'nullable',
            'instagram' => 'nullable',
        ]);
        $imagePath = $request->file('image')->store('images', 'public');
        $team = new Team();
        $team->name = $request->name;
        $team->position = $request->position;
        $team->content = $request->content;
        $team->image = $imagePath;
        $team->facebook = $request->facebook;
        $team->twitter = $request->twitter;
        $team->linkedin = $request->linkedin;
        $team->instagram = $request->instagram;


        $team->save();
        return redirect()->route('admin.add.team');
    }

    public function viewteam($id)
    {
        $team = Team::find($id);
        return view('admin.Teams.view', compact('team'));
    }
    public function editteam($id)
    {
        $team = Team::find($id);
        return view('admin.Teams.add', compact('team'));
    }
    public function deleteTeam($id)
    {
        $team = Team::find($id);
        $team->delete();
        return redirect()->route('admin.teams');
    }
    public function updateteam($id, Request $request)
    {


        $team = Team::find($id);
        if ($request->image) {
            if ($team->image) {
                Storage::delete('public/' . $team->image);
            }
            $imagePath = request('image')->store('images', 'public');

// This is for secured images which will not be accessible by the public and only by the authenticated users
//             $imagePath = $request->file('image')->store('private/images');
            $team->image = $imagePath;





        }
        $team->name = request('name');
        $team->position = request('position');
        $team->content = request('content');
        $team->facebook = request('facebook');
        $team->twitter = request('twitter');
        $team->linkedin = request('linkedin');
        $team->instagram = request('instagram');
        $team->save();
        return redirect()->route('admin.teams');
    }










    public function testimonials()
    {
        $testimonials = Testimonial::all();
        return view('admin.testimonials.index', compact('testimonials'));
    }


    public function addtestimonial()
    {
        return view('admin.testimonials.add');
    }


    public function savetestimonial(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'content' => 'required',
            'position' => 'required',
            'image' => 'required',
        ]);
        $imagePath = $request->file('image')->store('images', 'public');
        $testimonial = new Testimonial();
        $testimonial->name = $request->name;
        $testimonial->position = $request->position;
        $testimonial->content = $request->content;
        $testimonial->image = $imagePath;


        $testimonial->save();
        return redirect()->route('admin.testimonials');
    }

    public function viewtestimonial($id)
    {
        $testimonial = Testimonial::find($id);
        return view('admin.testimonials.view', compact('testimonial'));
    }
    public function edittestimonial($id)
    {
        $testimonial = Testimonial::find($id);
        return view('admin.testimonials.add', compact('testimonial'));
    }
    public function deleteTestimonial($id)
    {
        $team = Testimonial::find($id);
        $team->delete();
        return redirect()->route('admin.testimonials');
    }
    public function updatetestimonial($id)
    {
        $testimonial = Team::find($id);

         dd($testimonial);


        if(request('image')){
        Storage::delete('public/' . $testimonial->image);
        $imagePath = request('image')->store('images', 'public');
        }

        $testimonial->name = request('name');
        $testimonial->position = request('position');
        $testimonial->content = request('content');
        $testimonial->image = $imagePath;
        $testimonial->save();
        return redirect()->route('admin.testimonials');
    }


    public function about_us()
    {
        $about_us = About_us::all();
        return view('admin.about us.about_us', compact('about_us'));
    }


    public function add_about_us()
    {
        return view('admin.about us.add');
    }

    public function save_about_us(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'image' => 'required|image',
            'page_name' => 'required|string',
        ]);
        $imagePath = $request->file('image')->store('images', 'public');
        $about_us = new About_us();
        $about_us->title = $request->title;
        $about_us->description = $request->description;
        $about_us->image = $imagePath;
        $about_us->page_name = $request->page_name;

        $about_us->save();
        return redirect()->route('admin.about_us');
    }

    public function view_about_us($id)
    {
        $about_us = About_Us::find($id)->first();

        return view('admin.about us.view', compact('about_us'));
    }

    public function edit_about_us($id)
    {
        $about_us = About_Us::find($id)->first();
        return view('admin.about us.add', compact('about_us'));
    }

    public function delete_about_us($id)
    {
        $about_us = About_Us::find($id);
        $about_us->delete();
        return redirect()->route('admin.about_us');
    }


    public function update_about_us($id, Request $request)
    {
        $about_us = About_Us::find($id);
        if ($request->image) {
            if ($about_us->image) {
                Storage::delete('public/' . $about_us->image);
            }
            $imagePath = request('image')->store('images', 'public');

            $about_us->image = $imagePath;
        }
        $about_us->title = request('title');
        $about_us->description = request('description');
        $about_us->page_name = request('page_name');
        $about_us->save();
        return redirect()->route('admin.about_us');
    }
}
