<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
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
    Route::get('/students', [AdminController::class, "viewSubscribePage"])->name('admin.students'); 
    Route::get('/sliders',[AdminController::class, 'viewSliderPage'] )->name('admin.sliders'); 
    Route::post('/formateur.create', [App\Http\Controllers\AdminController::class, 'createTeacher'])->name('admin.formateur.create'); 
    Route::post('/formation.create', [App\Http\Controllers\AdminController::class, 'createFormation'])->name('admin.formation.create'); 
    Route::post('/slider.create', [App\Http\Controllers\AdminController::class, 'createSlider'])->name('admin.slider.create'); 
    Route::post('/domaine.create', [App\Http\Controllers\AdminController::class, 'createDomaine'])->name('admin.domaine.create');
    Route::get('/souscriptions-stats', [AdminController::class, 'getSouscriptionsStats'])->name('admin.souscriptions.stats'); 
    Route::get("/users", [UserController::class, "showAllUsers"])->name("admin.users");
    Route::post("/user.create", [UserController::class, "createUser"])->name("admin.user.create");
});
