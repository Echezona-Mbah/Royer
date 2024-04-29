<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ContactController extends Controller
{
    public function contact(){


        return view('admin.contact');
    }

    public function contactstore(Request $request)
    {
        $request->validate([
            'title' => 'nullable|string|max:10055',
            'discription' => 'nullable|string',
            'address' => 'nullable|string',
            'phone' => 'nullable|string',
            'email' => 'nullable|string',
       
        ]);


        $contact = new Contact();
        $contact->title = $request->title;
        $contact->discription = $request->discription;
        $contact->address = $request->address;
        $contact->phone = $request->phone;
        $contact->email = $request->email;
        $contact->user_id = auth()->user()->id;
        $contact->save();

        Alert::success("success", 'contact was successfully Upload.')->showConfirmButton('OK');
        return redirect()->back();
    }

    public function allContact(){
        $allcontacts = Contact::all();
        return view('admin.contact-table',compact('allcontacts'));
    }


    public function editcontact($id){
        $allcontact = Contact::where('id',$id)->first();
        return view('admin.contact-edit',compact('allcontact'));
    }

    public function update(Request $request, $id)
    {
        $contact = Contact::find($id);
        if (!$contact) {
            Alert::error("error", 'contact not found.')->showConfirmButton('OK');

            return redirect()->back();
        }
        $request->validate([
            'title' => 'nullable|string|max:255',
            'discription' => 'nullable|string',
            'address' => 'nullable|string',
            'phone' => 'nullable|string',
            'email' => 'nullable|string',
            'facebook' => 'nullable|string',
            'twitter' => 'nullable|string',
            'instagram' => 'nullable|string',
            'linkedin' => 'nullable|string',
        ]);

        $contact->title = $request->title;
        $contact->discription = $request->discription;
        $contact->address = $request->address;
        $contact->phone = $request->phone;
        $contact->email = $request->email;
        $contact->facebook = $request->facebook;
        $contact->twitter = $request->twitter;
        $contact->instagram = $request->instagram;
        $contact->linkedin = $request->linkedin;

        $contact->save();

        Alert::success("success", 'contact updated successfully.')->showConfirmButton('OK');

        return redirect()->back();
    }

    public function contactdestroy($id)
    {
        $team = Contact::find($id);
        if (!$team) {
            return redirect()->back()->with('error', 'contact not found.');
        }
        $team->delete();
        Alert::success("success", 'contact deleted successfully')->showConfirmButton('OK');

        return redirect()->back();
    }

}
