<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\FrontviewController;

Route::controller(FrontviewController::class)->group(function () {
    Route::get('/', 'index')->name('/');
});
