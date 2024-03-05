<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Models\Target;
use App\Utilities\UUID;
use Illuminate\Http\Request;

class PlanController extends Controller
{

    public static function Active(Request $request) {
        $plan_id = $request->id;
        $Plan = Plan::find($plan_id);

        if ($Plan) {
            $Plan->is_active = !$Plan->is_active;
            $Plan->save();
            return response()->json(['success' => 'Data updated successfully'], 200);
        }

        return response()->json(['error' => 'Plan ID is missing'], 400);
    }

    public static function Update(Request $request){
        $plan_id = $request->plan_id;

        $request->validate([
            'plan_name' => 'required',
            'type' => 'required'
        ]);
        // return dd($request);
        if (isset($plan_id)){
            $plan = Plan::find($plan_id);
            $plan->plan_name = $request->input('plan_name');
            $plan->type = $request->input('type');
            $plan->save();

            return redirect()->back()->with('success', 'Data Update successfully');
        }
    
        return redirect()->back()->with('error', 'plan ID is missing');
    }

    public static function get(Request $request) {
        $plan_id = $request->plan_id;
        if(isset($plan_id)) {
            $Plan = Plan::find($plan_id);
        }else {
            $Plan = Plan::where('is_active',true)->first();
        }
        return response()->json(['Plan' => $Plan]);
    } 

    public static function Add(Request $request,$stg_id, $target_id)
    {
        $request->validate([
            $request->plan_name => 'request'
        ]);

        if (isset($target_id)) {

            $plan = new Plan();
            $plan->plan_id = UUID::uuid(Plan::class);
            $plan->plan_name = $request->input('plan_name');
            $plan->type = $request->input('type');;
            $plan->desc = "This is Balance plan for Plan";
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
            $PlanAtAll = Plan::where('target_id', $target_id)
                             ->where('is_active',true)
                             ->get();
        } else if (isset($stg_id)) {
            try {
                //code...
                $TG = Target::where('stg_id', $stg_id,'is_active',true)->first();
                $target_id = $TG->target_id;
                $PlanAtAll = Plan::where('target_id', $target_id)
                                 ->where('is_active'.true)
                                 ->get();
            } catch (\Throwable $th) {
                //throw $th;
                return response()->json(['PlanAtAll' => null]);
            }
        } else {
            $TG = Target::where('is_active',true)->first();
            $target_id = $TG->target_id;
            $PlanAtAll = Plan::where('target_id', $target_id)
                             ->where('is_active' , true)
                             ->get();
        }
        return response()->json(['PlanAtAll' => $PlanAtAll]);
    }
}
