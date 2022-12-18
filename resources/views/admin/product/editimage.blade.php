@extends('admin.master')

@section('content')
@foreach ($product as $item)
	<main class="content">
        <div class="container-fluid p-0">
            <h1 class="h3 mb-3"><strong>Edit Product</strong> </h1>
            <div class="row">
            <div class="col-md-12">
            @if(session()->has('message'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong> {{ session()->get('message') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
            @endif
            </div>


            <div class="w-100">
                <div class="row">

                    <div class="card">
                        <div class="card-header">
                            Change Main Image
                        </div>
                    <form action="{{route('product.update_image_main', $item->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="file" name="photo" class="form-control-file">
                                  </div>
                                  <div class="col-md-3">
                                    <button style="width: 100%;" class="btn btn-lg btn-outline-success" type="submit">Save</button>
                                  </div>
                            </div>
                        </div>
                    </form>

                        <div class="card-body">
                            <img src="{{asset('public/product/image')}}/{{$item->photo}}" style="width:500px; height:400px;">
                        </div>
                        </div>


                    </div>
                </div>


                <div class="w-100">
                <div class="row">

                    <div class="card">
                    <form action="{{route('product.update_image', $item->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="file" name="photo" class="form-control-file">
                                    <input type="hidden" name="product_id" value="{{$item->product_id}}">
                                  </div>
                                  <div class="col-md-3">
                                    <button style="width: 100%;" class="btn btn-lg btn-outline-success" type="submit">Save</button>
                                  </div>
                            </div>
                        </div>
                        </div>


                    </div>
                </div>




            </div>
        </div>
        </form>

        <br>
        <div class="container">
            <div class="row">
              @php
                  $images = App\ProImage::where('product_id', $item->product_id)->get();
              @endphp

               <table class="table table-hover">
                   <tbody>
                    @foreach ($images as $tem)
                    <tr>
                        <td><img src="{{asset('public/product/image')}}/{{$tem->photo}}" style="width:500px; height:400px;"></td>
                        <td>
                            <form action="{{route('product.delete_image', $tem->id)}}" method="post">
                                {{-- @endforeach --}}
                                    @method('post')
                                    @csrf
                                <button type="submit" class="btn btn-outline-danger" onclick="return myFunction();"><i style="color: #000000;" class="fa-solid fa-trash-can"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                   </tbody>
                 </table>

            </div>

        </div>

    </main>
    @endforeach
@endsection
