<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Family;
use App\Models\Service;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class FamilyController extends Controller
{
    public function family(){
        $services = Service::all();
        $contact = Contact::first();


        return view('family',compact('services','contact'));
    }

    public function submitForm(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required|string',
            'middle_name' => 'required|string',
            'surname' => 'required|string',
            'kindred' => 'required|string',
            'village' => 'required|string',
            'town' => 'required|string',
            'Area' => 'required|string',
            'origin' => 'required|string',
            'address' => 'required|string',
            'country' => 'required|string',
            // 'pass_morocco' => 'required|string',
            // 'year_morocco' => 'required|string',
            'city_morocco' => 'required|string',
            'telephone' => 'required|string',
            'whatsapp' => 'required|string',
            'email' => 'required|string',
            'marital_status' => 'required|string',
            'mother_alive' => 'required|string',
            'name_kins' => 'required|string',
            'village_kins' => 'required|string',
            'redidence_kins' => 'required|string',
            'relationship_kins' => 'required|string',
            'telephone_kins' => 'required|string',
            'whatsapp_kins' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $imageName);
        } else {
            $imageName = null; 
        }

        $family = new Family();
        $family->name = $request->name;
        $family->middle_name = $request->middle_name;
        $family->surname = $request->surname;
        $family->kindred =$request->kindred;
        $family->village = $request->village;
        $family->town = $request->town;
        $family->Area = $request->Area;
        $family->origin = $request->origin;
        $family->address = $request->address;
        $family->country = $request->country;
        // $family->pass_morocco = $request->pass_morocco;
        // $family->year_morocco = $request->year_morocco;
        // $family->city_morocco =$request->city_morocco;
        $family->telephone = $request->telephone;
        $family->whatsapp = $request->whatsapp;
        $family->email = $request->email;
        $family->marital_status = $request->marital_status;
        $family->mother_alive = $request->mother_alive;
        $family->name_kins = $request->name_kins;
        $family->village_kins = $request->village_kins;
        $family->redidence_kins = $request->redidence_kins;
        $family->relationship_kins = $request->relationship_kins;
        $family->telephone_kins = $request->telephone_kins;
        $family->whatsapp_kins = $request->whatsapp_kins;
        $family->image = $imageName;


        $family->save();
        Alert::success(" success", 'Membership form submitted successfully!')->showConfirmButton('OK');
        return redirect()->back();
    }

    public function allfamily(){
        $allfamily = Family::all();
        return view('admin.Family-table',compact('allfamily'));
    }

    public function editFamily($id){
        $allfamily = Family::where('id',$id)->first();
        return view('admin.family-edit',compact('allfamily'));
    }

    public function update(Request $request, $id)
    {
        $family = Family::find($id);
        if (!$family) {
            Alert::error("error", 'Register not found.')->showConfirmButton('OK');

            return redirect()->back();
        }
        $request->validate([
            'name' => 'required|string',
            'middle_name' => 'required|string',
            'surname' => 'required|string',
            'kindred' => 'required|string',
            'village' => 'required|string',
            'town' => 'required|string',
            'Area' => 'required|string',
            'origin' => 'required|string',
            'address' => 'required|string',
            'country' => 'required|string',
            // 'pass_morocco' => 'required|string',
            // 'year_morocco' => 'required|string',
            // 'city_morocco' => 'required|string',
            'telephone' => 'required|string',
            'whatsapp' => 'required|string',
            'email' => 'required|string',
            'marital_status' => 'required|string',
            'mother_alive' => 'required|string',
            'name_kins' => 'required|string',
            'village_kins' => 'required|string',
            'redidence_kins' => 'required|string',
            'relationship_kins' => 'required|string',
            'telephone_kins' => 'required|string',
            'whatsapp_kins' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $family->name = $request->name;
        $family->middle_name = $request->middle_name;
        $family->surname = $request->surname;
        $family->kindred =$request->kindred;
        $family->village = $request->village;
        $family->town = $request->town;
        $family->Area = $request->Area;
        $family->origin = $request->origin;
        $family->address = $request->address;
        $family->country = $request->country;
        // $family->pass_morocco = $request->pass_morocco;
        // $family->year_morocco = $request->year_morocco;
        // $family->city_morocco =$request->city_morocco;
        $family->telephone = $request->telephone;
        $family->whatsapp = $request->whatsapp;
        $family->email = $request->email;
        $family->marital_status = $request->marital_status;
        $family->mother_alive = $request->mother_alive;
        $family->name_kins = $request->name_kins;
        $family->village_kins = $request->village_kins;
        $family->redidence_kins = $request->redidence_kins;
        $family->relationship_kins = $request->relationship_kins;
        $family->telephone_kins = $request->telephone_kins;
        $family->whatsapp_kins = $request->whatsapp_kins;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
    
            if ($family->image) {
                $oldImagePath = public_path('uploads') . '/' . $family->image;
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $imageName);
            $family->image = $imageName;
        }

        $family->save();

        Alert::success("success", 'Register updated successfully.')->showConfirmButton('OK');

        return redirect()->route('family-table');
    }

    public function familtdestroy($id)
    {
        $team = Family::find($id);
        if (!$team) {
            return redirect()->back()->with('error', 'family not found.');
        }
        $team->delete();
        Alert::success("success", 'Register deleted successfully')->showConfirmButton('OK');

        return redirect()->back();
    }
}
