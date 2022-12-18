@extends('admin.master')

@section('content')
	<main class="content">
        <div class="container-fluid p-0">
            <h1 class="h3 mb-3"><strong>Orders</strong>
            </h1>
            <div class="row">



                <div class="col-xl-12 col-xxl-12">
                    <div class="card flex-fill w-100">

                        <div class="card-body">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th class="d-none d-xl-table-cell">Contact</th>

                                        <th class="d-none d-xl-table-cell">Product</th>

                                        <th>Timeframe</th>
                                        <th class="d-none d-md-table-cell">Booked At</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($orders as $task)

                                <tr>
                                    <td>{{$task->f_name}} {{$task->l_name}}</td>
                                    <td class="d-none d-xl-table-cell">{{$task->contact}}</td>

                                    <td class="d-none d-xl-table-cell">
                                        @php
                                            $pianos = App\Products::where('id', $task->piano_id)->get()
                                        @endphp
                                       @foreach ($pianos as $item)
                                           {{ $item->name }}
                                       @endforeach
                                    </td>

                                    <td>{{$task->timeframe}}</td>
                                    <td class="d-none d-md-table-cell">{{$task->created_at->diffForHumans()}}</td>
                                    <td class="d-none d-md-table-cell">
                                        <a href="{{route('product.orders.single', $task->book_number)}}" class="btn btn-outline-success">View</a>
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
