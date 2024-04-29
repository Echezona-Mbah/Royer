<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Team;
use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class TeamController extends Controller
{
    public function postTeam(){

        return view('admin.team');
    }

   public function store(Request $request)
    {
        $request->validate([
            'fullname' => 'required|string|max:255',
            'position' => 'nullable|string|max:255',
            'twitter' => 'nullable|string|max:255',
            'facebook' => 'nullable|string|max:255',
            'instagram' => 'nullable|string|max:255',
            'discription' => 'nullable|string|max:255',
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('img')) {
            $image = $request->file('img');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $imageName);
        } else {
            $imageName = null; 
        }

        $team = new Team();
        $team->fullname = $request->fullname;
        $team->position = $request->position;
        $team->twitter = $request->twitter;
        $team->facebook = $request->facebook;
        $team->instagram = $request->instagram;
        $team->discription = $request->discription;
        $team->imgs = $imageName;
        $team->user_id = auth()->user()->id;
        $team->save();

        Alert::success("success", 'Team was successfully Upload.')->showConfirmButton('OK');
        return redirect()->back();
    }

    public function allTeam(){
        $allteams = Team::all();
        return view('admin.team-table',compact('allteams'));
    }

    public function editTeam($id){
        $allteams = Team::where('id',$id)->first();
        return view('admin.team-edit',compact('allteams'));
    }

    public function update(Request $request, $id)
    {
        $team = Team::find($id);
        if (!$team) {
            Alert::error("error", 'Team not found.')->showConfirmButton('OK');

            return redirect()->back();
        }
        $request->validate([
            'fullname' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'twitter' => 'nullable|string|max:255',
            'facebook' => 'nullable|string|max:255',
            'instagram' => 'nullable|string|max:255',
            'discription' => 'nullable|string',
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $team->fullname = $request->fullname;
        $team->position = $request->position;
        $team->twitter = $request->twitter;
        $team->facebook = $request->facebook;
        $team->instagram = $request->instagram;
        $team->discription = $request->discription;

        if ($request->hasFile('img')) {
            $image = $request->file('img');
    
            if ($team->imgs) {
                $oldImagePath = public_path('uploads') . '/' . $team->imgs;
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $imageName);
            $team->imgs = $imageName;
        }

        $team->save();

        Alert::success("success", 'Team updated successfully.')->showConfirmButton('OK');

        return redirect()->back();
    }


    public function destroy($id)
    {
        $team = Team::find($id);
        if (!$team) {
            return redirect()->back()->with('error', 'Team not found.');
        }
        $team->delete();
        Alert::success("success", 'Team deleted successfully')->showConfirmButton('OK');

        return redirect()->back();
    }

    public function userdestroy($id)
    {
        $team = User::find($id);
        if (!$team) {
            return redirect()->back()->with('error', 'user not found.');
        }
        $team->delete();
        Alert::success("success", 'user deleted successfully')->showConfirmButton('OK');

        return redirect()->back();
    }



}
