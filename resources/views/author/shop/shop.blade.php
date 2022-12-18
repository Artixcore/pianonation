@extends('admin.master')

@section('content')
	<main class="content">
        <div class="container-fluid p-0">
            <h1 class="h3 mb-3"><strong>Showroom</strong> <a href="{{route('shop.new')}}" class="btn btn-outline-success"><i class="fa-solid fa-plus"></i> Add New Showroom</a></h1>
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
                                        <th>Logo</th>
                                        <th>View</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @foreach ($shops as $item) --}}
                                    @foreach (App\Shop::all() as $item)
                                    <tr>
                                        <td>{{$item->shop_number}}</td>
                                        <td class="d-none d-md-table-cell">{{$item->shop_name}}</td>
                                        <td class="d-none d-xl-table-cell">{{$item->email}}</td>
                                        <td class="d-none d-xl-table-cell">{{$item->phone}}</td>
                                        <td><img style="height: 50px; width:50px;" src="{{asset('public/shop/image')}}/{{$item->shop_logo}}" alt="" srcset=""></td>
                                        <td><a href="{{route('shop.visit', $item->shop_number)}}""><i style="color: #000000;" class="fa-solid fa-eye"></i></a></td>
                                        <td><a href="{{route('shop.edit', $item->shop_number)}}"><i style="color: #000000;" class="fa-solid fa-pen-to-square"></i></a></td>
                                        <td>

                                            <form action="{{route('shop.delete', $item->id)}}" method="post">
                                                {{-- @endforeach --}}
                                                    @method('post')
                                                    @csrf
                                                <button type="submit" class="btn btn-outline-danger" onclick="return myFunction();"><i style="color: #000000;" class="fa-solid fa-trash-can"></i></button>
                                            </form>

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
