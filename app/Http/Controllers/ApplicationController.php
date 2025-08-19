<?php

namespace App\Http\Controllers;

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
        return view('blog');
    }

    public function showContactPage(Request $request)
    {
        return view('contact');
    }
}
