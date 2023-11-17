<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\DashboardController;
use App\Http\Controllers\Front\LoginController;
use App\Http\Controllers\Front\AnacadController;
use App\Http\Controllers\Front\filiereController;
use App\Http\Controllers\Front\profilController;
use App\Http\Controllers\Front\registerController;
use App\Http\Controllers\Front\semestrecontroller;
use App\Http\Controllers\Front\userController;
use App\Http\Controllers\Front\PwdController;
use App\Http\Controllers\Front\ActionController;



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
    return view('master');
});
 
Route::get('/dashboard',  [DashboardController::class, 'index']);
Route::get('/login', [LoginController::class, 'index']);
Route::get('/annee', [AnacadController::class, 'index']);
Route::get('/filiere', [filiereController::class, 'index']);
Route::get('/profil', [profilController::class, 'index']);
Route::get('/register', [registerController::class, 'index']);
Route::get('/semestre', [semestreController::class, 'index']);
Route::get('/user', [userController::class, 'index']);
Route::get('/forgotpwd',[PwdController::class,'index']) ->name('forgotpwd');
Route::get('/newpwd',[PwdController::class,'index1']) ->name('newpwd');
Route::get('/action',[ActionController::class,'index']);
