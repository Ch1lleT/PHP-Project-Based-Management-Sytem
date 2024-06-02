<?php

namespace App\Http\Controllers;

use App\Models\Have_Sub_Org;
use App\Models\Organization;
use App\Models\Project;
use App\Models\Sub_Organization;
use Database\Seeders\SubOrganizationSeeder;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isNull;

class OrgController extends Controller
{
    


    public static function getAll(){
        
        $Orgs = array();
        $Organizations = Organization::all();
        
        foreach($Organizations as $org){
            $sub_orgs = Sub_Organization::where('main_org','=',$org->org_id)->where('is_active',true)->get();            
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
                'org_name' => $org->org_name,
                'sub_org' => $sub_org_list,
            ];
            
            array_push($Orgs,$temp_org);
        } 
        
        // $Orgs = Sub_Organization::where('main_org','=','001')->get();

        return response()->json(['Orgs' => $Orgs]);
        // return view('admin.org')->with('Organizations',$Orgs);

    }

    public function save(Request $request ,string $id){
        $org = Organization::find($id);

        $req = json_decode($request->getContent(),true);
        
        if(isset($req["new_sub_org"])) {

            $this->AddSubOrg($org,$req["new_sub_org"]);
        }
        
        if(isset($req["del_sub_org"])) {
            
            $this->delSubOrg($req["del_sub_org"]);
        }
        
        if(isset($req["new_name"]))
        {
            $org->org_name = $req["new_name"];
            $org->save();
        }

        return response()->json(["message"=>"save complte"]);
    }

    public function deact(string $id){
        $org = Organization::find($id);
        if($org){
            $org->is_active = false;
            $org->save();
        }
        return response()->json(["message" => "Deactivate complete."]);
    }

    private function AddSubOrg(Organization $org , array $sub_org ){
        
        foreach($sub_org as $sub)
        {
            $New_sub_Org = new Sub_Organization();
            $New_sub_Org->main_org = $org->org_id;
            $New_sub_Org->org_name = $sub["org_name"];
            $New_sub_Org->save();
        }
    }

    private function delSubOrg(array $sub_org ){
        
        foreach($sub_org as $id){
            $subOrganize = Sub_Organization::find($id);
            if($subOrganize){
                $subOrganize->delete();
            }
        }
    }
}
