<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Campaign;

class CampaignController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }

    // Admin
    function adminview(){
        $campaigns = Campaign::all();
        return view('admin.campaign.index', compact('campaigns'));
    }

    function adminviews($camp_number){
        $campaigns = Campaign::where('camp_number', $camp_number)->get();
        return view('admin.campaign.view', compact('campaigns'));
    }

    // Author
        function Aindex(){
            $campaigns = Campaign::where('user_id', Auth::user()->id)->get();
            return view('author.campaign.index', compact('campaigns'));
        }

        function authorview(){
            $campaigns = Campaign::where('user_id', Auth::user()->id)->get();
            return view('author.campaign.index', compact('campaigns'));
        }

        function authorviews($camp_number){
            $campaigns = Campaign::where('camp_number', $camp_number)->get();
            return view('author.campaign.view', compact('campaigns'));
        }

        function authornew(){
            return view('author.campaign.new');
        }

    // Author
    function Anew(){
        return view('author.campaign.new');
    }

    // Admin
    function Adminnew(){
        return view('admin.campaign.new');
    }

    function save_campaign(Request $request){

        $request->validate([
            'camp_image' => 'nullable',
        ]);

        if($request->file('camp_image'))
        {
            $photo = $request->file('camp_image');
            $photoname = time() . '.' . $request->file('camp_image')->extension();
            $photoPath = public_path() . '/campaign/image/';
            $photo->move($photoPath, $photoname);
        }

        $campaign = new Campaign();
        $campaign->camp_number = 'campaign'. uniqid();
        $campaign->user_id   = Auth::user()->id;
        $campaign->shop_id   = $request->shop_id;
        $campaign->camp_name = $request->camp_name;
        $campaign->camp_title= $request->camp_title;
        $campaign->message   = $request->message;
        $campaign->from   = $request->from;
        $campaign->to   = $request->to;
        $campaign->camp_image    = $photoname;
        $campaign->save();

        return redirect()->back()->with('message', 'campaign Added');
    }

    function delete_camp($id){
        $user = Campaign::find($id);
        $user->delete();
        return redirect()->back();
    }
}
