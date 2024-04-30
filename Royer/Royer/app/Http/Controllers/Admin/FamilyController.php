<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Service;
use Illuminate\Http\Request;

class FamilyController extends Controller
{
    public function family(){
        $services = Service::all();
        $contact = Contact::first();


        return view('family',compact('services','contact'));
    }
}
