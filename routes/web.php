<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\SenderController;
use Illuminate\Support\Facades\Auth;
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

// Auth Routes
// Auth::routes();
Route::middleware('guest')->group(function () {
    Route::get('/', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/', [LoginController::class, 'login'])->name('login');
});

// Middleware Auth
Route::middleware(['guest'])->group(function () {
    // Create Account
    Route::get('/create-account', [RegisterController::class, 'showRegistrationForm'])->name('create.account');
    Route::post('/register', [RegisterController::class, 'register'])->name('register');

    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    // Dashboard
    Route::get('/dashboard', function () {
        $title = 'Techo | Dashboard';

        return view('dashboard.index', compact('title'));
    })->name('dashboard');

    // Email Marketing
    Route::group(['prefix' => 'email-marketing', 'controller' => EmailController::class], function () {
        Route::get('', 'index')->name('email.index');
    });
    // Laravel Manager
    Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
        \UniSharp\LaravelFilemanager\Lfm::routes();
    });
    // Email Sender
    Route::group(['prefix' => 'email-sender', 'controller' => SenderController::class], function () {
        Route::get('', 'index')->name('sender.index');
        Route::get('/create', 'create')->name('sender.create');
    });

    // Laporan
    Route::group(['prefix' => 'laporan', 'controller' => laporanController::class], function () {
        Route::get('', 'index')->name('laporan');
    });

    // Contact
    Route::group(['prefix' => 'contact', 'controller' => ContactController::class], function () {
        Route::get('', 'index')->name('contact.index');

        Route::get('/create', 'create')->name('contact.create');

        Route::get('/allcontact', 'all')->name('contact.all');
    });

    // Account
    Route::group(['prefix' => 'akun', 'controller' => RegisterController::class], function () {
        Route::get('/create', 'create')->name('akun.create');
    });
});
