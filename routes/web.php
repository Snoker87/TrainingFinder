<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\home\HomeController;
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

$controller_path = 'App\Http\Controllers';

// Main Page Route
Route::get('/', [HomeController::class,'index'])->name('home');

Route::get('/student/dashboard', $controller_path . '\pages\HomePage@index')->name('pages-home');
// Route::get('/supervisor/dashboard', $controller_path . '\pages\HomePage@index')->name('pages-home');
// Route::get('/company/dashboard', $controller_path . '\pages\HomePage@index')->name('pages-home');

// authentication
Route::get('/sign-in', $controller_path . '\authentications\LoginBasic@index')->name('auth-login-basic');
Route::get('/sign-up', $controller_path . '\authentications\RegisterBasic@index')->name('auth-register-basic');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
