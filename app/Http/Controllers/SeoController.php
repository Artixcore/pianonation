<?php

namespace App\Http\Controllers;

use App\SEO;
use App\Shop;
use App\Slide;
use App\Slide_Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Ui\Presets\React;

class SeoController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }

    // Admin

    function admin(){
        $seos = SEO::all();
        return view('admin.seo.index', compact('seos'));
    }

    function admin_new(){
         return view('admin.seo.new');
    }

    function admin_view($number){
        $seos = SEO::where('number', $number)->get();
        return view('admin.seo.view', compact('seos'));
    }

    // Author
    function author(){
        $seos = SEO::where('user_id', Auth::user()->id)->get();
        return view('author.seo.index', compact('seos'));
    }

    function author_new(){
        return view('author.seo.new');
    }

    function author_view($number){
       $seos = SEO::where('number', $number)->get();
       return view('author.seo.view', compact('seos'));
    }

    function save_seo(Request $request){

        $seo = new SEO();
        $seo->number = 'SEO'. uniqid();
        $seo->user_id = Auth::user()->id;
        $seo->name = $request->name;
        $seo->seo_meta = $request->seo_meta;
        $seo->seo_script = $request->seo_script;
        $seo->save();
        return redirect()->back()->with('success', 'Addeed');
    }

    function delete_seo($id){
        $user = SEO::find($id);
        $user->delete();
        return redirect()->back();
    }

    function slide(){
        $slides = Slide_Shop::where('user_id', Auth::user()->id)->get();
        return view('author.seo.slide.slide', compact('slides'));
    }

    function slide_new(){
        return view('author.seo.slide.new');
    }

    function slide_post(Request $request){


        if($request->file('slide'))
        {
            $avatar = $request->file('slide');
            $avatarname = time() . '.' . $request->file('slide')->extension();
            $avatarPath = public_path() . '/slide/';
            $avatar->move($avatarPath, $avatarname);
        }

        $slide = new Slide_Shop();
        $slide->slide_number = 'S'. uniqid();
        $slide->user_id = Auth::user()->id;
        $slide->shop_number = $request->shop_number;
        $slide->slide = $avatarname;
        $slide->slide_header = $request->slide_header;
        $slide->slide_link = $request->slide_link;
        $slide->save();
        return redirect()->back()->with('message', 'Successfully Added');
    }

    function delete_slide($id){
        $user = Slide_Shop::find($id);
        $user->delete();
        return redirect()->back();
    }
}
