<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class TestimonialController extends Controller
{
    public function testimonial(){

        return view('admin.testimonials');
    }

    public function store(Request $request)
    {
        $request->validate([
            // 'categories' => 'required|string|max:255',
            'title' => 'nullable|string|max:255',
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
        // dd($request->all());die();

        $testimonial = new Testimonial();
        // $about->categories = $request->categories;
        $testimonial->title = $request->title;
        $testimonial->discription = $request->discription;
        $testimonial->imgs = $imageName;
        $testimonial->user_id = auth()->user()->id;
        $testimonial->save();

        Alert::success("success", 'Testimonial was successfully Upload.')->showConfirmButton('OK');
        return redirect()->back();
    }


    public function allTestimonial(){
        $alltestimonials = Testimonial::all();
        return view('admin.testimonials-table',compact('alltestimonials'));
    }


    public function edittestimonial($id){
        $alledittestimonial = Testimonial::where('id',$id)->first();
        return view('admin.testimonials-edit',compact('alledittestimonial'));
    }

    public function update(Request $request, $id)
    {
        $testimonial = Testimonial::find($id);
        if (!$testimonial) {
            Alert::error("error", 'Testimonial not found.')->showConfirmButton('OK');

            return redirect()->back();
        }
        $request->validate([
            'title' => 'nullable|string|max:255',
            'discription' => 'nullable|string',
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $testimonial->title = $request->title;
        $testimonial->discription = $request->discription;

        if ($request->hasFile('img')) {
            $image = $request->file('img');
    
            if ($testimonial->imgs) {
                $oldImagePath = public_path('uploads') . '/' . $testimonial->imgs;
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $imageName);
            $testimonial->imgs = $imageName;
        }

        $testimonial->save();

        Alert::success("success", 'Testimonial updated successfully.')->showConfirmButton('OK');

        return redirect()->back();
    }

    public function testimonialdestroy($id)
    {
        $testimonial = Testimonial::find($id);
        if (!$testimonial) {
            return redirect()->back()->with('error', 'Testimonial not found.');
        }
        $testimonial->delete();
        Alert::success("success", 'Testimonial deleted successfully')->showConfirmButton('OK');

        return redirect()->back();
    }




}
