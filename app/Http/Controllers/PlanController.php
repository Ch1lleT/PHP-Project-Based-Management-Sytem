<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlanController extends Controller
{
        public static function getAll() {
        $PlanAll = [
            [
                "Plan_name" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum ab error cupiditate qui consequuntur natus odit, sint repudiandae quos, laboriosam dolorum ducimus? Molestiae cum odit unde nisi, hic quos cumque?"
            ],
            [
                "Plan_name" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum ab error cupiditate qui consequuntur natus odit, sint repudiandae quos, laboriosam dolorum ducimus? Molestiae cum odit unde nisi, hic quos cumque?"
            ],
            [
                "Plan_name" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum ab error cupiditate qui consequuntur natus odit, sint repudiandae quos, laboriosam dolorum ducimus? Molestiae cum odit unde nisi, hic quos cumque?"
            ],
            [
                "Plan_name" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum ab error cupiditate qui consequuntur natus odit, sint repudiandae quos, laboriosam dolorum ducimus? Molestiae cum odit unde nisi, hic quos cumque?"
            ],
            [
                "Plan_name" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum ab error cupiditate qui consequuntur natus odit, sint repudiandae quos, laboriosam dolorum ducimus? Molestiae cum odit unde nisi, hic quos cumque?"
            ],
            [
                "Plan_name" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum ab error cupiditate qui consequuntur natus odit, sint repudiandae quos, laboriosam dolorum ducimus? Molestiae cum odit unde nisi, hic quos cumque?"
            ],
            [
                "Plan_name" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum ab error cupiditate qui consequuntur natus odit, sint repudiandae quos, laboriosam dolorum ducimus? Molestiae cum odit unde nisi, hic quos cumque?"
            ],
            [
                "Plan_name" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum ab error cupiditate qui consequuntur natus odit, sint repudiandae quos, laboriosam dolorum ducimus? Molestiae cum odit unde nisi, hic quos cumque?"
            ],
        ];

        return view('staff/fiscal_years', compact('PlanAll'));
    }
}
