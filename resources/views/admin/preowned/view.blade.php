@extends('admin.master')

@section('content')
	<main class="content">
        <div class="container-fluid p-0">
            <h1 class="h3 mb-3"><strong>Product</strong> <a href="{{route('product.newPro')}}" class="btn btn-outline-success"><i class="fa-solid fa-plus"></i> Add Product</a></h1>
            <div class="row">


                <div class="col-xl-6 col-xxl-7">
                    <div class="card flex-fill w-100">

                        <div class="card-body">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th class="d-none d-xl-table-cell">Start Date</th>
                                        <th class="d-none d-xl-table-cell">End Date</th>
                                        <th>Status</th>
                                        <th class="d-none d-md-table-cell">Assignee</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <a href="http://">
                                    <tr>
                                        <td>Project Fireball</td>
                                        <td class="d-none d-xl-table-cell">01/01/2021</td>
                                        <td class="d-none d-xl-table-cell">31/06/2021</td>
                                        <td><span class="badge bg-danger">Cancelled</span></td>
                                        <td class="d-none d-md-table-cell">William Harris</td>
                                    </tr>
                                </a>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-xxl-5 d-flex">
                    <div class="w-100">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">

                                                <form action="">
                                                    <input class="form-control" type="text" name="" placeholder="Add Category">
                                                </form>

                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">

                                        Project Fireball

                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">

                                                <form action="">
                                                    <input class="form-control" type="text" name="" placeholder="Add Sub-Category">
                                                </form>

                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">

                                        Project Fireball

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>
@endsection
