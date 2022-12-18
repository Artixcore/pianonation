@extends('admin.master')

@section('content')
	<main class="content">
        <div class="container-fluid p-0">
            <h1 class="h3 mb-3"><strong>Add Campaign</strong> </h1>
            <div class="row">
            <div class="col-md-12">
            @if(session()->has('message'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong> {{ session()->get('message') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
            @endif
            </div>
            <div class="col-md-12">
                <div class="w-100">
                <div class="row">

                    <div class="card flex-fill w-100">
                    <form action="{{route('admin.campaign.save_camp')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <label class="form-label">Campaign Name</label>
                                    <input type="text" name="camp_name" class="form-control">
                                  </div>
                                  <div class="col-md-4">
                                    <label class="form-label">Campaign Title</label>
                                    <input type="text" name="camp_title" class="form-control">
                                  </div>
                                  <div class="col-md-4">
                                    <label class="form-label">Image for View</label>
                                    <input type="file" name="camp_image" class="form-control" required>
                                  </div>

                            </div>
                        </div>
                        </div>


                        <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <label class="form-label">Campaign Short Description</label>

                                    <textarea name="message" class="form-control"></textarea>
                                </div>
                        </div>
                        </div>
                        </div>


                        <div class="card">
                            <div class="card-body">
                                <div class="row">

                                    <div class="col-md-4">
                                        <label class="form-label">Showroom</label>
                                        <select name="shop_id" class="form-control">
                                            <option selected>Select One</option>

                                            @foreach (App\Shop::all() as $temw)
                                               <option value="{{$temw->id}}">{{$temw->shop_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-md-4">
                                        <label class="form-label">Start</label>
                                        <input type="date" name="from" class="form-control">
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label">End</label>
                                        <input type="date" name="to" class="form-control">
                                    </div>
                            </div>
                            </div>
                            </div>

                            <div class="col-md-6">
                                <div class="card">
                                        <button style="float: right;" type="submit" class="btn btn-outline-success btn-lg btn-block">Save</button>
                                </div>
                            </div>

                    </div>
                </div>
                </div>






        </form>
    </main>
@endsection
