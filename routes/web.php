<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\STGController;
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

Route::get('/', function () {
    return view('login');
})->name("login");

Route::post('/login', [LoginController::class,'authenticate']);

// Route::middleware('guest')->

Route::get('/layout', function () {
    return view('layout/layout');
});

Route::get('/stg_dashboard', function () {
    return view('stg_dashboard');
})->middleware('auth');

Route::get('/okr_kpi_manage', function () {
    return view('okr_kpi_manage');
});
Route::get('/fiscal_years', function () {
    return view('fiscal_years');
});



Route::get('/stg', [STGController::class, 'index']);
