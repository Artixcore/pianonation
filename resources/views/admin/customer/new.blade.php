@extends('admin.master')

@section('content')
	<main class="content">
        <div class="container-fluid p-0">
            <h1 class="h3 mb-3"><strong>Add Contact</strong> </h1>
            <div class="row">
            <div class="col-md-12">
            @if(session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong> {{ session()->get('success') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
            @endif
            </div>
            <div class="col-md-8">
                <div class="w-100">
                <div class="row">

                    <div class="card flex-fill w-100">
                    <form action="{{route('customer.add')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <label class="form-label">First Name</label>
                                    <input type="text" name="f_name" class="form-control">
                                  </div>
                                  <div class="col-md-4">
                                    <label class="form-label">Last Name</label>
                                    <input type="text" name="l_name" class="form-control">
                                  </div>
                                  <div class="col-md-4">
                                    <label class="form-label">Username</label>
                                    <input type="text" name="name" class="form-control">
                                  </div>

                            </div>
                        </div>
                        </div>


                        <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <label class="form-label">Phone</label>
                                    <input type="phone" name="phone" class="form-control">
                                  </div>
                                  <div class="col-md-4">
                                    <label class="form-label">Email</label>
                                    <input type="email" name="email" class="form-control">
                                  </div>
                                  <div class="col-md-4">
                                    <label class="form-label">Agent</label>
                                    <input type="text" name="agent" class="form-control">
                                  </div>

                        </div>
                        </div>
                        </div>


                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="form-label">City</label>
                                        <input type="text" name="city" class="form-control">
                                    </div>

                                    <div class="col-md-3">
                                        <label class="form-label">State</label>
                                        <input type="text" name="state" class="form-control">
                                    </div>

                                    <div class="col-md-3">
                                        <label class="form-label">Country</label>
                                        <input type="text" name="country" class="form-control">
                                    </div>

                                    <div class="col-md-3">
                                        <label class="form-label">Zip</label>
                                        <input type="text" name="zip" class="form-control">
                                    </div>
                            </div>
                            </div>
                            </div>

                            <div class="card">
                                <div class="card-body">
                                    <button style="float: right;" type="submit" class="btn btn-outline-success btn-lg btn-block">Save</button>
                                </div>
                            </div>
                    </div>
                </div>
                </div>






        </form>
    </main>
@endsection
