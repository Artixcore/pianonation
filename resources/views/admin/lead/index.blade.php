@extends('admin.master')

@section('content')
	<main class="content">
        <div class="container-fluid p-0">
            <h1 class="h3 mb-3"><strong>Lead</strong>
            <small></small>
            </h1>
            <div class="row">

                <div class="col-xl-12 col-xxl-12">
                    <div class="card flex-fill w-100">

                        <div class="card-body">
                            <table class="table table-hover my-0">
                                <thead>
                                    <tr>

                                        <th class="d-none d-md-table-cell">Name</th>
                                        <th class="d-none d-xl-table-cell">Email</th>
                                        <th class="d-none d-xl-table-cell">Phone</th>
                                        <th>Address</th>
                                        <th>Created At</th>
                                        {{-- <th>View</th> --}}
                                        <th>View</th>
                                        @if (Auth::user()->urole == 'admin')
                                        <th>Delete</th>
                                        @endif
                                    </tr>
                                </thead> 
                                <tbody>
                                @foreach ($leads as $item)
                                <tr>
                                    <td>{{$item->lead_name}}</td>
                                    <td>{{$item->email}}</td>
                                    <td>{{$item->phone}}</td>
                                    <td>{{$item->address}}</td>
                                    <td>{{$item->created_at->diffForHumans()}}</td>
                                    <td><a href="{{route('admin.lead.view',$item->f_name)}}" class="btn btn-outline-success">View</a></td>
                                    @if (Auth::user()->urole == 'admin')
                                    <td>
                                        <form action="{{route('admin.lead.delete', $item->id)}}" method="post">
                                            {{-- @endforeach --}}
                                                @method('post')
                                                @csrf
                                            <button type="submit" class="btn btn-outline-danger" onclick="return myFunction();"><i style="color: #000000;" class="fa-solid fa-trash-can"></i></button>
                                        </form>
                                    </td>
                                    @endif
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
