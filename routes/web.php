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

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::view('/', 'frontend.home.index');


Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [App\Http\Controllers\Backend\Dashboard\DashboardController::class, 'index'])->name('dashboard');
    Route::resource('category', App\Http\Controllers\Backend\Blog\CategoryBlogControllers::class);
    Route::resource('blog', App\Http\Controllers\Backend\Blog\BlogControllers::class);

    //spesialist
    Route::resource('spesialist', App\Http\Controllers\Backend\Doctor\SpecialistDoctorControllers::class);
    Route::resource('doctor', App\Http\Controllers\Backend\Doctor\DoctorControllers::class);
    Route::resource('schedule', App\Http\Controllers\Backend\Doctor\ScheduleDoctorControllers::class);

    Route::resource('gallery', App\Http\Controllers\Backend\Gallery\GalleryControllers::class);
});
//frontend
Route::get('/blog', [App\Http\Controllers\Frontend\Blog\IndexControllers::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}', [App\Http\Controllers\Frontend\Blog\IndexControllers::class, 'show'])->name('blog.show');
Route::get('/doctor', [App\Http\Controllers\Frontend\Doctor\IndexControllers::class, 'index'])->name('doctor.index');
Route::get('/', [App\Http\Controllers\Frontend\Home\IndexControllers::class, 'index'])->name('home.index');
// about
Route::get('/about', [App\Http\Controllers\Frontend\About\IndexControllers::class, 'index'])->name('about.index');
// contact
Route::get('/contact', [App\Http\Controllers\Frontend\Contact\IndexControllers::class, 'index'])->name('contact.index');
// gallery
Route::get('/gallery', [App\Http\Controllers\Frontend\Gallery\IndexControllers::class, 'index'])->name('gallery.index');

Route::get('/appointment', [App\Http\Controllers\Frontend\Schedule\ScheduleController::class, 'index'])->name('appointment.index');

Route::get('/service', [App\Http\Controllers\Frontend\Service\IndexControllers::class, 'index'])->name('service.index');

Route::post('/appointment', [App\Http\Controllers\Frontend\Schedule\ScheduleController::class, 'registerShecdule'])->name('appointment.store');

//kirim Jadwal
Route::get('/kirim-jadwal',[App\Http\Controllers\Frontend\Doctor\IndexControllers::class, 'kirimJadwal'])->name('kirim-jadwal');
