<?php

namespace App\Http\Controllers\Product;

use App\Book;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Auth;
use App\Imports\ProImport;
use Illuminate\Http\Request;
use App\Products;
use App\Category;
use App\ProImage;
use App\SubCate;
use App\Orders;

class ProductController extends Controller
{
    function import(Request $request)
    {
        Excel::import(new ProImport, $request->file);
        return redirect()->back()->with('message', 'Success');
    }


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
        return view('admin.product.view', compact('products'));
    }

    function single($product_id){
        $product = Products::where('product_id', $product_id)->get();
        return view('admin.product.single', compact('product'));
    }

    function newPro(){
        return view('admin.product.new');
    }

    function delete($id){
        $shop = Products::find($id);
        $shop->delete();
        return redirect()->back();
    }

    public function store(Request $request)
    {
        // $validated = $request->validate([
        //     'product_number' => 'required|unique:products|max:255',
        //     'name' => 'required',
        //     'category' => 'required',
        //     'sub_category' => 'required',
        //     'shop_name' => 'required',
        //     'photo' => 'required',
        //     'short_desc' => 'nullable',
        //     'description' => 'nullable',
        //     'meta_title' => 'nullable',
        //     'meta_desc' => 'nullable',
        //     'price' => 'nullable',
        //     'discount' => 'nullable',
        //     'unit' => 'nullable',
        //     'status' => 'nullable',
        //     'weight' => 'nullable',
        //     'type' => 'nullable',
        //     'length' => 'nullable',
        //     'width' => 'nullable',
        //     'height' => 'nullable',
        // ]);

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

        return redirect()->back()->with('success', 'Added to Invntory');
    }

    function edit($product_id){
        $product = Products::where('product_id', $product_id)->get();
        return view('admin.product.edit', compact('product'));
    }

    function editimage($product_id){
        $product = Products::where('product_id', $product_id)->get();
        return view('admin.product.editimage', compact('product'));
    }

    function update_image(Request $request){

        if($request->file('photo'))
        {
            $photo = $request->file('photo');
            $photoname = time() . '.' . $request->file('photo')->extension();
            $photoPath = public_path() . '/product/image/';
            $photo->move($photoPath, $photoname);
        }

        $product = new ProImage();
        $product->product_id = $request->product_id;
        $product->photo = $photoname;
        $product->save();
        return redirect()->back()->with('message', 'Success');
    }

    function update_image_main(Request $request,$id){

        // dd($request->file('photo'));

        if($request->file('photo'))
        {
            $photo = $request->file('photo');
            $photoname = time() . '.' . $request->file('photo')->extension();
            $photoPath = public_path() . '/product/image/';
            $photo->move($photoPath, $photoname);
        }
        $product = Products::find($id);
        $product->photo = $photoname;
        $product->save();
        return redirect()->back()->with('message', 'Success');

    }

    function delete_image($id){
        $shop = ProImage::find($id);
        $shop->delete();
        return redirect()->back();
    }



    function update(Request $request, $id)
    {
        // $validated = $request->validate([
        //     'product_number' => 'nullable|unique:products|max:255',
        //     'name' => 'nullable',
        //     'category' => 'nullable',
        //     'sub_category' => 'nullable',
        //     'shop_name' => 'nullable',
        //     'photo' => 'nullable',
        //     'short_desc' => 'nullable',
        //     'description' => 'nullable',
        //     'meta_title' => 'nullable',
        //     'meta_desc' => 'nullable',
        //     'price' => 'nullable',
        //     'discount' => 'nullable',
        //     'unit' => 'nullable',
        //     'status' => 'nullable',
        //     'weight' => 'nullable',
        //     'type' => 'nullable',
        //     'length' => 'nullable',
        //     'width' => 'nullable',
        //     'height' => 'nullable',
        // ]);

        // $request->validate([

        //     'photo' => 'nullable',

        // ]);

        // if($request->file('photo'))
        // {
        //     $photo = $request->file('photo');
        //     $photoname = time() . '.' . $request->file('photo')->extension();
        //     $photoPath = public_path() . '/product/image/';
        //     $photo->move($photoPath, $photoname);
        // }else
        // {
        //     return $photoname->NULL;
        // }

        $product = Products::find($id);

        $product->product_number = $request->product_number;

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

        return redirect()->route('product.view')->with('success', 'Successfully Done');
    }


    function orders(){
        $orders = Book::all();
        return view('admin.lead.order', compact('orders'));
    }

    function orders_single($book_number){
        $orders = Book::where('book_number', $book_number)->get();
        return view('admin.lead.orders', compact('orders'));
    }

    function authorders(){
        $orders = Book::all();
        return view('author.lead.order', compact('orders'));
    }

    function authororders_single($book_number){
        $orders = Book::where('book_number', $book_number)->get();
        return view('author.lead.orders', compact('orders'));
    }

    function post_order(Request $request){
        $post = new Orders();
        $post->order_id = $request->order_id;
        $post->assign_id = $request->assign_id;
        $post->order_status = $request->order_status;
        $post->save();
        return redirect()->back()->with('message', 'Agent Assigned');
    }

}
