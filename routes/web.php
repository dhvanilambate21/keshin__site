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

Route::get('/',[HomeController::class,'index']);
Route::get('/home',[HomeController::class,'index']);
Route::get('/about',[AboutController::class,'index']);
Route::get('/contact',[ContactController::class,'index']);
Route::get('/project',[ProjectController::class,'index']);
Route::get('/projectdetails',[ProjectdetailsController::class,'index']);
Route::get('/ui_ux',[UiuxController::class,'index']);
Route::post('store',[StoreController::class,'store']);