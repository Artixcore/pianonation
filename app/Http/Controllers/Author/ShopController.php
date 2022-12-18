<?php

namespace App\Http\Controllers\Author;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Shop;
use App\User;
use Illuminate\Support\Facades\Auth;

class ShopController extends Controller
{
    function visit(){
        $users = User::where('name', Auth::user()->name)->get();
        return view('author.shop.view', compact('users'));
    }
}
