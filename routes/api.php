<?php

use App\Http\Controllers\PlanController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\STGController;
use App\Http\Controllers\TargetController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('users', [UserController::class, 'getAll']);
Route::get('user/{user_id}', [UserController::class, 'get']);
Route::put('user/active', [UserController::class, 'Active']);

Route::put('Strategy/active', [STGController::class, 'Active']);
Route::put('target/active', [TargetController::class, 'Active']);
Route::put('plan/active', [PlanController::class, 'Active']);
Route::put('project/active', [ProjectController::class, 'Active']);

Route::get('strategy', [STGController::class, 'getAll']);
Route::get('target', [TargetController::class, 'getAll']);
Route::get('plan', [PlanController::class, 'getAll']);
Route::get('project', [ProjectController::class, 'getAll']);

Route::get('strategy/{stg_id}', [STGController::class, 'get']);
Route::get('target/{target_id}', [TargetController::class, 'get']);
Route::get('plan/{plan_id}', [PlanController::class, 'get']);
Route::get('project/{project_id}', [ProjectController::class, 'get']);