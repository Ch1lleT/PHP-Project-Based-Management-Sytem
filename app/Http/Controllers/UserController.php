<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public static function get(Request $request) {
        $user_id = $request->user_id;

        if ($user_id) {
            $User = User::find($user_id);
            return response()->json(['User' => $User]);
        }
        
        return response()->json('error', 'User ID is missing');
    }

    public static function Active(Request $request) {
        $user_id = $request->id;
        $user = User::find($user_id);
        if ($user) {
            $user->is_active = !$user->is_active;
            $user->save();
            return response()->json(['success' => 'Data updated successfully','is_active' => $user->is_active,'status'=> 'https://http.cat/200'], 200);
        } else {
            return response()->json(['error' => 'user not found','status'=> 'https://http.cat/404'], 404);
        }

        return response()->json(['error' => 'user ID is missing'], 400);
    }

    public function update(Request $request , $user_id) {
        // $request->validate([
        //     'first_name' => 'required',
        //     'last_name' => 'required',
        //     'image' => 'image|mimes:jpeg,png,jpg',
        // ]);
        
        $path = null;
        // dd($request , $user_id);
        
        if($request->image != null)
        {
            // Actual image data
            $image = $request->file('image');
            // FileExtension (jpg,png,jpeg)
            $ext = $image->getClientOriginalExtension();
            
            $imageName = $user_id.'.'.$ext;
            
        

            $path = $request->file('image')->storeAs('/ProfileImage',$imageName,'public');
            
            // dd(Storage::url($path));

            # replace "//" with "/" in $path
            $path = str_replace("//","/",$path);
        }
        $user = User::find($user_id);
        if($user != null) {
            $user->first_name = $request->input('first_name');
            $user->last_name = $request->input('last_name');
            $user->role = $request->input('role') == null ? $user->role : $request->input('role');
            if($path != null)
            {
                $user->image = $path;
            }
            $user->password = $request->input('password') == null ? $user->password : $request->input('password');
            $user->save();
            return redirect()->back()->with('success', 'Data Update successfully');
        };
        return response()->json(['error' => 'user ID is missing'], 400);
    }

    public function editUserProfile(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg',
        ]);

        $profile = $request->all();
        
        // dd($profile);
        // dd($request->all());
        $path = null;
        $user_id = $profile['id'];
        


        if($request->hasFile('image'))
        {
            // Actual image data
            $image = $request->file('image');
            // FileExtension (jpg,png,jpeg)
            $ext = $image->getClientOriginalExtension();
            
            $imageName = $user_id.'.'.$ext;
            
        

            $path = $request->file('image')->storeAs('/ProfileImage',$imageName,'public');
            
            // dd(Storage::url($path));

            # replace "//" with "/" in $path
            $path = str_replace("//","/",$path);
        }

        $user = User::find($user_id);

        if($user != null)
        {

            $user->first_name = $profile['first_name'];
            $user->last_name = $profile['last_name'];
            // $user->email = $profile['email'];

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


    public static function getAll(){

        $Users = User::all();
        return response()->json(['Users' => $Users],200);
    }
}
