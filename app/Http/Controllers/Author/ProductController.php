<?php

namespace App\Http\Controllers\Author;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Products;
use App\Category;
use App\SubCate;

class ProductController extends Controller
{
    function post_cat(Request $request){

        $cat = new Category();
        $cat->cat_number = 'C'. rand(11111,99999);
        $cat->category = $request->category;
        $cat->save();

        return redirect()->back();
    }

    function subcategory(Request $request){
        $subcategory = new SubCate();
        $subcategory->subcategory = $request->subcategory;
        $subcategory->save();
        return redirect()->back();
    }

    function view(){
        $products = Products::all();
        return view('author.product.view', compact('products'));
    }

    function single($product_id){
        $product = Products::where('product_id', $product_id)->get();
        return view('author.product.single', compact('product'));
    }

    function newPro(){
        return view('author.product.new');
    }

    function delete($id){
        $shop = Products::find($id);
        $shop->delete();
        return redirect()->back();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'product_number' => 'required|unique:products|max:255',
            'name' => 'required',
            'category' => 'required',
            'sub_category' => 'required',
            'shop_name' => 'required',
            'photo' => 'required',
            'short_desc' => 'nullable',
            'description' => 'nullable',
            'meta_title' => 'nullable',
            'meta_desc' => 'nullable',
            'price' => 'nullable',
            'discount' => 'nullable',
            'unit' => 'nullable',
            'status' => 'nullable',
            'weight' => 'nullable',
            'type' => 'nullable',
            'length' => 'nullable',
            'width' => 'nullable',
            'height' => 'nullable',
        ]);

        if($request->file('photo'))
        {
            $photo = $request->file('photo');
            $photoname = time() . '.' . $request->file('photo')->extension();
            $photoPath = public_path() . '/product/image/';
            $photo->move($photoPath, $photoname);
        }

        $product = new Products();

        $product->product_id = "P". uniqid();
        $product->product_number = $request->product_number;
        $product->user_id = Auth::user()->id;
        $product->photo = $photoname;
        $product->name = $request->name;
        $product->category = $request->category;
        $product->sub_category = $request->sub_category;
        $product->shop_name = $request->shop_name;
        $product->short_desc = $request->short_desc;
        $product->description = $request->description;
        $product->meta_title = $request->meta_title;
        $product->meta_desc = $request->meta_desc;
        $product->price = $request->price;
        $product->discount = $request->discount;
        $product->unit = $request->unit;
        $product->status = $request->status;
        $product->weight = $request->weight;
        $product->type = $request->type;
        $product->length = $request->length;
        $product->width = $request->width;
        $product->height = $request->height;

        $product->save();

        return redirect()->back()->with('success', 'Added to Invntory');
    }

    function edit($product_id){
        $product = Products::where('product_id', $product_id)->get();
        return view('author.product.edit', compact('product'));
    }

    function update(Request $request, $id)
    {
        $validated = $request->validate([
            'product_number' => 'nullable|unique:products|max:255',
            'name' => 'nullable',
            'category' => 'nullable',
            'sub_category' => 'nullable',
            'shop_name' => 'nullable',
            'photo' => 'nullable',
            'short_desc' => 'nullable',
            'description' => 'nullable',
            'meta_title' => 'nullable',
            'meta_desc' => 'nullable',
            'price' => 'nullable',
            'discount' => 'nullable',
            'unit' => 'nullable',
            'status' => 'nullable',
            'weight' => 'nullable',
            'type' => 'nullable',
            'length' => 'nullable',
            'width' => 'nullable',
            'height' => 'nullable',
        ]);

        if($request->file('photo'))
        {
            $photo = $request->file('photo');
            $photoname = time() . '.' . $request->file('photo')->extension();
            $photoPath = public_path() . '/product/image/';
            $photo->move($photoPath, $photoname);
        }

        $product = Products::find($id);

        $product->product_number = $request->product_number;
        $product->photo = $photoname;
        $product->name = $request->name;
        $product->user_id = Auth::user()->id;
        $product->category = $request->category;
        $product->sub_category = $request->sub_category;
        $product->shop_name = $request->shop_name;
        $product->short_desc = $request->short_desc;
        $product->description = $request->description;
        $product->meta_title = $request->meta_title;
        $product->meta_desc = $request->meta_desc;
        $product->price = $request->price;
        $product->discount = $request->discount;
        $product->unit = $request->unit;
        $product->status = $request->status;
        $product->weight = $request->weight;
        $product->type = $request->type;
        $product->length = $request->length;
        $product->width = $request->width;
        $product->height = $request->height;

        $product->save();

        return redirect()->route('author.view')->with('success', 'Successfully Done');
    }


}
