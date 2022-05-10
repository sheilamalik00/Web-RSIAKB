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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::view('/', 'frontend.home.index');


Route::resource('/admin/category', App\Http\Controllers\Backend\Blog\CategoryBlogControllers::class);
Route::resource('/admin/blog', App\Http\Controllers\Backend\Blog\BlogControllers::class);

//spesialist
Route::resource('/admin/spesialist', App\Http\Controllers\Backend\Doctor\SpecialistDoctorControllers::class);
Route::resource('/admin/doctor', App\Http\Controllers\Backend\Doctor\DoctorControllers::class);
