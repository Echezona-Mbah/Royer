<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class NewsController extends Controller
{
    public function new(){

        return view('admin.new');
    }

    public function store(Request $request)
    {
        $request->validate([
            // 'categories' => 'required|string|max:255',
            'title' => 'nullable|string',
            'discription' => 'nullable|string',
            'dob' => 'nullable|max:255',
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('img')) {
            $image = $request->file('img');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $imageName);
        } else {
            $imageName = null; 
        }
        // dd($request->all());die();

        $new = new News();
        // $about->categories = $request->categories;
        $new->title = $request->title;
        $new->dob = $request->dob;
        $new->discription = $request->discription;
        $new->imgs = $imageName;
        $new->user_id = auth()->user()->id;
        $new->save();

        Alert::success("success", 'News was successfully Upload.')->showConfirmButton('OK');
        return redirect()->back();
    }


    public function allnew(){
        $allnew = News::all();
        return view('admin.new-table',compact('allnew'));
    }


    public function editnew($id){
        $allnew = News::where('id',$id)->first();
        return view('admin.new-edit',compact('allnew'));
    }

    public function update(Request $request, $id)
    {
        $new = News::find($id);
        if (!$new) {
            Alert::error("error", 'New not found.')->showConfirmButton('OK');

            return redirect()->back();
        }
        $request->validate([
            'title' => 'nullable|string',
            'dob' => 'nullable|max:255',
            'discription' => 'nullable|string',
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $new->title = $request->title;
        $new->dob = $request->dob;
        $new->discription = $request->discription;

        if ($request->hasFile('img')) {
            $image = $request->file('img');
    
            if ($new->imgs) {
                $oldImagePath = public_path('uploads') . '/' . $new->imgs;
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $imageName);
            $new->imgs = $imageName;
        }

        $new->save();

        Alert::success("success", 'new updated successfully.')->showConfirmButton('OK');

        return redirect()->back();
    }

    public function newdestroy($id)
    {
        $new = News::find($id);
        if (!$new) {
            return redirect()->back()->with('error', 'new not found.');
        }
        $new->delete();
        Alert::success("success", 'new deleted successfully')->showConfirmButton('OK');

        return redirect()->back();
    }

}
