@extends('author.master')

@section('content')
	<main class="content">
        <div class="container-fluid p-0">
            <h1 class="h3 mb-3"><strong>Campaign</strong> <a href="{{route('author.campaign.new')}}" class="btn btn-outline-success"><i class="fa-solid fa-plus"></i> Add Campaign</a></h1>
            <p>Please Delete Campaign after its Over</p>
            <div class="row">


                <div class="col-xl-12 col-xxl-12">
                    <div class="card flex-fill w-100">

                        <div class="card-body">
                            <table class="table table-hover my-0">
                                <thead>
                                    <tr>
                                        <th class="d-none d-md-table-cell">Name</th>
                                        <th class="d-none d-xl-table-cell">Start</th>
                                        <th class="d-none d-xl-table-cell">End</th>
                                        <th>Showroom</th>
                                        <th>View</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($campaigns as $item)
                                    <tr>
                                        <td class="d-none d-md-table-cell">{{$item->camp_name}}</td>
                                        <td class="d-none d-md-table-cell">{{$item->from}}</td>
                                        <td class="d-none d-md-table-cell">{{$item->to}}</td>
                                        @php
                                            $shops = App\Shop::where('id', $item->shop_id)->get();
                                        @endphp
                                        <td>
                                        @foreach ($shops as $tm)
                                            <span class="badge bg-success">{{$tm->shop_name}}</span>
                                        @endforeach
                                        </td>
                                        <td><a href="{{route('author.campaign.adminviews', $item->camp_number)}}"><i style="color: #000000;" class="fa-solid fa-eye"></i></a></td>
                                        <td>
                                            <form action="{{route('admin.campaign.delete', $item->id)}}" method="post">
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
