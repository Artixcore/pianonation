@extends('admin.master')

@section('content')
	<main class="content">
        @foreach ($users as $user)

        <div class="container-fluid p-0">
            <h1 class="h3 mb-3"><strong>Agent</strong> <small> <a href="{{route('employee.edit', $user->name)}}">Edit</a> </small></h1>
            <div class="row">

                <div class="col-md-8">
                    <div class="w-100">
                        <div class="row">

                            <div class="card flex-fill w-100">

                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <label class="form-label">Username</label>
                                    <p><b> {{$user->name}} </b></p>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">First Name</label>
                                    <p><b> {{$user->f_name}} </b></p>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Last Name</label>
                                    <p><b> {{$user->l_name}} </b></p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="form-label">Email</label>
                                    <p><b> {{$user->email}} </b></p>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Showroom</label>

                                    @php
                                        $shops = App\Shop::where('id', $user->shop_id)->get();
                                    @endphp

                                    <p><b>
                                    @foreach ($shops as $im)
                                        {{ $im->shop_name }}
                                    @endforeach
                                    </b></p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <label class="form-label">Phone</label>
                                    <p><b> {{$user->phone}} </b></p>
                                </div>

                                <div class="col-md-4">
                                    <label class="form-label">Gender</label>
                                    <p><b> {{$user->gender}} </b></p>
                                </div>

                                <div class="col-md-4">
                                    <img src="{{asset('public/avatar/image')}}/{{$user->avatar}}" style="height:100%; width:100%;">
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
