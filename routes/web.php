<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\SenderController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LaporanController;

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

// Auth::routes();

Route::get('/LoginBaru', [LoginController::class, 'showLoginForm'])->name('login')->middleware('guest');
Route::post('/LoginBaru', [LoginController::class, 'login'])->name('login')->middleware('guest');

Route::get('/create-account', [RegisterController::class, 'showRegistrationForm'])->name('create.account')->middleware('auth');
Route::post('/register', [RegisterController::class, 'register'])->name('register')->middleware('auth');

Route::post('/logout',[LoginController::class,'logout'])->name('logout');
Route::get('/', function () {
    return view('welcome');
});

Route::get('/email-marketing',[EmailController::class,'index'])->name('email.index');

Route::get('/email-sender',[sendercontroller::class,'index'])->name('sender.index');

Route::get('/email-sender/create',[sendercontroller::class,'create'])->name('sender.create');

Route::get('/laporan',[laporanController::class,'index'])->name('laporan');

Route::get('/contact',[ContactController::class,'index'])->name('contact.index');

Route::get('/contact/create',[ContactController::class,'create'])->name('contact.create');

Route::get('/contact/allcontact',[ContactController::class,'all'])->name('contact.all');

Route::get('/akun/create',[RegisterController::class,'create'])->name('akun.create');

