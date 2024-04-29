<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Even;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class EvenController extends Controller
{
    public function even(){

        return view('admin.even');
    }

    public function evenstore(Request $request)
    {
        $request->validate([
            // 'categories' => 'required|string|max:255',
            'title' => 'nullable|string|max:255',
            'amount' => 'nullable|max:255',
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

        $even = new Even();
        // $about->categories = $request->categories;
        $even->title = $request->title;
        $even->dob = $request->dob;
        $even->discription = $request->discription;
        $even->imgs = $imageName;
        $even->user_id = auth()->user()->id;
        $even->save();

        Alert::success("success", 'Even was successfully Upload.')->showConfirmButton('OK');
        return redirect()->back();
    }


    public function alleven(){
        $alleven = Even::all();
        return view('admin.even-table',compact('alleven'));
    }


    public function editeven($id){
        $alleven = Even::where('id',$id)->first();
        return view('admin.even-edit',compact('alleven'));
    }

    public function update(Request $request, $id)
    {
        $even = Even::find($id);
        if (!$even) {
            Alert::error("error", 'even not found.')->showConfirmButton('OK');

            return redirect()->back();
        }
        $request->validate([
            'title' => 'nullable|string',
            'dob' => 'nullable|max:255',
            'discription' => 'nullable|string',
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $even->title = $request->title;
        $even->dob = $request->dob;
        $even->discription = $request->discription;

        if ($request->hasFile('img')) {
            $image = $request->file('img');
    
            if ($even->imgs) {
                $oldImagePath = public_path('uploads') . '/' . $even->imgs;
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $imageName);
            $even->imgs = $imageName;
        }

        $even->save();

        Alert::success("success", 'even updated successfully.')->showConfirmButton('OK');

        return redirect()->back();
    }

    public function evendestroy($id)
    {
        $new = Even::find($id);
        if (!$new) {
            return redirect()->back()->with('error', 'Even not found.');
        }
        $new->delete();
        Alert::success("success", 'Even deleted successfully')->showConfirmButton('OK');

        return redirect()->back();
    }
}
