@extends('author.master')

@section('content')
@foreach ($users as $user)
    @php
        $shops = App\Shop::where('id', $user->shop_id)->get();
    @endphp
@endforeach
	<main class="content">
    @foreach ($shops as $item)

    <div class="container-fluid p-0">
        {{-- <h1 class="h3 mb-3"><strong>Shop</strong> <a href="{{route('shop.new')}}" class="btn btn-outline-success"><i class="fa-solid fa-plus"></i> Add Shop</a></h1> --}}
        <div class="row">


            <div class="col-md-3">
                <div class="card w-100">
                    <div class="card-header">
                        <h3>{{$item->shop_name}}</h3>
                    </div>
                    <img src="{{asset('public/shop/image')}}/{{$item->shop_logo}}" alt="" style="height:100%; width:100%;">

                    <div class="card-body">
                        @php
                            $owner = App\User::where('id', $item->shop_owner)->get();
                        @endphp
                       @foreach ($owner as $it)
                           <b><h4> {{ $it->name }} </h4></b>
                       @endforeach
                    </div>
                    <ul class="list-group">
                        {{-- <li class="list-group-item list-group-item-action"><a href="{{route('author.product.')}}">Products</a></li> --}}
                        <li class="list-group-item list-group-item-action">Video</li>
                      </ul>
                    {{-- <div class="card-body">Products</div> --}}

                </div>
            </div>

            <div class="col-md-9">
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
