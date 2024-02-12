<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use stdClass;

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

    public static function getAll() {
        $stgAll = [
            ["id" => "1","name" => "ยุทธศาสตร์ที่ 1"],
            ["id" => "2","name" => "ยุทธศาสตร์ที่ 2"],
            ["id" => "3","name" => "ยุทธศาสตร์ที่ 3"],
            ["id" => "4","name" => "ยุทธศาสตร์ที่ 4"],
            ["id" => "5","name" => "ยุทธศาสตร์ที่ 5"],
            ["id" => "6","name" => "ยุทธศาสตร์ที่ 6"]
        ];

        return view('staff/fiscal_years', compact('stgAll'));
    }

    public static function get(Request $request) {
        $stg_id = $request->id;
        // $name = $request->input('name');
    
        // Create stdClass object
        $STG = new stdClass();
        $STG->stg_id = $stg_id;
        $STG->name = "ยุทธศาสตร์ที่ " . $stg_id;
    
        // Return JSON response
        return response()->json(['STG' => $STG]);
    }
    
    
}
