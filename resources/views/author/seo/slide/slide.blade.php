@extends('author.master')

@section('content')
	<main class="content">
        <div class="container-fluid p-0">
            <h1 class="h3 mb-3"><strong>Slide</strong>
            <small> <a href="{{route('author.slide.new')}}" class="btn btn-outline-success"><i class="fa-solid fa-plus"></i> Add New SEO</a> </small>
            </h1>
            <div class="row">



                <div class="col-xl-12 col-xxl-12">
                    <div class="card flex-fill w-100">

                        <div class="card-body">
                            <table class="table table-hover my-0">
                                <thead>
                                    <tr>
                                        <th class="d-none d-md-table-cell">Slide</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($slides as $item)
                                <tr>
                                    <td>
                                        <img src="{{asset('public/slide')}}/{{$item->slide}}" style="width: 250px; height:250px;" alt="" srcset="">
                                    </td>

                                    <td>
                                        <form action="{{route('author.slide.delete', $item->id)}}" method="post">
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
