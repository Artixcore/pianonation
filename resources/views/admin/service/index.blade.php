@extends('admin.master')

@section('content')
<main class="content">
   <div class="container-fluid p-0">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{route('service.new')}}" class="btn btn-outline-success">New Service</a>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Photo</th>
                            <th scope="col">Details</th>
                            <th scope="col">View</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach (App\Service::all() as $service)

                          <tr>
                            <th scope="row">{{$service->ser_num}}</th>
                            <th scope="row">{{$service->ser_name}}</th>
                            <th scope="row">  <img src="{{asset('public/service/image')}}/{{$service->ser_photo}}" style="width: 150px; height:150px;"> </th>
                            <th scope="row">{{$service->ser_details}}</th>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td>
                                <form action="{{ route('service.delete', $service->id) }}" method="post">
                                    {{-- @endforeach --}}
                                        @method('post')
                                        @csrf
                                    <button type="submit" class="btn btn-outline-danger" onclick="return myFunction();"><i class="fa fa-trash"></i></button>
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
@section('footer_js')
<script>
    function myFunction() {
        if(!confirm("Confirm Delete?"))
        event.preventDefault();
    }
</script>
@endsection
