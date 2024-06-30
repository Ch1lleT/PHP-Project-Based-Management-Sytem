<?php

namespace App\Http\Controllers;

use App\Models\FiscalYear;
use App\Models\Plan;
use App\Models\Strategy;
use App\Models\Target;
use App\Utilities\UUID;
use Illuminate\Http\Request;

class PlanController extends Controller
{

    public static function Active(Request $request)
    {
        $plan_id = $request->id;
        $Plan = Plan::find($plan_id);

        if ($Plan) {
            $Plan->is_active = !$Plan->is_active;
            $Plan->save();
            return response()->json(['success' => 'Data updated successfully', 'is_active' => $Plan->is_active], 200);
        } else {
            return response()->json(['error' => 'Plan not found'], 404);
        }

        return response()->json(['error' => 'Plan ID is missing'], 400);
    }

    public static function Update(Request $request)
    {
        $plan_id = $request->plan_id;

        $request->validate([
            'plan_name' => 'required',
            'type' => 'required'
        ]);
        // return dd($request);
        if (isset($plan_id)) {
            $plan = Plan::find($plan_id);
            $plan->plan_name = $request->input('plan_name');
            $plan->type = $request->input('type');
            $plan->save();

            return redirect()->back()->with('success', 'Data Update successfully');
        }

        return redirect()->back()->with('error', 'plan ID is missing');
    }

    public static function get(Request $request)
    {
        $plan_id = $request->plan_id;
        if (isset($plan_id)) {
            $Plan = Plan::find($plan_id);
        } else {
            $Plan = Plan::where('is_active', true)->first();
        }
        return response()->json(['Plan' => $Plan]);
    }

    public static function Add(Request $request)
    {
        $request->validate([
            'plan_name' => 'required',
            'stg_id' => 'required',
            'target_id' => 'required',
        ]);

        if ($request) {

            $plan = new Plan();
            $plan->plan_id = UUID::uuid(Plan::class);
            $plan->plan_name = $request->input('plan_name');
            // $plan->type = $request->input('type');
            $plan->desc = "This is Balance plan for Plan";
            $plan->weight = 1;
            $plan->target_id = $request->input('target_id');
            $plan->stg_id = $request->input('stg_id');
            $plan->is_active = true;
            // $plan->is_active = true;

            $plan->save();

            return response()->json(['message' => 'Data Add successfully']);
        }
        return response()->json(['error' => null]);
    }

    public static function getAll(Request $request)
    {
        $target_id = $request->target_id;
        $stg_id = $request->stg_id;
        $year = $request->year;

        if (isset($target_id)) {
            $PlanAtAll = Plan::where('target_id', $target_id)
                ->where('is_active', true)
                ->get();
        } else if (isset($stg_id)) {
            try {
                //code...
                $TG = Target::where('stg_id', $stg_id)->where('is_active', true)->first();
                $target_id = $TG->target_id;
                $PlanAtAll = Plan::where('target_id', $target_id)->where('is_active', true)->get();
                // dd($PlanAtAll);
            } catch (\Throwable $th) {
                //throw $th;
                return response()->json(null);
            }
        } else if (isset($year)) {
            try {
                //code...
                $fiscalYear = FiscalYear::where('year', $year)->first();
                $year_code = $fiscalYear->id;
                $STG = Strategy::where('year_code', $year_code)->where('is_active', true)->first();
                // dd($STG);
                $stg_id = $STG->stg_id;
                $TG = Target::where('stg_id', $stg_id)->where('is_active', true)->first();
                $target_id = $TG->target_id;
                $PlanAtAll = Plan::where('target_id', $target_id)->where('is_active', true)->get();
            } catch (\Throwable $th) {
                //throw $th;
                return response()->json(null);
            }
        } else {
            $TG = Target::where('is_active', true)->first();
            $target_id = $TG->target_id;
            $PlanAtAll = Plan::where('target_id', $target_id)
                ->where('is_active', true)
                ->get();
        }
        return response()->json($PlanAtAll);
    }
}
