<?php

namespace App\Http\Controllers;

use App\Models\FiscalYear;
use App\Models\Plan;
use App\Models\Strategy;
use App\Models\Target;
use Illuminate\Http\Request;


class AllController extends Controller
{
    //

    public static function LevelYear(Request $request)
    {
        $year_code = $request->year_code;
        $response = [];

        try {
            //code...
            if ($year_code) {
                $fiscalYear = FiscalYear::find($year_code);

                if ($fiscalYear) {
                    $strategies = $fiscalYear->Strategy;

                    if ($strategies->isNotEmpty()) {
                        $response["STG"] = $strategies;

                        $firstStrategy = $strategies->first();
                        $targets = Strategy::find($firstStrategy->stg_id)->Target;

                        if ($targets->isNotEmpty()) {
                            $response["targets"] = $targets;

                            $firstTarget = $targets->first();
                            $plans = Target::find($firstTarget->target_id)->Plan;

                            if ($plans->isNotEmpty()) {
                                $response["Plans"] = $plans;

                                $firstPlan = $plans->first();
                                $Projects = Plan::find($firstPlan->plan_id)->Project;

                                if ($Projects->isNotEmpty()) {
                                    $response["Projects"] = $Projects;
                                }
                            }
                        }
                    }
                }
            }
        } catch (\Throwable $th) {
            // throw $th;
            return response()->json($response, 400);
        }


        return response()->json($response, 200);
    }

    public static function LevelSTG(Request $request)
    {
        $stg_id = $request->stg_id;
        $response = [];


        try {
            //code...
            if ($stg_id) {
                $targets = Strategy::find($stg_id)->Target;
                if ($targets->isNotEmpty()) {
                    $response["targets"] = $targets;

                    $firstTarget = $targets->first();
                    $plans = Target::find($firstTarget->target_id)->Plan;

                    if ($plans->isNotEmpty()) {
                        $response["Plans"] = $plans;

                        $firstPlan = $plans->first();
                        $Projects = Plan::find($firstPlan->plan_id)->Project;

                        if ($Projects->isNotEmpty()) {
                            $response["Projects"] = $Projects;
                        }
                    }
                }
            }
        } catch (\Throwable $th) {
            // throw $th;
            return response()->json($response, 400);
        }

        return response()->json($response, 200);
    }

    public static function LevelTarget(Request $request)
    {
        $target_id = $request->target_id;
        $response = [];


        try {
            //code...
            if ($target_id) {
                $plans = Target::find($target_id)->Plan;

                if ($plans->isNotEmpty()) {
                    $response["Plans"] = $plans;

                    $firstPlan = $plans->first();
                    $Projects = Plan::find($firstPlan->plan_id)->Project;

                    if ($Projects->isNotEmpty()) {
                        $response["Projects"] = $Projects;
                    }
                }
            }
        } catch (\Throwable $th) {
            // throw $th;
            return response()->json($response, 400);
        }

        return response()->json($response, 200);
    }

    public static function LevelPlan(Request $request)
    {
        $plan_id = $request->plan_id;
        $response = [];


        try {
            //code...
            if ($plan_id) {
                $Projects = Plan::find($plan_id)->Project;

                if ($Projects->isNotEmpty()) {
                    $response["Projects"] = $Projects;
                }
            }
        } catch (\Throwable $th) {
            // throw $th;
            return response()->json($response, 400);
        }

        return response()->json($response, 200);
    }
}
