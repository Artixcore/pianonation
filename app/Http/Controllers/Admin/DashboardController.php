<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Products;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }

    function index(){
        $products = Products::paginate(6);
        return view('admin.dashboard', compact('products'));
    }
}
