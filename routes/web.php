<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\home\HomeController;
use App\Http\Controllers\authentications\RegisterBasic;
use App\Http\Controllers\company\ApiController;
use App\Http\Controllers\company\OpportunityController;
use App\Http\Controllers\company\CompanyController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\SearchController;

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

//Student 
Route::get('/student/dashboard', $controller_path . '\pages\HomePage@index')->name('pages-home');
Route::post('request/new/{opportunity:id}', [RequestController::class,'store'])->name('request.new');
Route::get('user/requests/', [RequestController::class,'userRequest'])->name('user.requests');

//Supervisor
Route::get('/supervisor/dashboard', $controller_path . '\pages\HomePage@index')->name('pages-home');
//Auth
Route::get('/sign-in', $controller_path . '\authentications\LoginBasic@index')->name('auth-login-basic');
Route::get('/sign-up', $controller_path . '\authentications\RegisterBasic@index')->name('auth-register-basic');
// Company & opportunities
Route::post('/sign-up', [RegisterBasic::class,'store'])->name('signup');
Route::get('/company/{company:slug}', [CompanyController::class,'index'])->name('company.dashboard');
Route::post('/company/update', [CompanyController::class,'update'])->name('company.update');
Route::get('/{company:slug}/opportunities', [OpportunityController::class,'index'])->name('company.opportunities');
Route::post('/opportunities/new', [OpportunityController::class,'store'])->name('company.opportunities.new');
Route::get('/{company:slug}/api', [ApiController::class,'index'])->name('company.api');
Route::post('/api/new', [ApiController::class,'store'])->name('company.api.new');
Route::post('/', [ApiController::class,'store'])->name('company.api.new');
Route::post('/search', [SearchController::class,'proccess'])->name('home.search');
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
