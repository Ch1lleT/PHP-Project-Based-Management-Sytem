<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public static function getAll() {
        $ProjectAll = [
            [
                "Project_name" => "โปรเจค",
                "project_head" => "	นันทกร",
                "butter_sourc" => "มว.",  // users
                "balance_type" => "ลงทุน", // table balance
                "balance" => "1150" ,
                "org_name" => "กฟอ."
            ],
        ];

        return view('staff/fiscal_years', compact('ProjectAll'));
    }
}
