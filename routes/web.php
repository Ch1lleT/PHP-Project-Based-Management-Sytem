<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrgController;
use App\Http\Controllers\STGController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

Debugbar::disable();

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
    return view('okr_kpi/okr_kpi_manage');
})->name("okr_kpi_manage");

Route::get('/dept', function () {
    return view('okr_kpi/dept');
})->name("dept");
Route::get('/org_chart', function () {
    return view('okr_kpi/org_chart');
})->name("org_chart");

Route::get('/report', function () {
    return view('okr_kpi/report/report');
})->name("report");

Route::get('/fiscal_years', function () {
    return view('staff/fiscal_years');
})->name("fiscal_years");

Route::patch('projects/{project_id}', [ProjectController::class, 'UpdateProject'])->name('project.update');

Route::get('/user_list',[UserController::class,'getAll']
)->name("user_list");

Route::get('/org',[OrgController::class,'getAll'])->name("org");

Route::get('/level', function () {
    return view('admin/level');
})->name("level");

// Route::get('/edit_profile', function () {
//     return view('profile/edit_profile');
// })->name("edit_profile");
Route::get('/edit_profile', [UserController::class, 'get'])->name("edit_profile");;

Route::post('/login', [UserController::class,'authenticate']);

//fiscal_years, org, user_list

Route::get('/stg', [STGController::class, 'get']);

//fix edit_profile, fiscal_years, org
//build org_chart, stg_dashboard