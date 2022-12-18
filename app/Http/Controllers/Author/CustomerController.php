<?php

namespace App\Http\Controllers\Author;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Contact;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    function view(){
        return view('author.customer.customer');
    }

    function new(){
        return view('author.customer.new');
    }

    function add(Request $request){
        $contact = new Contact();
        $contact->contact_number = 'C:'. uniqid();
        $contact->user_id = Auth::user()->id;
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
