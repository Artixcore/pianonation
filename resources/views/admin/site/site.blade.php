@extends('admin.master')

@section('content')
<main class="content">
   <div class="container-fluid p-0">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        New Address
                    </button>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Number</th>
                            <th scope="col">Email</th>
                            <th scope="col">Address</th>

                            <th scope="col">Delete</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach (App\Address::all() as $address)

                          <tr>
                            <th scope="row">{{$address->ad_num}}</th>
                            <th scope="row">{{$address->ad_num}}</th>
                            <th scope="row">{{$address->ad_number}}</th>
                            <th scope="row">{{$address->ad_address}}</th>

                            <td>
                                <form action="{{ route('address.delete', $address->id) }}" method="post">
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

        <div class="col-md-12 py-4">
            <div class="card">
                <div class="card-header">
                    <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#icon">
                        New iCon
                    </button>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Icon</th>
                            <th scope="col">Link</th>
                            <th scope="col">Delete</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach (App\Social::all() as $social)

                          <tr>
                            <th scope="row">{{$social->social_name}}</th>
                            <th scope="row">{!!$social->social_icon!!}</th>
                            <th scope="row">{{$social->link}}</th>
                            <td>
                                <form action="{{ route('icon.delete', $social->id) }}" method="post">
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


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Address</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <form action="{{route('admin.new')}}" method="POST">
            @csrf
        <div class="modal-body">
            <div class="mb-3">
                <label class="form-label">Number</label>
                <input type="phone" class="form-control" name="ad_number" placeholder="Number">
            </div>

            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" name="ad_email" placeholder="Email">
            </div>

            <div class="mb-3">
                <label class="form-label">Full Address</label>
                <textarea class="form-control" rows="3" name="ad_address" placeholder="Full Address"></textarea>
            </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-outline-primary">Save</button>
        </div>
    </form>
      </div>
    </div>
  </div>



  <!-- Modal -->
<div class="modal fade" id="icon" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Social Icon</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <form action="{{route('icon.new')}}" method="POST">
            @csrf
        <div class="modal-body">
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="phone" class="form-control" name="social_name" placeholder="Number">
            </div>

            <div class="mb-3">
                <label class="form-label">Icon</label>
                <input type="text" class="form-control" name="social_icon" placeholder="Copy from Font Awesome icon 6.1">
            </div>

            <div class="mb-3">
                <label class="form-label">Link</label>
                <input type="text" class="form-control" name="link" placeholder="Copy link of your social page">
            </div>

        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-outline-primary">Save</button>
        </div>
    </form>
      </div>
    </div>
  </div>
@endsection
@section('footer_js')
<script>
    function myFunction() {
        if(!confirm("Confirm Delete?"))
        event.preventDefault();
    }
</script>
@endsection
