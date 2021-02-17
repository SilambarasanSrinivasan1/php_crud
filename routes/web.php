<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdministrationController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;


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



Route::resource('administrations', AdministrationController::class);
Route::get('/administration/{id}', [AdministrationController::class, 'show']);
Route::view('/', 'welcome');
Auth::routes();


Route::get('/login/admin', [LoginController::class, 'showAdminLoginForm']);
Route::get('/login/user', [LoginController::class,'showUserLoginForm']);
Route::get('/register/admin', [RegisterController::class,'showAdminRegisterForm']);
Route::get('/register/user', [RegisterController::class,'showUserRegisterForm']);
    
Route::post('/login/admin', [LoginController::class,'adminLogin']);
Route::post('/login/user', [LoginController::class,'userLogin']);
Route::post('/register/admin', [RegisterController::class,'createAdmin']);
Route::post('/register/user', [RegisterController::class,'createUser']);

Route::view('/home', 'home')->middleware('auth');
Route::view('/admin', 'admin');
Route::view('/user', 'user');