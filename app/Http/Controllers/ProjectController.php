<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public static function getAll() {

        $ProjectAll = Project::all();

        // $ProjectAll = [
        //     [
        //         "Project_name" => "โปรเจค",
        //         "project_head" => "	นันทกร",
        //         "budget_source" => "มว.",  // users
        //         "balance_type" => "ลงทุน", // table balance
        //         "balance" => "1150" ,
        //         "org_name" => "กฟอ."
        //     ],
        // ];

        return view('staff/fiscal_years', compact('ProjectAll'));
    }
}
