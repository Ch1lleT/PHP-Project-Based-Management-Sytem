<?php

namespace App\Http\Controllers;

use App\Models\FiscalYear;
use Illuminate\Http\Request;
use PhpParser\JsonDecoder;

class Fiscal_yearsController extends Controller
{
    //

    public static function getAll() {
        $Year = FiscalYear::get();
        $jsonYear = array_reverse(json_decode($Year));
        // dd($jsonYear);
        return response()->json(['Year' => $jsonYear]);
    }

    public static function getcurrent() {
        $year = FiscalYear::where('year',date("Y"))->get(); 
        return response()->json($year);
    }
}
