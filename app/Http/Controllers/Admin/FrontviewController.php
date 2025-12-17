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
    public function courseDetails(){
        return view('frontend.course.course-details');
    }
    public function contactUs(){
        return view('frontend.contact-us.contact');
    }
    public function successStory(){
        return view('frontend.success-story.success_story');
    }
}
