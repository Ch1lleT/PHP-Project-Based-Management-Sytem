<?php

namespace App\Http\Controllers;

use App\Models\FiscalYear;
use Illuminate\Http\Request;

class Fiscal_yearsController extends Controller
{
    //

    public static function getAll() {
        $Year = FiscalYear::get();
        return response()->json(['Year' => $Year]);
    }

    public static function getcurrent() {
        $year = FiscalYear::where('year',date("Y"))->get(); 
        return response()->json($year);
    }
}
