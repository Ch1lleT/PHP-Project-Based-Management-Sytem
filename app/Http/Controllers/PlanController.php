<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Models\Strategy;
use App\Models\Target;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PlanController extends Controller
{

    public static function get(Request $request) {
        $plan_id = $request->plan_id;
        if(isset($plan_id)) {
            $Plan = Plan::where('plan_id', $plan_id)->first();
        }else {
            $Plan = Plan::first();
        }
        return response()->json(['Plan' => $Plan]);
    } 

    public static function Add(Request $request,$stg_id, $target_id)
    {
        $request->validate([
            $request->plan_name => 'request'
        ]);

        if (isset($target_id)) {
            $uuid = Str::uuid()->toString();

            $plan = new Plan();
            $plan->plan_id = $uuid;
            $plan->plan_name = $request->input('plan_name');
            $plan->type = "Balance";
            $plan->desc = "This is Balance plan for Plan " . $uuid;
            $plan->weight = 1;
            $plan->target_id = $target_id;
            $plan->stg_id = $stg_id;
            $plan->is_active = true;
            // $plan->is_active = true;

            $plan->save();

            return redirect()->back()->with('success', 'Data added successfully');
        } else if ($target_id == '') {
            return redirect()->back()->with('error', 'Not Found target'); 
        }
    }
    public static function getAll()
    {
        $PlanAll = Plan::where('is_active',true)->get();

        // $PlanAll = [
        //     [
        //         "plan_name" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum ab error cupiditate qui consequuntur natus odit, sint repudiandae quos, laboriosam dolorum ducimus? Molestiae cum odit unde nisi, hic quos cumque?"
        //     ],
        // ];

        return view('staff/fiscal_years', compact('PlanAll'));
    }

    public static function getAtAll(Request $request)
    {
        $target_id = $request->target_id;
        $stg_id = $request->stg_id;
        if (isset($target_id)) {
            $PlanAtAll = Plan::where('target_id', $target_id)->get();
        } else if (isset($stg_id)) {
            try {
                //code...
                $TG = Target::where('stg_id', $stg_id)->first();
                $target_id = $TG->target_id;
                $PlanAtAll = Plan::where('target_id', $target_id)->get();
            } catch (\Throwable $th) {
                //throw $th;
                return response()->json(['PlanAtAll' => null]);
            }
        } else {
            $TG = Target::first();
            $target_id = $TG->target_id;
            $PlanAtAll = Plan::where('target_id', $target_id)->get();
        }
        return response()->json(['PlanAtAll' => $PlanAtAll]);
    }
}
