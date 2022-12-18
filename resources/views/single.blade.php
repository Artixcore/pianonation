@extends('layouts.app')
<style>
    #ero {
    /* width: 100%; */
    height: 85vh;
    margin-top: 30px;
}
</style>
@section('meta')
<title>Product List</title>
@endsection
@section('content')
     <!-- ======= Breadcrumbs ======= -->
     <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

          <div class="d-flex justify-content-between align-items-center  py-3">
            <h2>Piano Details</h2>
            <ol>
              <li><a href="#">Home</a></li>
              <li>Details</li>
            </ol>
          </div>

        </div>
      </section>
      <!-- End Breadcrumbs -->

      @foreach ($products as $item)


      <!-- ======= Portfolio Details Section ======= -->
      <section id="portfolio-details" class="portfolio-details">
        <div class="container">

          <div class="row gy-4">

            <div class="col-lg-8">
              <div class="portfolio-details-slider swiper">
                <div class="swiper-wrapper align-items-center">

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

                  {{-- <div class="swiper-slide">
                    <img src="assets/img/portfolio/portfolio-details-2.jpg" alt="">
                  </div>

                  <div class="swiper-slide">
                    <img src="assets/img/portfolio/portfolio-details-3.jpg" alt="">
                  </div> --}}

                </div>
                <div class="swiper-pagination"></div>
              </div>
            </div>

            <div class="col-lg-4">
              <div class="portfolio-info">
                <h3>{{$item->name}}</h3>
                <ul>
                  <li><strong>Category</strong>: {{$item->category}}</li>
                  <li><strong>Shop Name</strong>: {{$item->shop_name}}</li>
                  <li><strong>Regular Price</strong>: {{ $item->price }} </li>
                  <li><strong>Special Price</strong>: {{ $item->discount }} </li>
                  <li><strong>Status</strong>: {{ $item->status }} </li>
                  <li><strong>Type</strong>: {{ $item->type }} </li>
                  <li> <a href="{{route('piano.product.pur', $item->name)}}" class="btn btn-outline-success">Order Now</a> </li>
                </ul>
              </div>
              <div class="portfolio-description">
                <h2>{{$item->short_desc}}</h2>
                <p>
                {{ $item->description }}
                </p>
              </div>
            </div>

          </div>

        </div>
    </section>

    <p></p>


    @endforeach
      <!-- End Portfolio Details Section -->
@endsection
