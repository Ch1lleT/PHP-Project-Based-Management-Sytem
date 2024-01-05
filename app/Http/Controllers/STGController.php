<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class STGController extends Controller
{
    //
    public function index() {
        $stg = [
            ["name" => "ยุทธศาสตร์ที่ 1"],
            ["name" => "ยุทธศาสตร์ที่ 2"],
            ["name" => "ยุทธศาสตร์ที่ 3"],
            ["name" => "ยุทธศาสตร์ที่ 4"],
        ];

        return view('stg', compact('stg'));
    }
}
