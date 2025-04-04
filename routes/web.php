<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::view('/more-courses', 'pages.more-courses');
Route::view('/faqs', 'pages.faq');
Route::view('/contact-us', 'pages.contact');
