@extends('admin.master')

@section('content')
	<main class="content">
    @foreach ($shops as $item)

    <div class="container-fluid p-0">
        {{-- <h1 class="h3 mb-3"><strong>Shop</strong> <a href="{{route('shop.new')}}" class="btn btn-outline-success"><i class="fa-solid fa-plus"></i> Add Shop</a></h1> --}}
        <div class="row">


            <div class="col-md-2">
                <div class="card w-100">
                    <img src="{{asset('shop/image')}}/{{$item->shop_logo}}" alt="" style="height:100%; width:100%;">

                </div>

                <div class="card w-100">
                    <div class="card-body"><h3>{{$item->shop_name}}</h3></div>
                    <div class="card-body">
                        @php
                            $users = App\User::where('id', $item->shop_owner)->get();
                        @endphp
                        @foreach ($users as $yk)
                            <b>{{ $yk->name }}</b>
                        @endforeach
                    </div>
                    <div class="card-body">Products</div>
                    <div class="card-body">Marketing</div>
                    <div class="card-body">Site Customize</div>
                    <div class="card-body">User</div>
                </div>
            </div>

            <div class="col-md-10">
                <div class="card w-100">
                    <div class="card-body">
                        @yield('shops')
                    </div>
                </div>
            </div>

        </div>
    </div>

    @endforeach
    </main>
@endsection
