<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginRegisterController;
use App\Http\Controllers\MainController;
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

// Route::get('/', function () {
//     return view('homepage');
// });

// Route::get('/about-us', function () {
//     return view('about');
// });

// Route::get('/list-buku', function () {
//     return view('list');
// });

// Route::get('/katalog-buku', function () {
//     return view('katalog');
// });


Route::controller(MainController::class)->group(function () {
    Route::get('/', 'homepage')->name('homepage');
    Route::get('/list-buku', 'list')->name('list');
    Route::get('/katalog-buku', 'katalog')->name('katalog');
    Route::get('/about-us', 'about')->name('about');
    Route::get('/registrasi-akun', 'register')->name('register');
});



Route::controller(LoginRegisterController::class)->group(function () {
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::post('/logout', 'logout')->name('logout');
});
