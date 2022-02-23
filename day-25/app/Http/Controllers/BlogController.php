<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    
    public function index()
    {
        return view('add-blog');
    }
    public function createBlog(Request $request)
    {
        $this->blog = new Blog();
        $this->blog->title = $request->title;
        $this->blog->author = $request->author;
        $this->blog->description = $request->description;
        $this->blog->save();

        return redirect()->back()->with('message', 'Blog created successfully');
    }
}
