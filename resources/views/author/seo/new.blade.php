@extends('author.master')

@section('content')
	<main class="content">
        <div class="container-fluid p-0">
            <h1 class="h3 mb-3"><strong>Add Lead</strong> </h1>
            <div class="row">
            <div class="col-md-12">
            @if(session()->has('message'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong> {{ session()->get('message') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
            @endif
            </div>
            <div class="col-md-12">
                <div class="w-100">
                <div class="row">

                    <div class="card flex-fill w-100">
                    <form action="{{route('admin.seo.save')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                    <label class="form-label">Name</label>
                                    <input type="text" name="name" class="form-control">
                            </div>
                        </div>
                        </div>


                        <div class="card">
                        <div class="card-body">
                            <div class="row">
                                    <label class="form-label">Meta Tag</label>
                                    <input type="text" name="seo_meta" class="form-control">
                        </div>
                        </div>
                        </div>


                        <div class="card">
                            <div class="card-body">
                            <div class="row">
                                <label class="form-label">SEO Script</label>
                               <textarea name="seo_script" class="form-control"></textarea>

                            </div>
                            </div>
                            </div>



                            <div class="card">
                                <div class="card-body">
                                    <button style="float: right;" type="submit" class="btn btn-outline-success btn-lg btn-block">Save</button>
                                </div>
                            </div>
                    </div>
                </div>
                </div>






        </form>
    </main>
@endsection
