<?php

namespace App\Http\Controllers;

use App\Models\Have_Sub_Org;
use App\Models\Organization;
use App\Models\Project;
use App\Models\Sub_Organization;
use Illuminate\Http\Request;

class OrgController extends Controller
{
    


    public static function getAll(){
        
        $Orgs = array();
        $Organizations = Organization::all();
        
        foreach($Organizations as $org){
            $sub_orgs = Sub_Organization::where('main_org','=',$org->org_id)->get();            
            $sub_org_list = array();
            
            foreach($sub_orgs as $so)
            {
                $temp_sub = [
                    'sub_org_id' => $so->sub_org_id,
                    'main_org' => $so->main_org,
                    'org_name' => $so->org_name,
                ];

                array_push($sub_org_list,$temp_sub);
            }

            
            $temp_org = [
                'org_id' => $org->org_id,
                'org_name' => $org->org_id,
                'sub_org' => $sub_org_list,
            ];
            
            array_push($Orgs,$temp_org);
        } 
        
        // $Orgs = Sub_Organization::where('main_org','=','001')->get();

        return response()->json(['Orgs' => $Orgs]);
        // return view('admin.org')->with('Organizations',$Orgs);

    }
}
