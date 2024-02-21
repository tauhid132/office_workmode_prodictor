<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Rules\Password;
use App\Http\Requests\ProfileUpdateRequest;

class ProfileController extends Controller
{
    public function viewMyProfile(){
        return view('admin.my-profile');
    }
    
    public function changeProfileInfo(Request $request){
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
        ]);
        User::find(Auth::user()->id)->update([
            'name' => $request->name,
        ]);
        return back()->with('success', 'Updated Info Successfully!');
    }

    public function viewChangePassword(){
        return view('admin.change-password');
    }

    public function changePassword(Request $request){
        $request->validate([
            'password' => ['required', 'confirmed', Password::defaults()],
        ]);
        
        $user = User::where('id', Auth::user()->id)->first();
        
        if(Hash::check($request->old_password, $user->password)){
            User::where('id' , Auth::user()->id)
                ->update(['password' => Hash::make($request->password)]);
            return back()->with('success', 'Password Changed Successfully!');
        }else{
            return back()->with('error', 'Old Password is not Correct!');
        }

    }
    public function changeProfileImage(Request $request){
        if($request->hasFile('profile_image')){
            $new_profile_image_name = Auth::user()->id.'.'.$request->profile_image->extension();
            $request->profile_image->move(public_path('images/profile_images'), $new_profile_image_name);
            //delete old
            $old_image = Auth::user()->profile_image;
            File::delete(public_path("images/profile_images/".$old_image));
            User::find(Auth::user()->id)->update([
                'profile_image' => $new_profile_image_name 
            ]);
            return back()->with('success', 'Image Updated!');
        }
    }
}
