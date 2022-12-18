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
                    <form action="{{route('author.slide.new')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="form-label">Slide</label>
                                    <input type="file" name="slide" class="form-control">
                                @php
                                    $shops = App\Shop::where('shop_owner', auth()->user()->id)->get();
                                @endphp
                                @foreach ($shops as $em)
                                <input type="text" name="shop_number" value="{{$em->shop_number}}">
                                @endforeach
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Slide Header</label>
                                    <input type="text" name="slide_header" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="form-label">Slide Link</label>
                                    <input type="text" name="slide_link" class="form-control">
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
