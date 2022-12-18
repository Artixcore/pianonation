@extends('admin.master')

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
                    <form action="{{route('product.orders.single')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                @foreach ($orders as $item)

                                <div class="col-md-4">
                                    <label class="form-label">Piano Name</label>
                                    <input type="hidden" name="order_id" value="{{$item->book_number}}" class="form-control">

                                    @php
                                        $piano = App\Products::where('id', $item->piano_id)->get();
                                        @foreach ($piano as $itm)
                                        <input type="text" value="{{$itm->name}}" class="form-control">
                                        @endforeach
                                    @endphp

                                  </div>
                                  <div class="col-md-4">
                                    <label class="form-label">Agent</label>
                                    <select name="assign_id" class="form-control">
                                        @php
                                            $agent = App\User::where('urole', 'author')->get();
                                        @endphp
                                        <option selected>Select Agent</option>
                                        @foreach ($agent as $im)
                                        <option value="{{$im->name}}">{{$im->name}}</option>
                                        @endforeach
                                    </select>
                                  </div>
                                  <div class="col-md-4">
                                    <label class="form-label">Status</label>
                                    <select name="status" class="form-control">
                                        <option selected>Select Status</option>
                                        <option value="Red">Red</option>
                                        <option value="Yellow">Yellow</option>
                                        <option value="Green">Green</option>
                                    </select>
                                  </div>
                            </div>
                        </div>
                        </div>
                        @endforeach
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
