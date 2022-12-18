@extends('admin.master')

@section('content')
	<main class="content">
        <div class="container-fluid p-0">
            <h1 class="h3 mb-3"><strong>SEO</strong>
            <small> <a href="{{route('admin.seo.new')}}" class="btn btn-outline-success"><i class="fa-solid fa-plus"></i> Add New SEO</a> </small>
            </h1>
            <div class="row">



                <div class="col-xl-12 col-xxl-12">
                    <div class="card flex-fill w-100">

                        <div class="card-body">
                            <table class="table table-hover my-0">
                                <thead>
                                    <tr>
                                        <th class="d-none d-md-table-cell">Number</th>
                                        <th class="d-none d-xl-table-cell">name</th>
                                        <th class="d-none d-xl-table-cell">Agent</th>
                                        <th>View</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($seos as $item)
                                <tr>
                                    <td>{{$item->number}}</td>
                                    <td>{{$item->name}}</td>
                                    @php
                                        $users = App\User::where('id', $item->user_id)->get();
                                    @endphp
                                    <td>
                                        @foreach ($users as $user)
                                        {{$user->name}}
                                        @endforeach
                                    </td>

                                    <td><a href="{{route('admin.seo.view', $item->number)}}">View</a></td>

                                    <td>
                                        <form action="{{route('admin.seo.delete', $item->id)}}" method="post">
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
