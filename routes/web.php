<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/more-courses', [\App\Http\Controllers\HomeController::class, 'moreCourses'])->name('more-courses');
Route::get('/course-details', [\App\Http\Controllers\HomeController::class, 'courseDetails'])->name('course-details');

Route::view('/faqs', 'pages.faq');
Route::view('/contact-us', 'pages.contact');
