<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ServiceController extends Controller
{

    // public function serviceDetail($id)
    // {
    //     $service = Service::find($id);

    //     if (!$service) {
    //         abort(404);
    //     }

    //     return view('services-details', compact('service'));
    // }



    public function service(){

        return view('admin.service');
    }

    public function store(Request $request)
    {
        $request->validate([
            // 'categories' => 'required|string|max:255',
            'title' => 'nullable|string|max:255',
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
        // dd($request->all());die();

        $service = new Service();
        // $about->categories = $request->categories;
        $service->title = $request->title;
        $service->discription = $request->discription;
        $service->imgs = $imageName;
        $service->user_id = auth()->user()->id;
        $service->save();

        Alert::success("success", 'Service was successfully Upload.')->showConfirmButton('OK');
        return redirect()->back();
    }

    public function allService(){
        $allservices = Service::all();
        return view('admin.service-table',compact('allservices'));
    }

    public function editservice($id){
        $allservice = Service::where('id',$id)->first();
        return view('admin.service-edit',compact('allservice'));
    }

    public function update(Request $request, $id)
    {
        $service = Service::find($id);
        if (!$service) {
            Alert::error("error", 'Service not found.')->showConfirmButton('OK');

            return redirect()->back();
        }
        $request->validate([
            'categories' => 'nullable|string',
            'title' => 'nullable|string',
            'discription' => 'nullable|string|max:255',
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // $about->categories = $request->categories;
        $service->title = $request->title;
        $service->discription = $request->discription;

        if ($request->hasFile('img')) {
            $image = $request->file('img');
    
            if ($service->imgs) {
                $oldImagePath = public_path('uploads') . '/' . $service->imgs;
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $imageName);
            $service->imgs = $imageName;
        }

        $service->save();

        Alert::success("success", 'Service updated successfully.')->showConfirmButton('OK');

        return redirect()->back();
    }

    public function servicedestroy($id)
    {
        $Service = Service::find($id);
        if (!$Service) {
            return redirect()->back()->with('error', 'Service not found.');
        }
        $Service->delete();
        Alert::success("success", 'Service deleted successfully')->showConfirmButton('OK');

        return redirect()->back();
    }



}
