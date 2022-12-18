@extends('layouts.app')

@section('content')
	<main class="main py-2">
        <div class="container py-5">
            <h1 class="h3 mb-3"><strong>Update</strong> </h1>
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
                @foreach ($sites as $item)

                    <div class="card flex-fill w-100">
                    <form action="{{route('site.update', $item->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <label class="form-label">Title</label>
                                    <input type="text" name="title" value="{{$item->title}}" class="form-control">
                                  </div>
                                  <div class="col-md-8">
                                    <label class="form-label">Header</label>
                                    <input type="text" name="header" value="{{$item->header}}" class="form-control">
                                  </div>
                            </div>



                            <div class="row">
                                <div class="col-md-4">
                                    <label class="form-label">Campaign Photo</label>
                                    <input type="file" name="cover" class="form-control">
                                    <br>
                                    <img src="{{asset('public/site/image')}}/{{$item->cover}}" style="height:100px; width:100px;" >
                                  </div>
                                  <div class="col-md-8">
                                    <label class="form-label">Video Link</label>
                                    <input type="text" name="video_link" value="{{$item->video_link}}" class="form-control">
                                  </div>
                        </div>
                        </div>
                        </div>

                                    <button style="float: right;" type="submit" class="btn btn-outline-success btn-lg btn-block">Save</button>
                                </div>
                            </div>
                    </div>
                </div>
                </div>

        </form>
        @endforeach
    </main>
@endsection
