<?php

namespace App\Http\Controllers;

use App\Models\Strategy;
use App\Utilities\UUID;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class STGController extends Controller
{
    //
    public function index() {
        $stg = [
            ["name" => "ยุทธศาสตร์ที่ 1"],
            ["name" => "ยุทธศาสตร์ที่ 2"],
            ["name" => "ยุทธศาสตร์ที่ 3"],
            // ["name" => "ยุทธศาสตร์ที่ 4"],
        ];

        return view('stg', compact('stg'));
    }

    public static function Add(Request $request){

        $request->validate([
            'name' => 'required',
            // 'desc' => 'required'
        ]);

        $STG = new Strategy();
        $STG->stg_id = UUID::uuid(Strategy::class);
        $STG->name = $request->input('name');
        $STG->desc = "งานยากมากครับ";
        $STG->is_active = true;

        $STG->save();

        return redirect('/fiscal_years')->with('success', 'Data added successfully');

    }

    public static function getAll() {
        $stgAll = Strategy::where('is_active', true)->get();

        // $stgAll = [
        //     ["id" => "1","name" => "ยุทธศาสตร์ที่ 1"],
        //     ["id" => "2","name" => "ยุทธศาสตร์ที่ 2"],
        //     ["id" => "3","name" => "ยุทธศาสตร์ที่ 3"],
        //     ["id" => "4","name" => "ยุทธศาสตร์ที่ 4"],
        //     ["id" => "5","name" => "ยุทธศาสตร์ที่ 5"],
        //     ["id" => "6","name" => "ยุทธศาสตร์ที่ 6"]
        // ];

        return view('staff/fiscal_years', compact('stgAll'));
    }

    public static function get(Request $request) {
        $stg_id = $request->stg_id;
        if(isset($stg_id)) {
            $STG = Strategy::where('stg_id', $stg_id)->where('is_active',true)->get();
            if ($STG->isEmpty()){
                return response()->json(['error' => null]);
            }
        }else {
            $STG = Strategy::first();
        }
        return response()->json(['STG' => $STG]);
    }    

    public static function Active(Request $request) {
        $stg_id = $request->id;
        $STG = Strategy::find($stg_id);

        if ($STG) {
            $STG->is_active = !$STG->is_active;
            $STG->save();
            return response()->json(['success' => 'Data updated successfully'], 200);
        }

        return response()->json(['error' => 'STG ID is missing'], 400);
    }
    
}
