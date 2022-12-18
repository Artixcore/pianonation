@extends('author.master')

@section('content')
@foreach ($campaigns as $item)


	<main class="content">
        <div class="container-fluid p-0">
            <h1 class="h3 mb-3"><strong>Campaign</strong> </h1>
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

                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <label class="form-label">Campaign Name</label>
                                    <p><b> {{ $item->camp_name }} </b></p>
                                  </div>
                                  <div class="col-md-4">
                                    <label class="form-label">Campaign Title</label>
                                    <p><b> {{ $item->camp_title }} </b></p>
                                  </div>
                                  <div class="col-md-4">
                                    <img src="{{asset('campaign/image')}}/{{$item->camp_image}}" style="height: 40%; width:50%;">
                                  </div>

                            </div>
                        </div>
                        </div>


                        <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <label class="form-label">Campaign Short Description</label>
                                    <p><b> {{ $item->message }} </b></p>
                                </div>
                        </div>
                        </div>
                        </div>


                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                @php
                                    $showe = App\Shop::where('id', $item->shop_id)->get();
                                @endphp
                                    <div class="col-md-4">
                                        <label class="form-label">Showroom</label>
                                       @foreach ($showe as $em)
                                           {{$em->shop_name}}
                                       @endforeach
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label">Start</label>
                                        <p><b>{{$item->from}}</b></p>
                                    </div>

                                    <div class="col-md-4">
                                        <label class="form-label">End</label>
                                        <p><b>{{$item->to}}</b></p>
                                    </div>

                            </div>
                            </div>
                            </div>


                    </div>
                </div>
                </div>


    </main>


    @endforeach
@endsection
