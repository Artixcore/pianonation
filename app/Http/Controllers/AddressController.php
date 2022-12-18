<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Address;
use App\Social;
use App\FAQ;

class AddressController extends Controller
{
    function view(){
        $address = Address::all();
        return view('admin.site.site', compact('address'));
    }

    function new(Request $request){
        $address = new Address();
        $address->ad_num = 'Addr'. uniqid();
        $address->ad_number = $request->ad_number;
        $address->ad_email = $request->ad_email;
        $address->ad_address = $request->ad_address;
        $address->save();
        return redirect()->route('admin.address');
    }

    function address_delete($id){
        $service = Address::find($id);
        $service->delete();
        return redirect()->back();
    }

    function icon_new(Request $request){
        $address = new Social();
        $address->social_name = $request->social_name;
        $address->social_icon = $request->social_icon;
        $address->link = $request->link;
        $address->save();
        return redirect()->route('admin.address');
    }

    function icon_delete($id){
        $service = Social::find($id);
        $service->delete();
        return redirect()->back();
    }

    function faq(){
        return view('admin.faq.faq');
    }

    function faq_save(Request $request){
        $faq = new FAQ();
        $faq->title = $request->title;
        $faq->details = $request->details;
        $faq->save();
        return redirect()->back();
    }

    function faq_delete($id){
        $service = FAQ::find($id);
        $service->delete();
        return redirect()->back();
    }
}
