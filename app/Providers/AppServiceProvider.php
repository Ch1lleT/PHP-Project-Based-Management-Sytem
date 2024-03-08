<?php

namespace App\Providers;

use App\Http\Controllers\Fiscal_yearsController;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\STGController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\TargetController;
use App\Http\Controllers\UserController;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // View Composer for 'fiscal_years.blade.php'
        View::composer('staff/fiscal_years', function ($view) {
            // Data to be shared
            $STG = null; 
            $Target = null;
            $Plan = null; 
            $Project = null; 
            $PlanAtAll = null;
            $ProjectAtAll = null;
            $TargetAtAll = null;
            $YearAllData = null;
            $STGAllData = null;

            $YearAllData = Fiscal_yearsController::getAll()->getData();
            $YearAll = $YearAllData->Year;

            $STGAllData = STGController::getAll(request())->getData();
            $STGAll = $STGAllData->stgAll;

            // $PlanAll = PlanController::getAll()->getData()['PlanAll'];
            // $ProjectAll = ProjectController::getAll()->getData()['ProjectAll'];
            
            // // Check if 'id' exists in the request
            // if (request()->has('stg_id')) {
                // $STG = STGController::get(request())->getData()['STG'];
            // }

            $STGData = STGController::get(request())->getData();
            $STG = $STGData->STG;

            // dd($STG);
            $TargetData = TargetController::get(request())->getData();
            $Target = $TargetData->Target;
            $PlanData = PlanController::get(request())->getData();
            $Plan = $PlanData->Plan;

            $TargetAtAllData = TargetController::getAtAll(request())->getData();
            $TargetAtAll = $TargetAtAllData->TargetAtAll;

            $PlanAtAllData = PlanController::getAtAll(request())->getData();
            $PlanAtAll = $PlanAtAllData->PlanAtAll;

            $ProjectAtAllData = ProjectController::getAtAll(request())->getData();
            $ProjectAtAll = $ProjectAtAllData->ProjectAtAll;               


            // Passing data to the view
            $view->with(compact('STGAll', 'STG','Target','Plan','TargetAtAll', 'PlanAtAll', 'ProjectAtAll', 'YearAll'));
        });

        view::composer('admin/user_list' , function ($view) {
            $UserAllData = null;

            $UserAllData = UserController::getAll()->getData();
            $UserAll = $UserAllData->Users;

            $view->with(compact('UserAll'));

        });

    }
}
