@extends('admin.master')

@section('content')
@foreach ($seos as $item)


<main class="content">
    <div class="container-fluid p-0">
        <h1 class="h3 mb-3"><strong>SEO</strong> </h1>
        <div class="row">
            <div class="col-md-12">

            </div>
            <div class="col-md-12">
                <div class="w-100">
                <div class="row">

                    <div class="card flex-fill w-100">

                        <div class="card-body">
                            <div class="row">
                                <label class="form-label">Name</label>
                                <p><b> {{ $item->name }} </b></p>
                            </div>
                        </div>
                    </div>


                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <label class="form-label">Meta Tag</label>
                                <p><b>{{$item->seo_meta}}</b></p>
                            </div>
                        </div>
                    </div>


                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <label class="form-label">SEO Script</label>
                                <p><b>{{$item->seo_script}}</b></p>

                            </div>
                        </div>
                    </div>



                        </div>
                    </div>
                </div>

            </main>


            @endforeach
            @endsection
