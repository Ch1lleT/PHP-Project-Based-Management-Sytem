<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Models\Strategy;
use App\Models\Target;
use Illuminate\Http\Request;

class PlanController extends Controller
{
        public static function getAll() {
            $PlanAll = Plan::all();

            // $PlanAll = [
            //     [
            //         "plan_name" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum ab error cupiditate qui consequuntur natus odit, sint repudiandae quos, laboriosam dolorum ducimus? Molestiae cum odit unde nisi, hic quos cumque?"
            //     ],
            // ];

        return view('staff/fiscal_years', compact('PlanAll'));
        }

        public static function getAtAll(Request $request) {
            $target_id = $request->target_id;
            $stg_id = $request->stg_id;
            if (isset($target_id)) {
                $PlanAtAll = Plan::where('target_id', $target_id)->get();                
            }else if(isset($stg_id)){
                try {
                    //code...
                    $TG = Target::where('stg_id', $stg_id)->first();
                    $target_id = $TG->target_id;
                    $PlanAtAll = Plan::where('target_id', $target_id)->get();
                } catch (\Throwable $th) {
                    //throw $th;
                    return response()->json(['PlanAtAll' => null]);
                }
            }
            else {
                $TG = Target::first();
                $target_id = $TG->target_id;
                $PlanAtAll = Plan::where('target_id', $target_id)->get();
            }
            return response()->json(['PlanAtAll' => $PlanAtAll]);
        }
           
}
