<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontViewController extends Controller
{
    public function index(){
        return view('frontend.home.index');
    }
    public function about(){
        return view('frontend.about-us.about');
    }
    public function ourCourses(){
        return view('frontend.course.course');
    }
    public function contactUs(){
        return view('frontend.contact-us.contact');
    }
}
