<?php

namespace App\Http\Controllers;

use App\Models\Strategy;
use App\Models\Target;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TargetController extends Controller
{
    //
    public static function get(Request $request) {
        $target_id = $request->target_id;
        if(isset($target_id)) {
            $Target = Target::where('target_id', $target_id)->first();
        }else {
            $Target = Target::first();
        }
        return response()->json(['Target' => $Target]);
    }  

    public static function Add(Request $request, $stg_id){
        $request->validate([
            $request->target_name => 'request'
        ]);

        if(isset($stg_id)){
            $uuid = Str::uuid()->toString();
    
            $TG = new Target();
            $TG->target_id = $uuid;
            $TG->target_name = $request->input('target_name');
            $TG->stg_id = $stg_id;
            // $TG->is_active = true;
    
            $TG->save();
    
            return redirect()->back()->with('success', 'Data added successfully');
        }else if ($stg_id == ''){
            return response()->json(['error' => null]);
        }

    }

    public static function getAll() {
        $TGAll = Target::where('is_active',true)->get();
        return response()->json(['TGAll' => $TGAll]);
    }
    
    public static function getAtAll(Request $request){
        $stg_id = $request->stg_id;
        if(isset($stg_id)) {
            $TargetAtAll = Target::where('stg_id', $stg_id)->get();
        }else {
            $STG = Strategy::first();
            $stg_id = $STG->stg_id;
            $TargetAtAll = Target::where('stg_id', $stg_id)->get();
        }
        
        return response()->json(['TargetAtAll' => $TargetAtAll]);
    }
}
