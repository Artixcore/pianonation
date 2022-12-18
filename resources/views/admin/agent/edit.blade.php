@extends('admin.master')

@section('content')
@foreach ($users as $user)
<main class="content">
    <div class="container-fluid p-0">
        <h1 class="h3 mb-3"><strong>Edit Agent</strong> </h1>
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
                <form action="{{route('employee.update', $user->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <label class="form-label">Username</label>
                                <input type="text" value="{{$user->name}}" name="name" class="form-control">
                              </div>
                            <div class="col-md-4">
                                <label class="form-label">First Name</label>
                                <input type="text" value="{{$user->f_name}}" name="f_name" class="form-control">
                              </div>
                              <div class="col-md-4">
                                <label class="form-label">Last Name</label>
                                <input type="text" value="{{$user->l_name}}" name="l_name" class="form-control">
                              </div>
                        </div>
                    </div>
                    </div>


                    <div class="card">
                    <div class="card-body">
                        <div class="row">
                              <div class="col-md-4">
                                <label class="form-label">Email</label>
                                <input type="email" value="{{$user->email}}" name="email" class="form-control">
                              </div>
                              <div class="col-md-4">
                                <label class="form-label">Password</label>
                                <input type="password" name="password" class="form-control">
                              </div>
                              <div class="col-md-4">
                                <label class="form-label">Showroom</label>
                                @php
                                $shops = App\Shop::where('id', $user->shop_id)->get();
                                @endphp
                                <select name="shop_id" class="form-control">
                                    <option selected>
                                        @foreach ($shops as $im)
                                        {{ $im->shop_name }}
                                    @endforeach
                                    </option>
                                    @foreach (App\Shop::all() as $item)
                                    <option value="{{$item->id}}">{{$item->shop_name}}</option>
                                    @endforeach
                                </select>
                              </div>
                    </div>
                    </div>
                    </div>


                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <label class="form-label">Phone</label>
                                    <input type="text" value="{{$user->phone}}" name="phone" class="form-control">
                                </div>

                                <div class="col-md-4">
                                    <label class="form-label">Gender</label>
                                    <select name="gender" class="form-control">
                                        <option selected>{{$user->gender}}</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>

                                <div class="col-md-4">
                                    <label class="form-label">Photo</label>
                                    <input type="file" name="avatar" class="form-control"><br/>
                                    <img src="{{asset('public/avatar/image')}}/{{$user->avatar}}" style="height:100%; width:100%;">
                                </div>

                        </div>
                        </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <button style="float: right;" type="submit" class="btn btn-outline-success btn-lg btn-block">Update</button>
                            </div>
                        </div>
                </div>
            </div>
            </div>






    </form>
</main>
@endforeach
@endsection
