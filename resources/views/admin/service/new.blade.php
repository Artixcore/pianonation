@extends('admin.master')

@section('content')
<main class="content">
   <div class="container-fluid p-0">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
            <form action="{{route('service.post')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="row">

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Photo</label>
                                <input type="file" class="form-control" name="ser_photo" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-md-6">

                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control" name="ser_name" placeholder="Name">
                            </div>
                        </div>
</div>
    <div class="mb-3">
                        <label class="form-label">Details</label>
                        <textarea class="form-control" name="ser_details"></textarea>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-outline-success">Save</button>
                </div>
            </form>
            </div>
        </div>

        <div class="col-md-4">

        </div>
    </div>
    </div>
</main>
@endsection
