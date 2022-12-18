<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;
use App\Products;
use App\Shop;


class HomeController extends Controller
{

    // function search(Request $request){
    //     $products = Products::where('name', $request->name)
    //                                ->('price', $request->price)
    //                                ->get();
    //                                return view('string')
    // }

    function all_piano(){
        return view('product');
    }

    function product_number($product_id){
        $products = Products::where('product_id', $product_id)->get();
        return view('single', compact('products'));
    }

    function showroom($shop_number){
        $showroom = Shop::where('shop_number', $shop_number)->get();
        return view('showroom.index', compact('showroom'));
    }

    function search_type($type){
        $search = Products::where('type', $type)->get();
        return view('product', compact('search'));
    }


    function purches($name){
        $products = Products::where('name', $name)->get();
        return view('pur.pur', compact('products'));
    }

    function payment(Request $request){

        $pur = new Book();
        $pur->book_number = 'Book'. uniqid();
        $pur->shop_name = $request->shop_name;
        $pur->user_id = $request->user_id;
        $pur->piano_id = $request->piano_id;
        $pur->f_name = $request->f_name;
        $pur->l_name = $request->l_name;
        $pur->email = $request->email;
        $pur->contact = $request->contact;
        $pur->address = $request->address;
        $pur->address_2 = $request->address_2;
        $pur->city = $request->city;
        $pur->state = $request->state;
        $pur->zip = $request->zip;
        $pur->remain_bal = $request->remain_bal;
        $pur->steps = $request->steps;
        $pur->timeframe = $request->timeframe;
        $pur->save();
        return redirect()->back()->with('message', 'Booking Successful');

    }
}
