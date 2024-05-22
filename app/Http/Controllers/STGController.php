<?php

namespace App\Http\Controllers;

use App\Models\FiscalYear;
use App\Models\Strategy;
use App\Utilities\UUID;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class STGController extends Controller
{
    //

    public static function Add(Request $request )
    {

        // dd($request);
        $request->validate([
            'nameSTG' => 'required',
            'year' => 'required',
            // 'desc' => 'required'
        ]);
        // dd($request);
        $fiscalYear = FiscalYear::where('year' , $request->input('year'))->first();
        $year_code = $fiscalYear->id;

        if ($request) {
            $STG = new Strategy();
            $STG->stg_id = UUID::uuid(Strategy::class);
            $STG->name = $request->input('nameSTG');
            $STG->desc = "งานยากมากครับ";
            $STG->year_code = $year_code;
            $STG->is_active = true;
            $STG->save();
            return response()->json(['message' => 'Data Add successfully']);
        }

        // return response()->json(['error' => 'Data Add failed']);

        return response()->json(['error' => 'ข้อมูลไม่ถูกต้อง'], 400);
    }

    public static function getAll(Request $request)
    {

        $fiscalYear = FiscalYear::where('year' , $request->year)->first();
        
        if (isset($fiscalYear)) {
            $year_code = $fiscalYear->id;
            $stgAll = Strategy::where('is_active', true)->where('year_code', $year_code)->get();
            return response()->json(['stgAll' => $stgAll]);
        } else {
            $stgAll = Strategy::where('is_active', true)->orderBy('year_code', 'desc')->get();
            return response()->json(['stgAll' => $stgAll]);
        }
        return response()->json(['stgAll' => null]);

        // return view('staff/fiscal_years', compact('stgAll'));
    }

    // public static function get(Request $request) {
    //     $stg_id = $request->stg_id;

    //     if(isset($stg_id)) {
    //         $STG = Strategy::where('stg_id', $stg_id)->where('is_active',true)->first();
    //         return response()->json(['STG' => $STG ],200);
    //     } else {
    //         return response()->json(['error' => 'Not found STG' ],404);
    //     }
    // }

    public static function get(Request $request)
    {
        $stg_id = $request->stg_id;

        if (isset($stg_id)) {
            $STG = Strategy::where('stg_id', $stg_id)->where('is_active', true)->first();
            if (!$STG) {
                return response()->json(['error' => 'No Strategy found'], 404);
            }
            return response()->json(['STG' => $STG]);
        } else {
            $STG = Strategy::where('is_active', true)->first();
            if (!$STG) {
                return response()->json(['error' => 'No active Strategy found'], 404);
            }
            return response()->json(['STG' => $STG]);
        }
    }


    public static function Active(Request $request)
    {
        $stg_id = $request->id;
        $STG = Strategy::find($stg_id);

        if ($STG) {
            $STG->is_active = !$STG->is_active;
            $STG->save();
            return response()->json(['success' => 'Data updated successfully', 'is_active' => $STG->is_active, 'status' => 'https://http.cat/200'], 200);
        } else {
            return response()->json(['error' => 'STG not found', 'status' => 'https://http.cat/404'], 404);
        }

        return response()->json(['error' => 'STG ID is missing'], 400);
    }
}
