<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    function view(){
        return view('admin.customer.customer');
    }

    function new(){
        return view('admin.customer.new');
    }

    function add(Request $request){
        $contact = new Contact();
        $contact->contact_number = 'C:'. uniqid();
        $contact->f_name = $request->f_name;
        $contact->l_name = $request->l_name;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->city = $request->city;
        $contact->state = $request->state;
        $contact->country = $request->country;
        $contact->zip = $request->zip;
        $contact->agent = $request->agent;
        $contact->save();
        return redirect()->back()->with('success', 'Customer Added');
    }

}
