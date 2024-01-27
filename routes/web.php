<?php

use App\Http\Controllers\BloodGroupController;
use App\Http\Controllers\DistrictController;
use App\Http\Controllers\DivisonController;
use App\Http\Controllers\DonorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostOfficeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UpazillaController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\VerifyCsrfToken;
use Illuminate\Support\Facades\Route;
use Laravel\Sanctum\Http\Controllers\CsrfCookieController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/user',[UserController::class, 'index'])->name('user.index'); //all donor for admin

Route::get('/donor',[DonorController::class, 'donor'])->name('donor.index'); //all donor for admin
Route::get('confirm-donation/{id}',[DonorController::class, 'mail'])->name('donor.mail'); //all donor for admin
// Route::get('/profile/{id}',[DonorController::class, 'profile'])->name('profile.index'); //individual profile for user

Route::get('/blood',[BloodGroupController::class, 'index'])->name('blood.index'); //all donor for admin
Route::get('/create-blood',[BloodGroupController::class, 'create'])->name('blood.create'); //create division for admin
Route::post('/blood', [BloodGroupController::class, 'store'])->name('blood.store');
Route::delete('/blood/{id}', [BloodGroupController::class, 'destroy'])->name('blood.delete');

Route::get('/division', [DivisonController::class, 'divison'])->name('divison.index');
Route::get('/create-divison',[DivisonController::class, 'create'])->name('divison.create'); //create division for admin
Route::post('/divison', [DivisonController::class, 'store'])->name('divison.store');
Route::delete('/divison/{id}', [DivisonController::class, 'destroy'])->name('divison.delete');

Route::get('/district',[DistrictController::class, 'district'])->name('district.index'); //all district for admin 
Route::get('/create-district',[DistrictController::class, 'create'])->name('district.create'); //create district for admin
Route::post('/district', [DistrictController::class, 'store'])->name('district.store');
Route::delete('/district/{id}', [DistrictController::class, 'destroy'])->name('district.delete');

Route::get('/upazilla',[UpazillaController::class, 'upazilla'])->name('upazilla.index'); //all district for admin 
Route::get('/create-upazilla',[UpazillaController::class, 'create'])->name('upazilla.create'); //create district for admin
Route::post('/upazilla', [UpazillaController::class, 'store'])->name('upazilla.store');
Route::delete('/upazilla/{id}', [UpazillaController::class, 'destroy'])->name('upazilla.delete');

Route::get('/post_office',[PostOfficeController::class, 'post_office'])->name('post_office.index'); //all district for admin 
Route::get('/create-post_office',[PostOfficeController::class, 'create'])->name('post_office.create'); //create district for admin
Route::post('/post_office', [PostOfficeController::class, 'store'])->name('post_office.store');
Route::delete('/post_office/{id}', [PostOfficeController::class, 'destroy'])->name('post_office.delete');

Route::get('/profile',[ProfileController::class, 'create'])->name('profile.create'); //all district for admin 
// Route::get('/create-profile',[ProfileController::class, 'create'])->name('profile.create');
Route::post('/profile', [ProfileController::class, 'store'])->name('profile.store');
Route::delete('/profile/{id}', [ProfileController::class, 'destroy'])->name('profile.delete');




