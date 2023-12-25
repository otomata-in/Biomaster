<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/courses', [App\Http\Controllers\HomeController::class, 'showCourses'])->name('showcourses');
Route::get('/about', [App\Http\Controllers\HomeController::class, 'showAbout'])->name('showabout');
Route::get('/team', [App\Http\Controllers\HomeController::class, 'showTeam'])->name('showteam');
Route::get('/gallery', [App\Http\Controllers\HomeController::class, 'showGallery'])->name('showgallery');
Route::get('/enquiry', [App\Http\Controllers\HomeController::class, 'showEnquiry'])->name('showenquiry');
Route::get('/facilitiesforgrowth', [App\Http\Controllers\HomeController::class, 'facilitiesforgrowth'])->name('facilitiesforgrowth');
Route::get('/easeoflearning', [App\Http\Controllers\HomeController::class, 'easeoflearning'])->name('easeoflearning');
Route::get('/message', [App\Http\Controllers\HomeController::class, 'message'])->name('showregistration');
Route::get('/expert', [App\Http\Controllers\HomeController::class, 'expert'])->name('expert');

Route::post('/register/submit', [App\Http\Controllers\HomeController::class, 'registerData'])->name('submitregister');



Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('welcome');
Route::get('/admin/dashboard', [App\Http\Controllers\AdminController::class, 'dashboard'])->name('dashboard');
Route::get('/admin/registration/details', [App\Http\Controllers\AdminController::class, 'registerDetails'])->name('regdata');
Route::get('/admin/regsitration/{id}', [App\Http\Controllers\AdminController::class, 'viewRegData'])->name('viewregdata');
Route::get('/admin/course/add', [App\Http\Controllers\AdminController::class, 'addCourse'])->name('addcourse');
Route::get('/admin/poster/add', [App\Http\Controllers\AdminController::class, 'addPoster'])->name('addposter');
Route::get('/admin/registration/export', [App\Http\Controllers\AdminController::class, 'exportMessages'])->name('exportmessages');
Route::get('/admin/courses', [App\Http\Controllers\AdminController::class, 'viewCourse'])->name('viewCourses');
Route::get('/admin/posters', [App\Http\Controllers\AdminController::class, 'viewPoster'])->name('viewposters');
Route::get('/admin/testimonials', [App\Http\Controllers\AdminController::class, 'viewTestimonials'])->name('viewtestimonials');
Route::get('/admin/testimonials/add', [App\Http\Controllers\AdminController::class, 'addTestimonials'])->name('addtestimonials');
Route::get('/admin/delete/poster/{id}', [App\Http\Controllers\AdminController::class, 'deletePoster'])->name('deleteposter');
Route::get('/admin/delete/testimonial/{id}', [App\Http\Controllers\AdminController::class, 'deleteTestimonial'])->name('deletetestimonial');



Route::post('/admin/course/store', [App\Http\Controllers\AdminController::class, 'storeCourse'])->name('storecourse');
Route::post('/admin/poster/store', [App\Http\Controllers\AdminController::class, 'storePoster'])->name('storeposter');
Route::post('/admin/testimonial/store', [App\Http\Controllers\AdminController::class, 'storeTestimonials'])->name('storetestimonials');





// Auth::routes(['login' => false, 'register' => false]);
// Route::get('user_login')->name('login')->uses('Auth\LoginController@showLoginForm');
