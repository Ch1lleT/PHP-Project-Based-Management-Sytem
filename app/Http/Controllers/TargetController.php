<?php

namespace App\Http\Controllers;

use App\Models\FiscalYear;
use App\Models\Strategy;
use App\Models\Target;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Utilities\UUID;

class TargetController extends Controller
{
    //
    public static function update(Request $request)
    {
        $target_id = $request->target_id;

        if (isset($target_id)) {
            $request->validate([
                'target_name' => 'required'
            ]);
        }

        $target = Target::find($target_id);

        if ($target) {
            $target->target_name = $request->input('target_name');
            $target->save();
            return response()->json(['success' => 'Data updated successfully', 'is_active' => $target->is_active, 'status' => 'https://http.cat/200'], 200);
        } else {
            return response()->json(['error' => 'Target ID is missing']);
        }
    }

    public static function get(Request $request)
    {
        $target_id = $request->target_id;

        if (isset($target_id)) {
            $Target = Target::where('target_id', $target_id)->where('is_active', true)->first();
            if (!$Target) {
                return response()->json(['error' => 'No target found'], 404);
            }
            return response()->json(['Target' => $Target]);
        } else {
            $Target = Target::where('is_active', true)->first();
            if (!$Target) {
                return response()->json(['error' => 'No active target found'], 404);
            }
            return response()->json(['Target' => $Target]);
        }
    }


    public static function Add(Request $request)
    {
        // $stg_id = $request->stg_id;

        $request->validate([
            'target_name' => 'required',
            'stg_id' => 'required',
            // 'desc' => 'required'
        ]);
        if ($request) {
            // dd($request , $stg_id);
            // $uuid = Str::uuid()->toString();

            $TG = new Target();
            $TG->target_id = UUID::uuid(Target::class);
            $TG->target_name = $request->input('target_name');
            $TG->stg_id = $request->input('stg_id');
            // $TG->is_active = true;

            $TG->save();

            return response()->json(['message' => 'Data Add successfully']);
        }
        return response()->json(['error' => null]);
    }

    // public static function getAll() {
    //     $TGAll = Target::where('is_active',true)->get();
    //     return response()->json(['TGAll' => $TGAll]);
    // }

    public static function getAll(Request $request)
    {
        $stg_id = $request->stg_id;
        $year = $request->year;
        $fiscalYear = FiscalYear::where('year', $year)->first();

        // dd($stg_id);

        if (isset($stg_id)) {
            $TargetAtAll = Target::where('stg_id', $stg_id)->where('is_active', true)->get();
        } else if (isset($fiscalYear)) {
            $year_code = $fiscalYear->id;
            $STG = Strategy::where('year_code', $year_code)->first();
            if (isset($STG)) {
                $stg_id = $STG->stg_id;
                $TargetAtAll = Target::where('stg_id', $stg_id)->where('is_active', true)->get();
            } else {
                $TargetAtAll = [];
            }
        } else {
            $TGAll = Target::where('is_active', true)->get();
            return response()->json($TGAll);
        }

        return response()->json($TargetAtAll);
    }

    public static function Active(Request $request)
    {
        $target_id = $request->id;
        $target = Target::find($target_id);

        if ($target) {
            $target->is_active = !$target->is_active;
            $target->save();
            return response()->json(['success' => 'Data updated successfully', 'is_active' => $target->is_active], 200);
        } else {
            return response()->json(['error' => 'Target not found'], 404);
        }

        return response()->json(['error' => 'target_id ID is missing'], 400);
    }
}
