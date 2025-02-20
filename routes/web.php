<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProvinceController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\SpecialistController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
    return redirect('/admin/main');
});

// Defined For Specialist Application Form
Route::get('/province/all', [ProvinceController::class, 'all'])->name('province.all');
Route::get('/province/getStatesDependentProvince/{province}', [ProvinceController::class, 'getStates'])->name('province.state');
Route::get('/page/all', [PageController::class, 'all'])->name('pages.all');
Route::get('/page/{slug}', [PageController::class, 'detail'])->name('pages.detail');
Route::get('/check-token/{token}/{userId}', [UserController::class, 'checkToken'])->name('check-token');
Route::get('/reset-password/{token}/{userId}/{password}', [UserController::class, 'resetPassword'])->name('reset-password');
Route::get('/get-agreement/{slug}', [PageController::class, 'getAgreement'])->name('get-agreement');
Route::get('/blog/all/{filter?}', [BlogController::class, 'all'])->name('blogs.all');
Route::get('/blog/{id}', [BlogController::class, 'detail'])->name('blogs.detail');
Route::get('/slider/all', [SliderController::class, 'all'])->name('sliders.all');
Route::get('/experts', [SpecialistController::class, 'getListedSpecialists'])->name('experts.all');
Route::get('/expert/{id}', [SpecialistController::class, 'detail'])->name('experts.detail');
