<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public static function get() {

        $User = [
            "image" => "http://127.0.0.1:8000/image/profile.png",
            "fname" => "Siwapon",
            "lname" => "sungsang",
            "email" => "Siwapon@gmail.com",
        ];
        
        return view('profile/edit_profile', compact('User'));
    }


    public function getAll(){

        $users = User::all();

        return view('addmin.user_list',compact('users'));
    }
}
