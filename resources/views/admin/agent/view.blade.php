@extends('admin.master')

@section('content')
	<main class="content">
        <div class="container-fluid p-0">
            <h1 class="h3 mb-3"><strong>Agent</strong> <a href="{{route('employee.add')}}" class="btn btn-outline-success"><i class="fa-solid fa-plus"></i> Add Agent</a></h1>
            <div class="row">


                <div class="col-xl-12 col-xxl-12">
                    <div class="card flex-fill w-100">

                        <div class="card-body">
                            <table class="table table-hover my-0">
                                <thead>
                                    <tr>
                                        <th>#ID</th>
                                        <th class="d-none d-md-table-cell">Name</th>
                                        <th class="d-none d-xl-table-cell">Phone</th>
                                        <th class="d-none d-xl-table-cell">Email</th>
                                        {{-- <th>Agent</th> --}}
                                        <th>View</th>

                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach (App\User::where('urole', 'author')->get() as $item)
                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td class="d-none d-md-table-cell">{{$item->name}}</td>
                                        <td class="d-none d-xl-table-cell">{{$item->phone}}</td>
                                        <td class="d-none d-xl-table-cell">{{$item->email}}</td>
                                        {{-- <td><span class="badge bg-success">{{$item->agent}}</span></td> --}}
                                        <td><a href="{{route('employee.single', $item->name)}}"><i style="color: #000000;" class="fa-solid fa-eye"></i></a></td>
                                        <td>
                                            <form action="{{route('employee.delete', $item->id)}}" method="post">
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



            </div>
        </div>
    </main>
@endsection
