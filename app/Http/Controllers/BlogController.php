<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogPost;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = BlogPost::all();
        return view('admin.blogs.blogs',compact('blogs'));
    }


    public function viewblog($id)
    {
        $blog = BlogPost::find($id)->first();
        return view('admin.blogs.detail',compact('blog'));
    }


    public function addblogs()
    {
        return view('admin.blogs.add');
    }



    public function saveblogs(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required',
            'author_description' => 'reqrired',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'date' => 'required|date',
            'content' => 'required',
            'category' => 'required',
        ]);
        $imagePath = $request->file('image')->store('images', 'public');
        BlogPost::create([
            'title' => request('title'),
            'author' => request('author'),
            'author_description' => 'reqrired',
            'image' => $imagePath,
            'date' => request('date'),
            'content' => request('content'),
            'category' => request('category'),
        ]);
        return redirect()->route('admin.blogs')->with('success', 'Blog created successfully');
    }



    public function editblogs($id)
    {
        $blog = BlogPost::find($id)->first();

        return view('admin.blogs.add',compact('blog'));
    }




    public function updateblogs(Request $request, $id)
    {
        $blog = BlogPost::find($id)->first();
        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'content' => 'required',
            'author_description' => 'required',
            'date' => 'required|date',
            'category' => 'required',
        ]);
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');


            if ($blog->image) {
                Storage::delete('public/' . $blog->image);
            }
            $blog->title = request('title');
            $blog->date = request('date');
            $blog->category = request('category');
            $blog->content = request('content');
            $blog->author = request('author');
            $blog->author_description = request('author_description');
            $blog->image = $imagePath;
            $blog->save();
        } else {
            $blog->title = request('title');
            $blog->date = request('date');
            $blog->description = request('content');
            $blog->category = request('category');
            $blog->author = request('author');
            $blog->author_description = request('author_description');
            $blog->save();
        }
        return redirect()->route('admin.blogs')->with('success', 'Blog updated successfully');
    }



    public function deleteblogs($id)
    {
        $blog = BlogPost::find($id)->first();
        $blog->delete();
        return redirect()->route('admin.blogs')->with('success', 'Blog deleted successfully');
    }

}
