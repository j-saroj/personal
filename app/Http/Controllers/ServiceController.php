<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::all();
        return view('services.services', compact('services'));
    }
    public function detail($id){
        $profile = Profile::first();
        $service = Service::find($id);
        $allservices = Service::all();
        return view('services.detail', compact('service','allservices','profile'));

    }



  public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->route('service.index')->with('success', 'Service deleted successfully');
    }
}
