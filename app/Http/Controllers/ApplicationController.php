<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function showHomePage(Request $request)
    {
        return view('home');
    }

    public function showAboutPage(Request $request)
    {
        return view('about');
    }

    public function showProjectPage(Request $request)
    {
        return view('projects');
    }

    public function showBlogPage(Request $request)
    {
        if (Blog::all()->count() > 0) {
            $blogs = Blog::all();
            return view('blog', compact('blogs'));
        } else {
            $blogs = Blog::factory()->count(6)->create();
            return view('blog', compact('blogs'));
        }
    }

    public function showContactPage(Request $request)
    {
        return view('contact');
    }
}
