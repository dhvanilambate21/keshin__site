<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\AboutController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\ProjectController;
use App\Http\Controllers\frontend\ProjectdetailsController;
use App\Http\Controllers\frontend\UiuxController;
use App\Http\Controllers\StoreController;





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

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/home',[HomeController::class,'index'])->name('home');
Route::get('/about',[AboutController::class,'index'])->name('about');
Route::get('/contact',[ContactController::class,'index'])->name('contact');
Route::get('/projects',[ProjectController::class,'index'])->name('projects');
Route::get('/projectdetails',[ProjectdetailsController::class,'index'])->name('projectdetails');
Route::get('/services',[servicesController::class,'index'])->name('services');
Route::post('store',[StoreController::class,'store']);
