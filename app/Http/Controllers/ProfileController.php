<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profile;
use Hash;
use Auth;
use Illuminate\Support\Carbon;
class ProfileController extends Controller
{
    // profile register
    public function profile(Request $request){
        $validateData = $request->validate([
            'email' => 'required|unique:users|max:255',
        ]);
        $user = new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=Hash::make($request->password);
        $user->created_at=Carbon::now();
        $user->save();
        Auth::attempt([
            'email' =>$request->email,
            'password' =>$request->password,
        ]);

        $random_img = 'img/random.jpg'; 
        Profile::insert([
            'userId' => $user->id,
            'firstname' => $request->name,
            'email' => $request->email,
            'image' => $random_img,
            'created_at' => Carbon::now(),
        ]);


        return Redirect()->back()->with('success','Category Restore Successfull');
    }
}
