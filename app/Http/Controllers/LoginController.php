<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function authenticate(Request $request)
    {
        $credentials = $request->validate(
            [
                // "username" => ["required", "string", "min:3" ],
                // "password" => ["required", "string", "min:6"],
                "username" => ["required", "string"],
                "password" => ["required", "string"],
            ]
            // ,
            // [
            //     "username.required" => "กรุณากรอกชื่อผู้ใช้",
            //     "password.required" => "กรุณากรอกรหัสผ่าน",
            //     "username.min" => "น้อยเกิ้น",
            //     "password.min" => "มากกว่านี้หน่อย",
            // ]
        );

        // $user = User::where('username', $credentials['username'])->first();

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect('/fiscal_years');
        }

        return redirect('/')->withErrors(['error' => 'ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง']);
    }

    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();

        $request->session()->regenerate();

        return redirect('/');
    }
}
