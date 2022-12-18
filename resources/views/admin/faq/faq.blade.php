@extends('admin.master')

@section('content')
<main class="content">
   <div class="container-fluid p-0">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#faq">
                        New FAQ
                    </button>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Title</th>
                            <th scope="col">Details</th>
                            <th scope="col">Delete</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach (App\FAQ::all() as $faq)

                          <tr>
                            <th scope="row">{{$faq->title}}</th>
                            <th scope="row">{{$faq->details}}</th>
                            <td>
                                <form action="{{ route('faq.delete', $faq->id) }}" method="post">
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
<div class="modal fade" id="faq" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <form action="{{route('faq.save')}}" method="POST">
            @csrf
        <div class="modal-body">
            <div class="mb-3">
                <label class="form-label">Title</label>
                <input type="phone" class="form-control" name="title" placeholder="Title with Question Mark">
            </div>

            <div class="mb-3">
                <label class="form-label">Details</label>
                <input type="text" class="form-control" name="details" placeholder="short Details">
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
