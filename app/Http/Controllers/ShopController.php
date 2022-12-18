<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shop;

class ShopController extends Controller
{
    function view(){
        $shops = Shop::all();
        return view('admin.shop.shop', compact('shops'));
    }

    function new(){
        return view('admin.shop.new');
    }

    function visit($shop_number){

        $shops = Shop::where('shop_number', $shop_number)->get();
        return view('admin.shop.view', compact('shops'));
    }

    function store(Request $request){

        if($request->file('shop_logo'))
        {
            $photo = $request->file('shop_logo');
            $shop_logo = time() . '.' . $request->file('shop_logo')->extension();
            $photoPath = public_path() . '/shop/image/';
            $photo->move($photoPath, $shop_logo);
        }

        $shop = new Shop();
        $shop->shop_number = 'Shop'. uniqid();
        $shop->shop_logo = $shop_logo;
        $shop->shop_name = $request->shop_name;
        $shop->shop_address = $request->shop_address;
        $shop->shop_owner = $request->shop_owner;
        $shop->email = $request->email;
        $shop->phone = $request->phone;
        $shop->location = $request->location;
        $shop->save();

        return view('admin.shop.shop')->with('success', 'Shop Added');
    }

    function edit($shop_number){
        $showroom = Shop::where('shop_number', $shop_number)->get();
        return view('admin.shop.edit', compact('showroom'));
    }

    function update(Request $request, $id){

        $shop = Shop::find($id);
        // $shop->shop_number = 'Shop'. uniqid();
        // $shop->shop_logo = $shop_logo;
        $shop->shop_name = $request->shop_name;
        $shop->shop_address = $request->shop_address;
        $shop->shop_owner = $request->shop_owner;
        $shop->email = $request->email;
        $shop->phone = $request->phone;
        $shop->location = $request->location;
        $shop->save();

        return view('admin.shop.shop')->with('success', 'Shop Updated');
    }

    function update_shop_image(Request $request, $id){
        if($request->file('shop_logo'))
        {
            $photo = $request->file('shop_logo');
            $shop_logo = time() . '.' . $request->file('shop_logo')->extension();
            $photoPath = public_path() . '/shop/image/';
            $photo->move($photoPath, $shop_logo);
        }

        $shop = Shop::find($id);
        $shop->shop_logo = $shop_logo;
        $shop->save();
        return redirect()->back()->with('success', 'Shop Image Updated');

    }

    function delete_show($id){
        $shop = Shop::find($id);
        $shop->delete();
        return redirect()->back();
    }


}
