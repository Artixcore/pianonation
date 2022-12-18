@extends('author.master')

@section('content')
	<main class="content">
        <div class="container-fluid p-0">
            <h1 class="h3 mb-3"><strong>Product</strong> <a href="{{route('author.newPro')}}" class="btn btn-outline-success"><i class="fa-solid fa-plus"></i> Add Product</a></h1>
            {{-- <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('category')}}" method="POST">
                        @csrf
                        <input class="form-control" type="text" name="category" placeholder="Add Category">
                    </form>
                </div>
            </div>
            </div> --}}

                    <div class="card">

                        <div class="card-body">
                            <table class="table table-hover my-0">
                                <thead>
                                    <tr>
                                        <th>Serial Number</th>
                                        <th class="d-none d-md-table-cell">Name</th>
                                        <th class="d-none d-xl-table-cell">Shop</th>
                                        <th class="d-none d-xl-table-cell">Type</th>
                                        <th>View</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach (App\Products::all() as $item)
                                    <tr>
                                        <td>{{$item->product_number}}</td>
                                        <td class="d-none d-md-table-cell">{{$item->name}}</td>
                                        <td class="d-none d-xl-table-cell">{{$item->shop_name}}</td>
                                        <td class="d-none d-xl-table-cell">{{$item->type}}</td>
                                        <td><a href="{{route('author.single', $item->product_id)}}"><span class="badge bg-success"><i style="color: #000000;" class="fa-solid fa-eye"></i></a></span></td>
                                        <td>


                                            <form action="{{route('product.delete', $item->id)}}" method="post">
                                                {{-- @endforeach --}}
                                                    @method('post')
                                                    @csrf
                                                <button type="submit" class="btn btn-outline-danger" onclick="return myFunction();"><i style="color: #000000;" class="fa-solid fa-trash-can"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                    </div>
                </div>

        </div>
    </main>
@endsection
