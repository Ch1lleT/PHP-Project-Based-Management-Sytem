<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public static function getAll() {

        $ProjectAll = Project::all();

        // $ProjectAll = [
        //     [
        //         "project_name" => "ผลผลิตการพัฒนาระบบมาตรวิทยา (การเป็นหน่วยงานหลักในการเปรียบเทียบผลการวัดภายในประเทศ/การสนับสนุนกิจกรรมของชมรมมาตรวิทยาสาขาต่างๆ)6702201",
        //         "project_head" => "	นันทกร",
        //         "budget_source" => "มว.",  // table users
        //         "budget_type" => "ลงทุน", // table balance
        //         "balance" => "1150" ,
        //         "org_name" => "กฟอ."
        //     ],
        // ];

        return view('staff/fiscal_years', compact('ProjectAll'));
    }

    public static function getAtAll(Request $request) {
        $plan_id = $request->plan_id;
        if(isset($plan_id)){
            $ProjectAtAll = Project::where('plan_id', $plan_id)->get();
        }else{
            $Project = Project::first();
            $ProjectId = $Project->project_id;
            $ProjectAtAll = Project::where('project_id', $ProjectId)->get();        
        }
        return response()->json(['ProjectAtAll' => $ProjectAtAll]);
    }
}
