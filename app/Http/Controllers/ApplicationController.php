<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function showHomePage(Request $request)
    {
        return view('home');
    }

    public function showAboutPage(Request $request){
        return view('about');
    }
}
