@extends('author.master')

@section('content')
	<main class="content">
        <div class="container-fluid p-0">
            <h1 class="h3 mb-3"><strong>Add Lead</strong> </h1>
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
                    <form action="{{route('author.lead.savelead')}}" method="POST" enctype="multipart/form-data">
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
                                    <label class="form-label">Company</label>
                                    <input type="text" name="company" class="form-control">
                                  </div>

                        </div>
                        </div>
                        </div>


                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label class="form-label">Showroom</label>
                                        <select name="location" class="form-control">
                                         @php
                                             $shops = App\Shop::where('id', Auth::user()->shop_id)->get();
                                         @endphp
                                            @foreach ($shops as $shop)
                                            <option value="{{$shop->id}}" selected>
                                                {{ $shop->shop_name }}
                                            @endforeach
                                            </option>
                                        </select>
                                    </div>

                                    <div class="col-md-4">
                                        <label class="form-label">Source</label>
                                        <input type="text" name="source" class="form-control">
                                    </div>

                                    <div class="col-md-4">
                                        <label class="form-label">Tags</label>
                                        <input type="text" name="tag" class="form-control">
                                    </div>

                            </div>
                            </div>
                            </div>

                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                        <label class="form-label">Note</label>
                                        <input type="text" name="note" class="form-control">
                                        </div>

                                        <div class="col-md-4">
                                            <label class="form-label">Rating</label>
                                            <select name="rating" class="form-control">
                                                <option selected>Select One.</option>
                                                <option value="Pending">Pending</option>
                                                <option value="Positive">Positive</option>
                                                <option value="Success">Success</option>
                                                <option value="Failed">Failed</option>
                                            </select>
                                        </div>

                                        <div class="col-md-4">
                                            <label class="form-label">Image</label>
                                            <input type="file" name="image" class="form-control-file">
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
