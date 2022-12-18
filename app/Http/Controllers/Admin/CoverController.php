<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Cover;
use App\Shop;
use App\User;

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
        $cover->avatar = $cover_picname;
        $cover->cover_user_id = $request->cover_user_id;
        $cover->cover_shop_id = $request->cover_shop_id;
        $cover->save();

        return redirect()->back()->with('message', 'success');

    }


}
