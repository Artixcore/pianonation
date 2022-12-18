<?php

namespace App\Http\Controllers\Lead;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\HomeMail;
use App\Lead;

class LeadController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }

    // Admin
    function index(){
        $leads = HomeMail::all();
        return view('admin.lead.index', compact('leads'));
    }

    function lead_in($f_name){
        $leads = HomeMail::where('f_name', $f_name)->get();
        return view('admin.lead.view', compact('leads'));
    }

    // Author
    function Aindex(){
        $leads = Lead::where('user_id', Auth::user()->id)->get();
        return view('author.lead.index', compact('leads'));
    }

    // Author
    function Anew(){
        return view('author.lead.new');
    }

    // Admin
    function Adminnew(){
        return view('admin.lead.new');
    }

    function save_lead(Request $request){

        $request->validate([
            'image' => 'nullable',
        ]);

        if($request->file('image'))
        {
            $photo = $request->file('image');
            $photoname = time() . '.' . $request->file('image')->extension();
            $photoPath = public_path() . '/lead/image/';
            $photo->move($photoPath, $photoname);
        }

        $lead = new Lead();
        $lead->lead_number = 'Lead'. uniqid();
        $lead->user_id  = Auth::user()->id;
        $lead->shop_id  = $request->shop_id;
        $lead->f_name   = $request->f_name;
        $lead->l_name   = $request->l_name;
        $lead->name     = $request->name;
        $lead->email    = $request->email;
        $lead->phone    = $request->phone;
        $lead->company  = $request->company;
        $lead->location = $request->location;
        $lead->source   = $request->source;
        $lead->tag      = $request->tag;
        $lead->note     = $request->note;
        $lead->rating   = $request->rating;
        $lead->image    = $photoname;
        $lead->save();

        return redirect()->back()->with('message', 'Lead Added');
    }

    function delete_lead($id){
        $user = lead::find($id);
        $user->delete();
        return redirect()->back();
    }
}
