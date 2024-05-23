<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Utilities\Logger;

class LogController extends Controller
{
    /**
     * @param yyyy-mm-dd
     *
     * @return json_of_LogObject[]
     */
    public function getLog(string $date) {
        return response()->json(array_reverse(Logger::ReadLog($date)));
    }

    public function getAllLog() {

        return response()->json(array_reverse(Logger::ReadLog()));
    }

    

}
