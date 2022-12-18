@extends('admin.master')

@section('content')
	<main class="content">
        <div class="container-fluid p-0">
            <h1 class="h3 mb-3"><strong>User</strong> <a href="{{route('shop.new')}}" class="btn btn-outline-success"><i class="fa-solid fa-plus"></i> Add User</a></h1>
            <div class="row">


                <div class="col-md-12">
                    <div class="card w-100">

                        <div class="card-body">
                            <table class="table table-hover my-0">
                                <thead>
                                    <tr>
                                        <th>Serial Number</th>
                                        <th class="d-none d-md-table-cell">Name</th>
                                        <th class="d-none d-xl-table-cell">Shop</th>
                                        <th class="d-none d-xl-table-cell">Type</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @foreach ($shops as $item) --}}
                                    @foreach (App\User::hasRole() as $item)
                                    <tr>
                                        <td>{{$item->shop_number}}</td>
                                        <td class="d-none d-md-table-cell">{{$item->shop_name}}</td>
                                        <td class="d-none d-xl-table-cell">{{$item->email}}</td>
                                        <td class="d-none d-xl-table-cell">{{$item->phone}}</td>
                                        <td><img style="height: 50px; width:50px;" src="{{asset('public/shop/image')}}/{{$item->shop_logo}}" alt="" srcset="">
                                            </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </main>
@endsection
