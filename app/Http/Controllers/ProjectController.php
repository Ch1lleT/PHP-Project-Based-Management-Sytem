<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Models\Project;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class ProjectController extends Controller
{

    public static function NotActive(Request $request) {
        $project_id = $request->project_id;
    
        $project = Project::find($project_id);
    
        if ($project) {
            $project->is_active = false;
            $project->save();
        }
    }    

    public static function Add(Request $request, $plan_id){
        $request->validate([
            $request->project_name => 'request',
            $request->executive => 'request',
            $request->advisor => 'request',
            $request->supervisor => 'request',
            $request->project_head => 'request',
            $request->balance => 'request',
            $request->budget_type => 'request',
            $request->budget_source => 'request',
        ]);

        if(isset($plan_id)){
            $uuid = Str::uuid()->toString();
            $firstChunk = substr($uuid, 0, 8);
            $Project = new Project();
            $Project->project_id = $firstChunk;
            $Project->project_name = $request->input('project_name');
            $Project->plan_id = $plan_id;
            // $Project->executive = $request->input('executive');
            // $Project->advisor = $request->input('advisor');
            // $Project->supervisor = $request->input('supervisor');
            // $Project->project_head = $request->input('project_head');
            $Project->executive = null;
            $Project->advisor = null;
            $Project->supervisor = null;
            $Project->project_head = 1;
            $Project->type = "";
            $Project->desc = "";
            $Project->balance =  $request->input('balance');
            $Project->budget_source = $request->input('budget_source');
            $Project->budget_type = $request->input('budget_type');
            $Project->weight = 1;
            $Project->is_active = true;
    
            $Project->save();
    
            return redirect()->back()->with('success', 'Data added successfully');
        }else if ($plan_id == ''){
            return response()->json(['error' => null]);
        }

    }

    public static function getAll() {

        $ProjectAll = Project::where('is_active',true)->get();

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
        $stg_id = $request->stg_id;
        if(isset($plan_id)){
            $ProjectAtAll = Project::where('plan_id', $plan_id)->get();
        }else if(isset($stg_id)){
            try {
                //code...
                $Plan = Plan::where('stg_id',$stg_id)->first();
                $PlanId = $Plan->plan_id;
                $ProjectAtAll = Project::where('plan_id', $PlanId)->get();        
            } catch (\Throwable $th) {
                return response()->json(['ProjectAtAll' => null]);
            }
        }else {
            $Plan = Plan::first();
            $PlanId = $Plan->plan_id;
            $ProjectAtAll = Project::where('plan_id', $PlanId)->get();   
        }
        
        return response()->json(['ProjectAtAll' => $ProjectAtAll]);
    }

    public static function UpdateProject(Request $request, $project_id) {

        // Debugbar::info(request());
        $project = new Project();
        $project::where('project_id', $project_id)
                ->update(['project_name' => $request->input('project_name'), 'balance' => $request->input('balance')]);

            
    
        return response()->json(['success'=> 'Project updated successfully', 'request' => $request->input()]);
    }    
    
}
