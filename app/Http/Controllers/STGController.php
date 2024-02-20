<?php

namespace App\Http\Controllers;

use App\Models\Strategy;
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

        $uuid = Str::uuid()->toString();

        $STG = new Strategy();
        $STG->stg_id = $uuid;
        $STG->name = $request->input('name');
        $STG->desc = "งานยากมากครับ";
        $STG->is_active = true;

        $STG->save();

        return redirect('/fiscal_years')->with('success', 'Data added successfully');

    }

    public static function getAll() {
        $stgAll = Strategy::all();

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
            $STG = Strategy::where('stg_id', $stg_id)->first();
        }else {
            $STG = Strategy::first();
        }
        return response()->json(['STG' => $STG]);
    }    
    
}
