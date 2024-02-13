<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Models\Strategy;
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
            $stg_id = $request->stg_id;
            if (isset($stg_id)) {
                $PlanAtAll = Plan::where('stg_id', $stg_id)->get();
            }else {
                $STG = Strategy::first();
                $STGid = $STG->stg_id;
                $PlanAtAll = Plan::where('stg_id', $STGid)->get();                
            }
            return response()->json(['PlanAtAll' => $PlanAtAll]);
        }
           
}
