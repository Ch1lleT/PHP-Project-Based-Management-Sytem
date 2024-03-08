<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public static function get(Request $request) {
        $user_id = $request->user_id;

        if ($user_id) {
            $User = User::find($user_id);
            return response()->json(['User' => $User]);
        }
        
        return redirect()->back()->with('error', 'User ID is missing');
    }

    public static function Active(Request $request) {
        $user_id = $request->user_id;

        if ($user_id) {
            $user = User::find($user_id);
            $user->is_active = !$user->is_active;
            $user->save();
            return redirect()->back()->with('success', 'Data update successfully');
        }

        return redirect()->back()->with('error', 'user ID is missing');
    }


    public static function getAll(){

        $Users = User::all();
        return response()->json(['Users' => $Users]);
    }
}
