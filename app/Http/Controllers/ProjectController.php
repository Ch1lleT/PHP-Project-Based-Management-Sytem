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

    public static function Active(Request $request) {
        $project_id = $request->id;
        $project = Project::find($project_id);

        if ($project) {
            $project->is_active = !$project->is_active;
            $project->save();
            return response()->json(['success' => 'Data updated successfully'], 200);
        }

        return response()->json(['error' => 'project ID is missing'], 400);
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

    public static function get(Request $request) {
        $project_id = $request->project_id;
        if(isset($project_id)) {
            $project = Project::find($project_id);
            return response()->json(['project' => $project],200);
        }
        return redirect()->back()->with('error', 'project ID is missing');
    }

    public static function getAll() {
        $ProjectAll = Project::where('is_active',true)->get();
        return response()->json(['ProjectAll' => $ProjectAll]);
    }

    public static function getAtAll(Request $request) {
        $plan_id = $request->plan_id;
        $stg_id = $request->stg_id;
        if(isset($plan_id)){
            $ProjectAtAll = Project::where('plan_id', $plan_id)->where('is_active',true)->get();
        }else if(isset($stg_id)){
            try {
                //code...
                $Plan = Plan::where('stg_id',$stg_id)->where('is_active',true)->first();
                $PlanId = $Plan->plan_id;
                $ProjectAtAll = Project::where('plan_id', $PlanId)->where('is_active',true)->get();        
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

    public static function Update(Request $request) {
        $project_id = $request->project_id;

        $request->validate([
            'project_name' => 'required',
            'balance' => 'required',
            'budget_type' => 'required',
            'budget_source' => 'required',
            'org_id' => 'required',
            'project_head' => 'required',
            'advisor' => 'required',
            'supervisor' => 'required',
            'executive' => 'required',
        ]);

        if(isset($project_id)){
            $project = Project::find($project_id);
            $project->project_name = $request->input('project_name');
            $project->balance = $request->input('balance');
            $project->budget_type = $request->input('budget_type');
            $project->budget_source = $request->input('budget_source');
            $project->org_id = $request->input('org_id');
            $project->project_head = $request->input('project_head');
            $project->advisor = $request->input('advisor');
            $project->supervisor = $request->input('supervisor');
            $project->executive = $request->input('executive');

            $project->save();
            return redirect()->back()->with('success', 'Data Update successfully');
        }
    
        return redirect()->back()->with('error', 'project ID is missing');
    }
    
}
