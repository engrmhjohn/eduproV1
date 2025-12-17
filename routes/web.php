<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\FrontviewController;

Route::controller(FrontviewController::class)->group(function () {
    Route::get('/', 'index')->name('/');
    Route::get('/about-us', 'about')->name('front.about.us');
    Route::get('/our-courses', 'ourCourses')->name('front.our.courses');
    Route::get('/course-details', 'courseDetails')->name('front.course.details');
    Route::get('/contact-us', 'contactUs')->name('front.contact.us');
    Route::get('/success-story', 'successStory')->name('front.success.story');
});
