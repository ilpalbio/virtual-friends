<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
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

// pagina principale
Route::view('/', 'index')->name('main');

// login
Route::view('/signin', 'signin')
  ->name('signin');

Route::post('/signin', [LoginController::class, 'getCredential']);

// registrazione
Route::view('/signup', 'signup')
  ->name('signup');
  
Route::post('/signup', [SignupController::class, 'addUser']);