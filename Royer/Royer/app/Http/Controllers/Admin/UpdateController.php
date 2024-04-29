<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class UpdateController extends Controller
{
    public function updatePassword(){

            return view('admin.update-password-form');
        }


        public function updatePasswords(Request $request)
        {
            $request->validate([
                'current_password' => 'required',
                'password' => 'required|confirmed|min:8',
            ]);
        
            $user = auth()->user();
        
            if (!Hash::check($request->current_password, $user->password)) {
                return back()->withErrors(['current_password' => 'The provided current password does not match your actual password.']);
            }
        
            $user->update([
                'password' => Hash::make($request->password),
            ]);
        
            Alert::success("Update Password", 'Update Password was successful.')->showConfirmButton('OK');
        
            // You can redirect the user to a specific page after the password update if needed.
            return redirect()->back();
        }

        public function updateProfile(){
            $user = auth()->user();

            return view('admin.update-profile',compact('user'));
        }

        public function saveProfile(Request $request)
        {
            $user = auth()->user();
            $user->name = $request->input('name');
            $user->username = $request->input('username');
            $user->email = $request->input('email');
            $user->address = $request->input('address');
            $user->phone = $request->input('phone');

            if ($request->hasFile('img')) {
                $image = $request->file('img');
        
                if ($user->image) {
                    $oldImagePath = public_path('uploads') . '/' . $user->image;
                    if (file_exists($oldImagePath)) {
                        unlink($oldImagePath);
                    }
                }
            
                // Upload the new image
                $imageName = time().'.'.$image->getClientOriginalExtension();
                $image->move(public_path('uploads'), $imageName);
                $user->image = $imageName;
            }
            

            $user->save();

            Alert::success("success", 'Profile updated successfully.')->showConfirmButton('OK');

            return redirect()->back();
        }


        public function logout(Request $request)
        {
            Auth::logout();

            $request->session()->invalidate();

            $request->session()->regenerateToken();

            return redirect('/');
        }


}
