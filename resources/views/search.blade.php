@extends('layouts.app')

@section('meta')
<title>Product List</title>
@endsection
@section('content')


  <!-- ======= Hero Section ======= -->

  <main id="main" class="py-3">



    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Piano</h2>
              <div class="card">
        <div class="card-body">
           <form action="">
            <div class="input-group">
                <input type="text" class="form-control" aria-label="Text input with segmented dropdown button">
                <div class="input-group-append">
                  <button type="button" class="btn btn-outline-secondary">Action</button>
                  <button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <div role="separator" class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Separated link</a>
                  </div>
                </div>
              </div>
                  <select name="" class="form-control">
                    <option selected>Select Price</option>
                    <option value="">500 - 2,000</option>
                    <option value="">300 - 5,400</option>
                    <option value="">5,500 - 9,900</option>
                    <option value="">10,000+</option>
                    <option value="">20,000+</option>
                    <option value="">30,000+</option>
                    <option value="">50,000+</option>
                    <option value="">80,000+</option>

                  </select>

                    <input type="submit" value="Search" class="btn btn-outline-primary">
                </form>
            </div>
        </div>
        </div>
        </div>
        <div class="container">
        <div class="row">

            @foreach ($search as $item)

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="400">
              <div class="member-img">

               <img src="{{asset('public/product/image')}}/{{$item->photo}}" style="height:380px;" class="img-fluid" alt="">

              </div>

              <div class="member-info">
                <h4> <a href="{{route('piano.product', $item->name)}}" class="btn btn-outline-primary"> {{$item->name}} </a></h4>

              </div>

            </div>
          </div>
          @endforeach
        </div>
        </div>

      </div>
    </section><!-- End Team Section -->





  </main><!-- End #main -->































@endsection
