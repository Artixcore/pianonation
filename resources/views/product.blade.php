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

                      <select name="" class="form-control">
                        <option selected>Select Piano Type</option>

                      </select>

                      <select name="" class="form-control">
                        <option selected>Select Piano Status</option>

                      </select>

                      <select name="" class="form-control">
                        <option selected>Select Price</option>

                      </select>
                      <input type="submit" value="Search" class="btn btn-outline-primary">
                  </div>
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

                {{-- @php
                $iamgews = App\ProImage::where('product_id', $item->product_id)->get();
                @endphp

            @foreach ($iamgews as $itm)
                <div class="swiper-slide">
                  <img src="{{asset('public/product/image')}}/{{$itm->photo}}" style="heightt:100%; width:100%;" alt="">
                </div>
            @endforeach --}}
            <div class="swiper-slide">
                <img src="{{asset('public/product/image')}}/{{$item->photo}}" style="heightt:100%; width:100%;" alt="">
              </div>
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
