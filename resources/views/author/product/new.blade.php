@extends('author.master')

@section('content')
	<main class="content">
        <div class="container-fluid p-0">
            <h1 class="h3 mb-3"><strong>Add Product</strong> </h1>
            <div class="row">
            <div class="col-md-12">
            @if(session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong> {{ session()->get('success') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
            @endif
            </div>
            <div class="col-md-6">
                <div class="w-100">
                <div class="row">

                    <div class="card flex-fill w-100">
                    <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="form-label">Name</label>
                                    <input type="text" name="name" class="form-control">
                                  </div>
                                  <div class="col-md-3">
                                    <label class="form-label">Price</label>
                                    <input type="number" name="price" class="form-control">
                                  </div>
                                  <div class="col-md-3">
                                    <label class="form-label">Unit</label>
                                    <input type="number" name="unit" class="form-control">
                                  </div>
                            </div>
                        </div>
                        </div>


                        <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <label class="form-label">Height</label>
                                    <input type="text" name="height" class="form-control">
                                  </div>
                                  <div class="col-md-4">
                                    <label class="form-label">Width</label>
                                    <input type="text" name="width" class="form-control">
                                  </div>
                                  <div class="col-md-4">
                                    <label class="form-label">Length</label>
                                    <input type="text" name="length" class="form-control">
                                  </div>

                        </div>
                        </div>
                        </div>


                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-8">
                                        <label class="form-label">Meta Title</label>
                                        <input type="text" name="meta_title" class="form-control">
                                      </div>
                                      <div class="col-md-4">
                                        <label class="form-label">Type</label>
                                        <select name="type" class="form-control">
                                            <option value="Grand Piano">Grand Piano</option>
                                            <option value="Baby Grand Piano">Baby Grand Piano</option>
                                            <option value="Upright Piano">Upright Piano</option>
                                            <option value="Digital Piano">Digital Piano</option>
                                            <option value="Player Piano">Player Piano</option>


                                            </select>
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
                                                                                        <label class="form-label">Category</label>
                                            <!--<select name="category" class="form-control">-->
                                            <input name="category" type="text" class="form-control">



                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <label class="form-label">Photo</label>
                                        <input class="form-control" type="file" name="photo">
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">

                                            <!--<label class="form-label">Sub Category</label>-->
                                            <label class="form-label">Sub Category</label>
                                            <!--<select name="sub_category" class="form-control">-->
                                                <input name="sub_category" class="form-control" type="text">


                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <label class="form-label">Shop Name</label>
                                        <select name="shop_name" class="form-control">
                                            @foreach (App\Shop::all() as $shop)
                                            <option value="{{$shop->shop_name}}">{{$shop->shop_name}}</option>
                                            @endforeach

                                        </select>

                                    </div>
                                </div>


                            </div>

                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">

                                            <label class="form-label">Weight</label>
                                            <input class="form-control" type="text" name="weight" placeholder="Weight">

                                    </div>
                                </div>


                            </div>

                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">

                                            <label class="form-label">Status</label>

                                            <select name="status" class="form-control">
                                                <option value="New">New</option>
                                                <option value="Pre Owned">Pre Owned</option>
                                            </select>

                                    </div>
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
                <label class="form-label">Meta Description</label>
                <textarea class="form-control" name="meta_desc" id=""></textarea>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <label class="form-label">Short Description</label>
                    <textarea class="form-control" name="short_desc" id=""></textarea>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <label class="form-label">Description</label>
                    <textarea class="form-control" name="description" id=""></textarea>
                </div>
            </div>
        </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <div class="card">
                <div class="card-body">
                <label class="form-label"># Serial Number</label>
                <input type="text" name="product_number" placeholder="#Serial Number" class="form-control">
            </div>
            </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <button style="width: 100%;" class="btn btn-lg btn-outline-success" type="submit">Save Product</button>
                    </div>
                </div>
            </div>

        </form>
    </main>
@endsection
