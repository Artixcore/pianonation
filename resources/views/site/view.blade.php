@extends('layouts.app')

@section('content')

	<main class="main py-4">
        <div class="container py-3">
            <h1 class="h3 mb-3"><strong>Site</strong>
            <small> <a href="{{route('site.new')}}" class="btn btn-outline-success"><i class="fa-solid fa-plus"></i> Create New Site</a> </small>
            </h1>
            <div class="row">

                <div class="col-md-12">
                    <div class="card flex-fill w-100">

                        <div class="card-body">
                            <table class="table table-hover my-0">
                                <thead>
                                    <tr>

                                        <th class="d-none d-md-table-cell">Title</th>
                                        <th class="d-none d-xl-table-cell">Product</th>
                                        <th>Agent</th>
                                        <th>View</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($sites as $item)
                                <tr>
                                    <td>{{$item->title}}</td>
                                    <td><a href="{{route('site.pro_sites', $item->site_number)}}" class="btn btn-outline-success"> Add Products </a></td>
                                    @php
                                        $users = App\User::where('id', $item->user_id)->get();
                                    @endphp
                                    <td>
                                        @foreach ($users as $em)
                                            {{$em->name}}
                                        @endforeach
                                    </td>
                                    <td><a href="{{route('site.see', $item->slug)}}"> View Site </a></td>
                                    <td><a href="{{route('site.edit', $item->site_number)}}"> Edit Site </a></td>
                                    <td>
                                        <form action="{{route('site.delete', $item->id)}}" method="post">
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
