<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public static function get() {

        // $id = auth
        $User = [
            "image" => "http://127.0.0.1:8000/image/profile.png",
            "fname" => "Siwapon",
            "lname" => "sungsang",
            "email" => "Siwapon@gmail.com",
        ];
        
        return view('profile/edit_profile', compact('User'));
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


    public function getAll(){

        $users = User::all();
        return view('admin.user_list',compact('users'));
    }
}
