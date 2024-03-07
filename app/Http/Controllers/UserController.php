<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

    public function editUserProfile(Request $request)
    {
        $profile = $request->validate([
            'id' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg',
            'email' => 'required',
        ]);

        $path = null;
        $user_id = $profile['id'];
        
        if($request->hasFile('image'))
        {
            // Actual image data
            $image = $request->file('image');
            // FileExtension (jpg,png,jpeg)
            $ext = $image->getClientOriginalExtension();
            
            $imageName = $user_id.'.'.$ext;
            

            $path = Storage::putFileAs('profile_images/',$image,$imageName);
            
            # replace "//" with "/" in $path
            $path = str_replace("//","/",$path);
        }

        $user = User::find($user_id);

        if($user != null)
        {

            $user->first_name = $profile['first_name'];
            $user->last_name = $profile['last_name'];
            $user->email = $profile['email'];

            if($path != null)
            {
                $user->image = $path;
            }

            $user->save();
            
            return redirect()->back()->with('msg','Save complete');
        }
        
        
        return redirect()->back()->with('msg'," error can't find user with id : " . $user_id );
    }

    public function changePassword(Request $request)
    {
        dd($request);


        return view('profile.edit_profile');
    }


    public function getAll(){

        $users = User::all();
        return view('admin.user_list',compact('users'));
    }
}
