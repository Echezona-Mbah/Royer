<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AboutController extends Controller
{
    public function about(){


        return view('admin.about');
    }

    public function store(Request $request)
    {
        $request->validate([
            'categories' => 'required|string|max:10055',
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

        $about = new About();
        $about->categories = $request->categories;
        $about->title = $request->title;
        $about->discription = $request->discription;
        $about->imgs = $imageName;
        $about->user_id = auth()->user()->id;
        $about->save();

        Alert::success(" $request->categories", 'About was successfully Upload.')->showConfirmButton('OK');
        return redirect()->back();
    }

    public function allAbout(){
        $allabouts = About::all();
        return view('admin.about-table',compact('allabouts'));
    }


    public function editabout($id){
        $allabout = About::where('id',$id)->first();
        return view('admin.about-edit',compact('allabout'));
    }

    public function update(Request $request, $id)
    {
        $about = About::find($id);
        if (!$about) {
            Alert::error("error", 'About not found.')->showConfirmButton('OK');

            return redirect()->back();
        }
        $request->validate([
            'categories' => 'nullable|string|max:255',
            'title' => 'nullable|string',
            'discription' => 'nullable|string',
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $about->categories = $request->categories;
        $about->title = $request->title;
        $about->discription = $request->discription;

        if ($request->hasFile('img')) {
            $image = $request->file('img');
    
            if ($about->imgs) {
                $oldImagePath = public_path('uploads') . '/' . $about->imgs;
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $imageName);
            $about->imgs = $imageName;
        }

        $about->save();

        Alert::success("success", 'About updated successfully.')->showConfirmButton('OK');

        return redirect()->back();
    }

    public function aboutdestroy($id)
    {
        $team = About::find($id);
        if (!$team) {
            return redirect()->back()->with('error', 'About not found.');
        }
        $team->delete();
        Alert::success("success", 'About deleted successfully')->showConfirmButton('OK');

        return redirect()->back();
    }


}
