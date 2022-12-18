@extends('layouts.app')

@section('content')
	<main class="main py-2">
        <div class="container py-5">
            <h1 class="h3 mb-3"><strong>Upload Product</strong> </h1>
            <div class="row">
            <div class="col-md-12">
            @if(session()->has('message'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong> {{ session()->get('message') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
            @endif
            </div>
            <form action="{{route('site.up_pro')}}" method="POST" enctype="multipart/form-data">
                @csrf
            <button style="float: right;" type="submit" class="btn btn-outline-success btn-lg btn-block">Save</button>
            <div class="col-md-12">
                <div class="w-100">
                <div class="row">
                @foreach ($sites as $item)

                    <div class="card flex-fill w-100">

                        <input type="hidden" name="site_number" value="{{$item->site_number}}">
                        @endforeach
                        <div class="card-body">
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Type</th>
                                <th scope="col">Photo</th>
                              </tr>
                            </thead>
                            @php
                            $products = App\Products::all();
                            @endphp
                            <tbody>
                            @foreach($products as $product)
                              <tr>
                                <th scope="row"> <input type="checkbox" name="product_id[]" value="{{$product->product_id}}"> </th>
                                <td>{{$product->name}}</td>
                                <td>{{$product->type}}</td>
                                <td>
                                    @if($product->Photo==NULL)
                                    <img src="{{asset('public/product/image')}}/{{$product->Photos_2}}" style="height:150px; width:150ox;">
                                    @else
                                    <img src="{{asset('public/product/image')}}/{{$product->Photo}}" style="height:150px; width:150ox;">
                                    @endif
                                </td>
                              </tr>
                            @endforeach
                          </tbody>
                          </table>
                        </div>
                        </div>

                        </div>
                        </div>
                    </div>
                </div>
                </div>

        </form>

    </main>
@endsection
