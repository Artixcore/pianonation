@extends('author.master')

@section('content')
    @foreach ($product as $item)

	<main class="content">
        <div class="container-fluid p-0">
            <h1 class="h3 mb-3"><strong>{{$item->name}}</strong>  <a href="{{route('product.single.edit', $item->product_id)}}" class="btn btn-outline-success">Edit</a> </h1>
            <div class="row">

            <div class="col-md-6">
                <div class="w-100">
                <div class="row">

                    <div class="card flex-fill w-100">

                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="form-label">Name</label>
                                    <p><b>{{$item->name}}</b></p>
                                  </div>
                                  <div class="col-md-3">
                                    <label class="form-label">Price</label>
                                    <p><b>{{$item->price}}</b></p>
                                  </div>
                                  <div class="col-md-3">
                                    <label class="form-label">Unit</label>
                                    <p><b>{{$item->unit}}</b></p>
                                  </div>
                            </div>
                        </div>
                        </div>


                        <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <label class="form-label">Height</label>
                                    <p><b>{{$item->height}}</b></p>
                                  </div>
                                  <div class="col-md-3">
                                    <label class="form-label">Width</label>
                                    <p><b>{{$item->width}}</b></p>
                                  </div>
                                  <div class="col-md-3">
                                    <label class="form-label">Length</label>
                                    <p><b>{{$item->length}}</b></p>
                                  </div>
                                   <div class="col-md-3">
                                  <label class="form-label">Weight</label>
                                    <p><b>{{$item->weight}}</b></p>
                                   </div>
                        </div>
                        </div>
                        </div>


                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="form-label"># Serial Number</label>
                                        <p><b>{{$item->product_number}}</b></p>

                                      </div>
                                      <div class="col-md-4">
                                        <label class="form-label">Type</label>
                                        <p><b>{{$item->type}}</b></p>
                                      </div>
                                      <div class="col-md-2">
                                       <label class="form-label">Status</label>
                                            <p><b>{{$item->status}}</b></p>
                                        </div>
                            </div>
                            </div>
                            </div>
                    </div>
                </div>
                </div>


                <div class="col-md-6">
                    <div class="w-100">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">

                                            <label class="form-label">Category</label>
                                            <p><b>{{$item->category}}</b></p>

                                             <label class="form-label">Sub Category</label>
                                            <p><b>{{$item->sub_category}}</b></p>


                                    </div>
                                </div>

                                  <div class="card">
                                    <div class="card-body">
                                        <label class="form-label">Shop Name</label>
                                        <p><b>{{$item->shop_name}}</b></p>
                                    </div>
                                </div>


                            </div>

                            <div class="col-sm-6">

                                 <div class="card">
                                    <img src="{{asset('public/product/image')}}/{{$item->photo}}" style="height: 100%; width:100%;">
                                </div>




                            </div>

                        </div>
                    </div>
                </div>


            </div>
        </div>



        <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <label class="form-label">Meta Title</label>
                    <p><b>{{$item->meta_title}}</b></p>

                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <label class="form-label">Meta Description</label>
                    <p><b>{{$item->meta_desc}}</b></p>

                </div>
            </div>
        </div>


        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="card">

                    <div class="card-body">
                        <label class="form-label">Description</label>
                        <p><b>{{$item->description}}</b></p>
                    </div>

            </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <label class="form-label">Short Description</label>
                        <p><b>{{$item->short_desc}}</b></p>
                    </div>
                </div>
            </div>
            {{-- <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <button style="width: 100%;" class="btn btn-lg btn-outline-success" type="submit">Save Product</button>
                    </div>
                </div>
            </div> --}}
            </div>
    </main>

    @endforeach

@endsection
