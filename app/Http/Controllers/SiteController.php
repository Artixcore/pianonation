<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SiteCus;
use App\SitePro;
use Illuminate\Support\Facades\Auth;

class SiteController extends Controller
{

    function visit_site($slug){
        $sites = SiteCus::where('slug', $slug)->get();
        return view('site', compact('sites'));
    }

    function view(){
        $sites = SiteCus::where('user_id', Auth::user()->id)->get();
        return view('site.view', compact('sites'));
    }

    function new(){
        return view('site.new');
    }

    function post(Request $request){

        if($request->file('cover'))
        {
            $cover = $request->file('cover');
            $covername = time() . '.' . $request->file('cover')->extension();
            $coverPath = public_path() . '/site/image/';
            $cover->move($coverPath, $covername);
        }

        $site = new SiteCus();
        $site->site_number = 'S'. uniqid();
        $site->slug = rand(11111,99999);
        $site->cover = $covername;
        $site->title = $request->title;
        $site->user_id = Auth::user()->id;
        $site->header = $request->header;
        $site->video_link = $request->video_link;
        $site->save();
        return redirect()->back()->with('message', 'Successfully Added');
    }

    function pro_sites($site_number){
        $sites = SiteCus::where('site_number', $site_number)->get();
        return view('site.product', compact('sites'));

    }

    function up_pro(Request $request){
        $pro = new SitePro();
        $pro->pro_number = 'Si'. uniqid();
        $pro->site_number = $request->site_number;
        $pro_id = implode(",", $request->product_id);
        $pro->product_id = $pro_id;
        $pro->save();
        return redirect()->back()->with('message', 'Success');
    }

    function edit($site_number){
        $sites = SiteCus::where('site_number', $site_number)->get();
        return view('site.edit', compact('sites'));

    }

    function update(Request $request, $id){

        if($request->file('cover'))
        {
            $cover = $request->file('cover');
            $covername = time() . '.' . $request->file('cover')->extension();
            $coverPath = public_path() . '/site/image/';
            $cover->move($coverPath, $covername);
        }

        $site = SiteCus::find($id);
        $site->cover = $covername;
        $site->title = $request->title;
        $site->header = $request->header;
        $site->video_link = $request->video_link;
        $site->save();
        return redirect()->back()->with('message', 'Successfully Added');
    }

    function delete_site($id){
        $user = SiteCus::find($id);
        $user->delete();
        return redirect()->back();
    }
}
