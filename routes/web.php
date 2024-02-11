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
    return view('login/login');
})->name("login");

Route::post('/login', [LoginController::class,'authenticate']);

// Route::middleware('guest')->

Route::get('/layout', function () {
    return view('layout/layout');
});

Route::get('/stg_dashboard', function () {
    return view('stg/stg_dashboard');
})->name("stg_dashboard");

Route::get('/okr_kpi_manage', function () {
    return view('okr_kpi_manage/okr_kpi_manage');
})->name("okr_kpi_manage");

Route::get('/fiscal_years', function () {
    return view('fiscal_years/fiscal_years');
})->name("fiscal_years");

Route::get('/user_list', function () {
    return view('user_list/user_list');
})->name("user_list");

Route::get('/org', function () {
    return view('org/org');
})->name("org");

Route::get('/org_chart', function () {
    return view('org/org_chart');
})->name("org_chart");

Route::get('/edit_profile', function () {
    return view('edit_profile/edit_profile');
})->name("edit_profile");

//fiscal_years, org, user_list

Route::get('/stg', [STGController::class, 'index']);

//fix edit_profile, fiscal_years, org
//build org_chart, stg_dashboard