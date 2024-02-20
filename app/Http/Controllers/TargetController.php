<?php

namespace App\Http\Controllers;

use App\Models\Strategy;
use App\Models\Target;
use Illuminate\Http\Request;

class TargetController extends Controller
{
    //
    public static function getAll() {
        $TGAll = Target::all();
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
