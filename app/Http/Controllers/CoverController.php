<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cover;
use App\User;
use App\Shop;

class CoverController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }

    function save_cover(Request $request){

        if($request->file('cover_pic'))
        {
            $cover_pic = $request->file('cover_pic');
            $cover_picname = time() . '.' . $request->file('cover_pic')->extension();
            $cover_picPath = public_path() . '/cover/image/';
            $cover_pic->move($cover_picPath, $cover_picname);
        }

        $cover = new Cover();
        $cover->cover_pic = $cover_picname;
        $cover->cover_user_id = $request->cover_user_id;
        $cover->cover_shop_id = $request->cover_shop_id;
        $cover->save();

        return redirect()->back()->with('message', 'success');

    }

    function edit_cover($cover_number){
        $covers = Cover::where('cover_number', $cover_number)->get();
        return view('author.cover.edit', compact('covers'))
    }

    function edit_cover_post(Request $request, $id){

        $cover = cover::find($id);

        $cover->cover_pic = $cover_picname;
        $cover->cover_user_id = $request->cover_user_id;
        $cover->cover_shop_id = $request->cover_shop_id;
        // $cover->cover_video_link = $request->cover_video_link;
        $cover->save();
        // return redirect()->route()
        return back();

    }

    function cover_delete($id){
        $cover = cover::find($id);
        $cover->delete();
        return redirect()->back();
    }
}
