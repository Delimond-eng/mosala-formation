<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/more-courses', [HomeController::class, 'moreCourses'])->name('more-courses');
Route::get('/course-details', [HomeController::class, 'courseDetails'])->name('course-details');
Route::post("/souscrire", [HomeController::class, "souscrire"])->name("souscrire");

Route::view('/faqs', 'pages.faq');
Route::view('/contact-us', 'pages.contact');

Auth::routes();
Route::prefix("/adm")->middleware(["auth"])->group(function(){
    Route::get('/', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.dashboard'); 
    Route::get('/formations', [AdminController::class, "viewFormationPage"])->name('admin.formations'); 
    Route::get('/formateurs', [AdminController::class, "viewFormateurPage"])->name('admin.formateurs'); 
    Route::view('/students', "pages.auth.students")->name('admin.students'); 
    Route::view('/sliders', "pages.auth.sliders")->name('admin.sliders'); 
    Route::post('/formation.create', [App\Http\Controllers\AdminController::class, 'createFormation'])->name('admin.formation.create'); 
    Route::post('/domaine.create', [App\Http\Controllers\AdminController::class, 'createDomaine'])->name('admin.domaine.create'); 
    Route::post('/formateur.create', [App\Http\Controllers\AdminController::class, 'createFormateur'])->name('admin.formateur.create'); 
});
