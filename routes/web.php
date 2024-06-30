<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrgController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\STGController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TargetController;
use App\Models\Organization;
use App\Utilities\UUID;
use Illuminate\Support\Facades\Route;

use App\Models\Project;
use App\Models\Sub_Organization;

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


Route::post('/login', [LoginController::class, 'authenticate'])->name('login.post');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


Route::group(['middleware' => ['web']], function () {


    Route::get('/', function () {
        return view('login/login');
    })->name("login");

    Route::get('/fiscal_years', function () {
        return view('staff/fiscal_years');
        // return view('staff/fiscal_years',['user'=>$user]);
    })->middleware('auth')->name("fiscal_years");
});

// Route::middleware('guest')->

// Route::get('/layout', function () {
//     return view('layout/layout');
// });

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

Route::get('/fiscal_years_list', function () {
    return view('staff/fiscal_years_list');
})->name("fiscal_years_list");

Route::get('/report_support', function () {
    return view('okr_kpi/report/report_support');
})->name("report_support");

Route::get('/report_technic', function () {
    return view('okr_kpi/report/report_technic');
})->name("report_technic");

Route::get('/dashboard_dept', function () {
    return view('okr_kpi/report/dashboard_dept');
})->name("dashboard_dept");

Route::get('/efficiency', function () {
    return view('executive/efficiency');
})->name("efficiency");

Route::get('/group_page', function () {
    return view('executive/group_page');
})->name("group_page");

Route::get('/activity_money_page', function () {
    return view('user/activity_money_page');
})->name("activity_money_page");

Route::get('/activity_work_page', function () {
    return view('user/activity_work_page');
})->name("activity_work_page");

Route::get('/budget', function () {
    return view('staff/budget');
})->name("budget");
Route::get('/all_project', function () {
    return view('staff/all_project');
})->name("all_project");

Route::get('/activity_page', function () {
    return view('user/activity_page');
})->name("activity_page");

Route::get('/dashboard_nimt', function () {
    return view('okr_kpi/dashboard_nimt');
})->name("dashboard_nimt");

Route::post('/STGAdd', [STGController::class, 'Add']);
Route::post('/TGAdd/{stg_id}', [TargetController::class, 'Add']);
Route::post('/PlanAdd/{stg_id}/{target_id}', [PlanController::class, 'Add']);
Route::post('/ProjectAdd/{plan_id}', [ProjectController::class, 'Add']);

Route::put('/targets/update/{target_id}', [TargetController::class, 'Update']);
Route::put('/plan/update/{plan_id}', [PlanController::class, 'Update']);
Route::put('/projects/update/{project_id}', [ProjectController::class, 'Update']);

// Route::get('/user_list',[UserController::class,'getAll']
// )->name("user_list");

Route::get('user_list', function () {
    return view('admin/user_list');
})->name('user_list');

// Route::get('/org',[OrgController::class,'getAll'])->name("org");
Route::get('/org', function () {
    return view('admin/org');
})->name('org');

// may be use in future ,So keep it na . 
// Route::get('/org/add', function () {
//     return view('admin/org_add');
// })->name('org.add');

Route::get('/org/{id}', function ($id) {
    
    $org = Organization::find($id);
    $sub_org = Sub_Organization::where('main_org',$org->org_id)->get();
    
    return view('admin/org_manange',compact('org','sub_org'));
})->name('org.manange');

Route::get('/level', function () {
    return view('admin/level');
})->name("level");

Route::get('/accept', function () {
    return view('executive/accept');
})->name("accept");

Route::get('/conclusion', function () {
    return view('profile/conclusion');
})->name("conclusion");

Route::get('/add_project', function () {
    return view('staff/addproject/add_project');
})->name("addproject");

Route::get('/edit_project', function () {
    return view('staff/editproject/edit_project');
})->name("editproject");

Route::get('/log', function () {
    return view('admin/log');
})->name("log");

Route::get('/edit_profile', function () {
    return view('profile/edit_profile');
})->name("edit_profile");

Route::get('/my_group', function () {
    return view('profile/my_group');
})->name("my_group");
// Route::get('/edit_profile', [UserController::class, 'get'])->name("edit_profile");

Route::get('/stg_overview', function () {
    return view('executive/stg_overview');
})->name("stg_overview");

//fiscal_years, org, user_list

Route::get('/stg', [STGController::class, 'get']);

// will delete  
Route::get('/test', function () {
    return UUID::uuid(Project::class);
});

//fix edit_profile, fiscal_years, org
//build org_chart, stg_dashboard