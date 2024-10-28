<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OurValue;

class OurvaluesController extends Controller
{
    public function adminindex()
    {
        $ourvalues = OurValue::all();
        return view('admin.our-values.index', compact('ourvalues'));
    }
    public function addourvalues()
    {
        return view('admin.our-values.create');
    }
    public function saveourvalues(Request $request)
    {

        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required',
        ]);

        $imagePath = $request->file('image')->store('images','public');

        $ourvalue = new OurValue();
        $ourvalue->title = $request->title;
        $ourvalue->description = $request->description;
        $ourvalue->image = $imagePath;
        $ourvalue->save();
        return redirect()->route('admin.our-values');
    }
    public function viewourvalues($id)
    {
        $ourvalue = OurValue::find($id);
        return view('admin.our-values.show', compact('ourvalue'));
    }
    public function editourvalues($id)
    {
        $ourvalue = OurValue::find($id);

        return view('admin.our-values.create', compact('ourvalue'));
    }
    public function updateourvalues(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
        $ourvalue = OurValue::find($id);
        if($request->hasFile('image')){
            $imagePath = $request->file('image')->store('images','public');
            // $ourvalue->image[0]->delete();
            $ourvalue->image = $imagePath;
        }
        $ourvalue->title = $request->title;
        $ourvalue->description = $request->description;
        $ourvalue->save();
        return redirect()->route('admin.our-values');
    }
    public function deleteourvalues($id)
    {
        $ourvalue = OurValue::find($id);
        $ourvalue->delete();
        return redirect()->route('admin.our-values');
    }

}
