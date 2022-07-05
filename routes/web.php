<?php

use App\Http\Controllers\EmailController;
use App\Http\Controllers\SenderController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\ContactController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/email-marketing',[EmailController::class,'index'])->name('email.index');

Route::get('/email-sender',[sendercontroller::class,'index'])->name('sender.index');

Route::get('/email-sender/create',[sendercontroller::class,'create'])->name('sender.create');

Route::get('/laporan',[laporanController::class,'index'])->name('laporan');

Route::get('/contact',[ContactController::class,'index'])->name('contact.index');

Route::get('/contact/create',[ContactController::class,'create'])->name('contact.create');

