<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ProjectController extends Controller
{
    public function project(){


        return view('admin.project');
    }

    public function projectstore(Request $request)
    {
        $request->validate([
            'title' => 'nullable|string|max:10055',
            'discription' => 'nullable|string',
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('img')) {
            $image = $request->file('img');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $imageName);
        } else {
            $imageName = null; 
        }

        $project = new Project();
        $project->title = $request->title;
        $project->discription = $request->discription;
        $project->imgs = $imageName;
        $project->user_id = auth()->user()->id;
        $project->save();

        Alert::success("success", 'project was successfully Upload.')->showConfirmButton('OK');
        return redirect()->back();
    }

    public function allproject(){
        $allprojects = Project::all();
        return view('admin.project-table',compact('allprojects'));
    }


    public function editproject($id){
        $allproject = Project::where('id',$id)->first();
        return view('admin.project-edit',compact('allproject'));
    }

    public function update(Request $request, $id)
    {
        $project = Project::find($id);
        if (!$project) {
            Alert::error("error", 'project not found.')->showConfirmButton('OK');

            return redirect()->back();
        }
        $request->validate([
            'title' => 'nullable|string',
            'discription' => 'nullable|string',
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $project->title = $request->title;
        $project->discription = $request->discription;


        if ($request->hasFile('img')) {
            $image = $request->file('img');
    
            if ($project->imgs) {
                $oldImagePath = public_path('uploads') . '/' . $project->imgs;
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $imageName);
            $project->imgs = $imageName;
        }

        $project->save();

        Alert::success("success", 'project updated successfully.')->showConfirmButton('OK');

        return redirect()->back();
    }

    public function projectdestroy($id)
    {
        $team = Project::find($id);
        if (!$team) {
            return redirect()->back()->with('error', 'project not found.');
        }
        $team->delete();
        Alert::success("success", 'project deleted successfully')->showConfirmButton('OK');

        return redirect()->back();
    }

}
