@extends('admin.master')

@section('content')
@foreach ($leads as $item)

<main class="content">
    <div class="container-fluid p-0">
        <h1 class="h3 mb-3"><strong>{{ $item->lead_name }}</strong> </h1>
        <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                              
                                    <label class="form-label">Name</label>
                                    <p><b> {{ $item->lead_name }} </b></p>
                              
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <label class="form-label">Customer</label>
                                <p><b>{{$item->f_name}} {{$item->l_name}}</b></p>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <label class="form-label">Email</label>
                                <p><b>{{$item->email}} </b></p>
                            </div>
                        </div>
                    </div>
                    </div>
             

                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                              
                                    <label class="form-label">Phone</label>
                                    <p><b> {{ $item->phone }} </b></p>
                              
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <label class="form-label">Zip</label>
                                <p><b>{{$item->zip}}</b></p>
                            </div>
                        </div>
                    </div>
                    </div>
                    
                    <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <label class="form-label">Address</label>
                                <p><b>{{$item->address}} </b></p>
                            </div>
                        </div>
                    </div>
                    </div>
      

                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                              
                                    <label class="form-label">Piano Type</label>
                                    <p><b> {{ $item->piano_type }} </b></p>
                              
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <label class="form-label">Level of Piano</label>
                                <p><b> {{$item->level_of_piano}}</b></p>
                            </div>
                        </div>
                    </div>
                    </div>
                    
                    <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <label class="form-label">Specific Brand</label>
                                <p><b>{{$item->specific_brand}} </b></p>
                            </div>
                        </div>
                    </div>
                    </div>


                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                              
                                    <label class="form-label">Price Range</label>
                                    <p><b> {{ $item->price_range }} </b></p>
                              
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <label class="form-label">Feature</label>
                                <p><b> {{$item->feature}}</b></p>
                            </div>
                        </div>
                    </div>
                    </div>
                    
                    <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <label class="form-label">Current Piano System</label>
                                <p><b>{{$item->current_piano_system}} </b></p>
                            </div>
                        </div>
                    </div>
                    </div>

                    
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                              
                                    <label class="form-label">Picture</label>
                                    <p><b> <img src="{{asset('public/piano/image')}}/{{$item->picture_of_piano}}" style="height: 100%; width:100%;"> </b></p>
                              
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <label class="form-label">System Work</label>
                                <p><b> {{$item->system_work}}</b></p>
                            </div>
                        </div>
                    </div>
                    </div>
                    
                    <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <label class="form-label">Last Seen by Tunner</label>
                                <p><b>{{$item->last_seen_by_tunner}} </b></p>
                            </div>
                        </div>
                    </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                              
                                    <label class="form-label">price_you_want</label>
                                    <p><b> {{$item->price_you_want}} </b></p>
                              
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <label class="form-label">Video</label>
                                <p><b> 
                                    <iframe src="{{asset('public/piano/image')}}/{{$item->pic_1}}" style="height=100%; width:100%;"></iframe>
                                </b></p>
                            </div>
                        </div>
                    </div>
                    </div>
                    
                    <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <label class="form-label">Model Number</label>
                                <p><b>{{$item->model_number}} </b></p>
                            </div>
                        </div>
                    </div>
                    </div>


                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                              
                                    <label class="form-label">serial_number</label>
                                    <p><b> {{$item->serial_number}} </b></p>
                              
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <label class="form-label">Manufacturer</label>
                                <p><b> 
                                    {{$item->manufacturer}}
                                </b></p>
                            </div>
                        </div>
                    </div>
                    </div>
                    
                    <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <label class="form-label">Model Number</label>
                                <p><b>{{$item->designer}} </b></p>
                            </div>
                        </div>
                    </div>
                    </div>


                </div>
                </div>
            </main>
@endforeach
@endsection
