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
            $STGAll = STGController::getAll()->getData()['stgAll'];
            $ProjectAll = ProjectController::getAll()->getData()['ProjectAll'];
            $PlanAll = PlanController::getAll()->getData()['PlanAll'];

            // Passing data to the view
            $view->with(compact('STGAll','ProjectAll','PlanAll'));
        });
    }
}
