<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Galery;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class GalleryController extends Controller
{
   
    public function gallery(){


        return view('admin.gallery');
    }

    public function gallerystore(Request $request)
    {
        $request->validate([
            'title' => 'nullable|string|max:10055',
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('img')) {
            $image = $request->file('img');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $imageName);
        } else {
            $imageName = null; 
        }

        $gallery = new Galery();
        $gallery->title = $request->title;
        $gallery->imgs = $imageName;
        $gallery->user_id = auth()->user()->id;
        $gallery->save();

        Alert::success("success", 'Gallery was successfully Upload.')->showConfirmButton('OK');
        return redirect()->back();
    }

    public function allgallery(){
        $allgallerys = Galery::all();
        return view('admin.gallery-table',compact('allgallerys'));
    }


    public function editgallery($id){
        $allgallery = Galery::where('id',$id)->first();
        return view('admin.gallery-edit',compact('allgallery'));
    }

    public function update(Request $request, $id)
    {
        $gallery = Galery::find($id);
        if (!$gallery) {
            Alert::error("error", 'gallery not found.')->showConfirmButton('OK');

            return redirect()->back();
        }
        $request->validate([
            'title' => 'nullable|string|max:255',
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $gallery->title = $request->title;

        if ($request->hasFile('img')) {
            $image = $request->file('img');
    
            if ($gallery->imgs) {
                $oldImagePath = public_path('uploads') . '/' . $gallery->imgs;
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $imageName);
            $gallery->imgs = $imageName;
        }

        $gallery->save();

        Alert::success("success", 'gallery updated successfully.')->showConfirmButton('OK');

        return redirect()->back();
    }

    public function gallerydestroy($id)
    {
        $team = Galery::find($id);
        if (!$team) {
            return redirect()->back()->with('error', 'Galery not found.');
        }
        $team->delete();
        Alert::success("success", 'gallery deleted successfully')->showConfirmButton('OK');

        return redirect()->back();
    }

}
