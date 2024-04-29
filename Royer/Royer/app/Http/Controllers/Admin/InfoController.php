<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Info;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class InfoController extends Controller
{
    public function info(){
        return view('contact');
    }


    public function store(Request $request)
    {
        // Validate the form data
       $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'message' => 'required|string',
        ]);

        $info = new Info();
        $info->message = $request->message;
        $info->name = $request->name;
        $info->phone = $request->phone;
        $info->email =  $request->email;
        $info->save();

        Alert::success("success", 'About was successfully Upload.')->showConfirmButton('OK');
        return redirect()->back();
    }

    public function allInfo(){
        $allinfos = Info::all();
        return view('admin.info-table',compact('allinfos'));
    }

    public function infodestroy($id)
    {
        $team = Info::find($id);
        if (!$team) {
            return redirect()->back()->with('error', 'Info not found.');
        }
        $team->delete();
        Alert::success("success", 'Info deleted successfully')->showConfirmButton('OK');

        return redirect()->back();
    }


}
