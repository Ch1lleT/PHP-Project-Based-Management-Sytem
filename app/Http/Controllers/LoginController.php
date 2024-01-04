<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function authenticate(Request $request) {
        $User = $request->validate([
            "username" => ["required", "string", "unique:users,username", "min:3"],
            "password" => ["required", "string", "min:6"],
        ]);
        
        $users = User::where('username', $request->input('username'))->first();

        if (Auth::attempt(['username' => $request->input('username'), 'password' => $request->input('password')])) {
            return redirect()->intended('dashboard');
        } else {
            return redirect()->route('login')->withErrors(['error' => 'ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง']);
        }

    }
}
