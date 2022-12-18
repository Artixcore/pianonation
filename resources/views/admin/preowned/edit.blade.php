@extends('admin.master')

@section('content')
	<main class="content">
        <div class="container-fluid p-0">
            <h1 class="h3 mb-3"><strong>Edit Product</strong> </h1>
            <div class="row">


            <div class="col-md-6">
                <div class="w-100">
                <div class="row">

                    <div class="card flex-fill w-100">

                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="form-label">Name</label>
                                    <input type="email" class="form-control">
                                  </div>
                                  <div class="col-md-3">
                                    <label class="form-label">Price</label>
                                    <input type="password" class="form-control">
                                  </div>
                                  <div class="col-md-3">
                                    <label class="form-label">Unit</label>
                                    <input type="password" class="form-control">
                                  </div>
                            </div>
                        </div>
                        </div>


                        <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <label class="form-label">Height</label>
                                    <input type="email" class="form-control">
                                  </div>
                                  <div class="col-md-4">
                                    <label class="form-label">Width</label>
                                    <input type="password" class="form-control">
                                  </div>
                                  <div class="col-md-4">
                                    <label class="form-label">Length</label>
                                    <input type="password" class="form-control">
                                  </div>

                        </div>
                        </div>
                        </div>


                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-8">
                                        <label class="form-label">Meta Title</label>
                                        <input type="email" class="form-control">
                                      </div>
                                      <div class="col-md-4">
                                        <label class="form-label">Type</label>
                                        <input type="password" class="form-control">
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
                                        <div class="row">
                                            <label class="form-label">Category</label>
                                            <input class="form-control" type="text" name="" placeholder="Category">
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <label class="form-label">Photo</label>
                                        <input class="form-control" type="file" name="">
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <label class="form-label">Sub Category</label>
                                            <input class="form-control" type="text" name="" placeholder="Sub-Category">
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <label class="form-label">Shop Name</label>
                                        <input class="form-control" type="text" name="" placeholder="Shop Name">
                                    </div>
                                </div>


                            </div>

                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <label class="form-label">Weight</label>
                                            <input class="form-control" type="text" name="" placeholder="Sub-Category">
                                        </div>
                                    </div>
                                </div>


                            </div>

                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <label class="form-label">Status</label>
                                            <input class="form-control" type="text" name="" placeholder="Sub-Category">
                                        </div>
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
                <textarea class="form-control" name="" id="""></textarea>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <label class="form-label">Short Description</label>
                    <textarea class="form-control" name="" id=""></textarea>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <label class="form-label">Description</label>
                    <textarea class="form-control" name="" id=""></textarea>
                </div>
            </div>
        </div>
        </div>

        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <button style="width: 100%;" class="btn btn-lg btn-outline-success" type="submit">Save Product</button>
                    </div>
                </div>
            </div>
    </main>
@endsection
