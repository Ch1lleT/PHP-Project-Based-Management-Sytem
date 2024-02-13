<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\STGController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\PlanController;

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
            $PlanAtAll = null;
            $ProjectAtAll = null;

            $STGAll = STGController::getAll()->getData()['stgAll'];
            // $PlanAll = PlanController::getAll()->getData()['PlanAll'];
            // $ProjectAll = ProjectController::getAll()->getData()['ProjectAll'];
            
            // // Check if 'id' exists in the request
            // if (request()->has('stg_id')) {
                // $STG = STGController::get(request())->getData()['STG'];
            // }
            $STGData = STGController::get(request())->getData();
            $STG = $STGData->STG;

            $PlanAtAllData = PlanController::getAtAll(request())->getData();
            $PlanAtAll = $PlanAtAllData->PlanAtAll;

            $ProjectAtAllData = ProjectController::getAtAll(request())->getData();
            $ProjectAtAll = $ProjectAtAllData->ProjectAtAll;               


            // Passing data to the view
            $view->with(compact('STGAll', 'STG', 'PlanAtAll', 'ProjectAtAll'));
        });
    }
}
