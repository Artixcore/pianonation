@extends('layouts.app')
@foreach ($showroom as $shop)
@php
    $products = App\Products::where('shop_name', $shop->shop_name)->get();
@endphp
@section('meta')
<title>{{$shop->shop_name}}</title>

@endsection
@section('style_css')
<style>

.accordion {
  padding: 1.2rem 0;
  border-radius: 1rem;
  background: white;
  box-shadow: 0 0 1rem lightgrey;
}

.accordion__heading {
  margin-bottom: 1rem;
  padding: 0 1.4rem;
}

.accordion__item:not(:last-child) {
  border-bottom: 1px solid lightgrey;
}

.accordion__btn {
  display: flex;
  justify-content: space-between;
  align-items: center;
  width: 100%;
  padding: 1.2rem 1.4rem;
  background: white;
  border: none;
  outline: none;
  color: var(--color-text);
  font-size: 1.2rem;
  text-align: left;
  cursor: pointer;
  transition: 0.1s;
}
.accordion__btn:hover {
  color: var(--color-purple);
  background: hsl(248, 53%, 97%);
}

.accordion__item--active .accordion__btn {
  color: var(--color-purple);
  border-bottom: 2px solid var(--color-purple);
  background: hsl(248, 53%, 97%);
}

.fa-lightbulb {
  padding-right: 1rem;
}
.accordion__icon {
  border-radius: 50%;
  transform: rotate(0deg);
  transition: 0.3s ease-in-out;
  opacity: 0.9;
}
.accordion__item--active .accordion__icon {
  transform: rotate(135deg);
}

.accordion__content {
  font-weight: 300;
  max-height: 0;
  opacity: 0;
  overflow: hidden;
  color: var(--color-text-muted);
  transform: translateX(16px);
  transition: max-height 0.5s ease, opacity 0.5s, transform 0.5s;
}
.accordion__content p {
  padding: 1rem 1.8rem;
}

.accordion__item--active .accordion__content {
  opacity: 1;
  transform: translateX(0px);
  max-height: 100vh;
}

a:hover{
  font-size: 24px;
}
</style>
@endsection
@section('content')

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center w-100">

    <div class="container">
      <div class="row">
        <div class="col-lg-4 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">{{ $shop->shop_name }}!</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">

               Where we provide all your piano needs nationwide!
            </h2>
               <br/>
          <a href="#portfolio" class="btn btn-outline-primary">Our Inventory </a>
        </div>

        <div class="col-lg-8 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
          <img src="{{asset('public/shop/image')}}/{{$shop->shop_logo}}" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">
    {{-- @php
        $piclo = App\Campaign::where('shop_id', $shop->shop_id)->get();
    @endphp
    <br>
    @foreach ($piclo as $itrem)
    <img src="{{asset('public/campaign/image')}}/{{itrem->camp_image}}" style="width: 100%; height:40%;" alt="">
    @endforeach
    <br> --}}

      <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            @php
            $slides = App\Slide_Shop::where('shop_number', $shop->shop_number)->get();
            @endphp
            @foreach($slides as $slide)
            <div class="carousel-item">
            <img src="{{asset('public/slide')}}/{{$slide->slide}}" class="d-block w-100" alt="...">
            </div>
            @endforeach

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>

        <div class="row">
            <div class="col-md-12 align-items-stretch">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe  width="100%" height="500"  title="vimeo-player" src="https://player.vimeo.com/video/459909761?h=df68f7d28f" frameborder="0" allowfullscreen></iframe>
                   <!--<iframe src="https://vimeo.com/459909761" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                </div>
            </div>

            <div class="col-md-12 align-items-stretch text-center">
            <a href="{{url('player-piano')}}" class="btn btn-outline-primary">I Want This 😭 </a>
            </div>
        </div>





    <!-- video -->


      <!-- ======= Portfolio Section ======= -->
      <section id="portfolio" class="portfolio">
        <div class="container">

          <div class="section-title" data-aos="fade-up">
            <h2>Browse Our Selection</h2>
          </div>

          <div class="section-title" data-aos="fade-up">
            <a href="{{url('piano/product')}}" class="btn btn-outline-primary"> New Piano </a>
            <a href="{{url('piano/product')}}" class="btn btn-outline-primary"> Pre-Owned Pianos </a>
            <a href="{{route('piano.brand')}}" class="btn btn-outline-primary"> Steinway </a>
          </div>

          <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="400">

            @foreach ($products as $product)

            <div class="col-lg-4 col-md-6 portfolio-item {{$product->category}}">
              <div class="portfolio-wrap">
                <img src="{{asset('public/product/image')}}/{{$product->photo}}" style="height:300px; width:400px;" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>{{$product->name}}</h4>
                  <p>{{$product->type}}</p>
                  <div class="portfolio-links">
                    <a href="{{asset('public/product/image')}}/{{$product->photo}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="{{$product->name}}"><i class="bx bx-plus"></i></a>
                    <a href="{{route('piano.product',$product->name)}}" class="btn btn-outline-primary" title="More Details"> Order Now </a>
                  </div>
                </div>
              </div>
            </div>

            @endforeach

          </div>

        </div>
      </section>
      <!-- End Portfolio Section -->



    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact" style="text-align: center;">
        <div class="container">



          <div class="row">

                <div class="col-lg-12 col-md-12" style="text-align: center;" data-aos="fade-up" data-aos-delay="300">
                <label><h1>Quick Piano Search Asistance</h1></label>
                <p>
                  @if(session()->has('message'))
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                      <strong> {{ session()->get('message') }}</strong>
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
              </div>
              @endif
                </p>
              <form action="{{route('public-form-nonimg')}}" method="post">

                  @csrf
                <div class="row">
                  <div class="col-md-3 form-group mt-3 mt-md-0">
                    <input type="text" name="f_name" class="form-control" id="name" placeholder="First Name" required>
                  </div>

                  <div class="col-md-3 form-group mt-3 mt-md-0">
                    <input type="text" name="l_name" class="form-control" id="name" placeholder="Last Name" required>
                  </div>

                  <div class="col-md-3 form-group mt-3 mt-md-0">
                    <input type="phone" class="form-control" name="phone" id="email" placeholder="Your Phone (Optional)">
                  </div>

                  <div class="col-md-3 form-group mt-3 mt-md-0">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                  </div>

                </div>


              <div class="row">


                 <div class="col-md-3 form-group mt-3">

                  <input type="text" class="form-control" name="zip" id="subject" placeholder="Zip Code">
                </div>

                <div class="col-md-9 form-group mt-3">

                  <input type="text" class="form-control" name="address" id="subject" placeholder="Full Address (Optional)">
                </div>

                <div class="form-group mt-3">
                  <label for=""><b>Type of Piano:</b></label><br/>
                  <input type="checkbox" name="piano_type" value="Grand Piano"><label for="vehicle1">&nbsp; Grand Piano</label>&nbsp;&nbsp;&nbsp;
                  <input type="checkbox" name="piano_type" value="Baby Grand Piano"><label for="vehicle1">&nbsp; Baby Grand Piano</label>&nbsp;&nbsp;&nbsp;
                  <input type="checkbox" name="piano_type" value="Upright Piano"><label for="vehicle1">&nbsp; Upright Piano</label>&nbsp;&nbsp;&nbsp;
                  <input type="checkbox" name="piano_type" value="Digital Piano"><label for="vehicle1">&nbsp; Digital Piano</label>&nbsp;&nbsp;&nbsp;
                  <input type="checkbox" name="piano_type" value="Player Piano"><label for="vehicle1">&nbsp; Player Piano</label>&nbsp;&nbsp;&nbsp;

                </div>

                <div class="form-group mt-3">
                  <label for=""><b>Level of Piano:</b></label><br/>
                  <input type="checkbox" name="brand" value="Handcrafted Concert Artist Pianos (Expert Level)"><label for="vehicle1">&nbsp; Handcrafted Concert Artist Pianos (Expert Level)</label>&nbsp;&nbsp;&nbsp;
                  <input type="checkbox" name="brand" value="Quality Budget Pianos (Beginners-mid Level)"><label for="vehicle1">&nbsp; Quality Budget Pianos (Beginners-mid Level)</label>&nbsp;&nbsp;&nbsp;
                  <input type="checkbox" name="brand" value="Trusted Name Brands (Mid-Professional Level)"><label for="vehicle1">&nbsp; Trusted Name Brands (Mid-Professional Level)</label>&nbsp;&nbsp;&nbsp;
                  <br/>
                  <br/>

                </div>

                <div class="form-group mt-3">
                    <div class="row">
                    <div class="col-md-6">
                       <input type="text" name="brand" class="form-control" placeholder="Specific Brands">
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="price_range" class="form-control" placeholder="Price Range">
                    </div>
                      </div>
                  </div>

                <div class="form-group mt-3">
                  <textarea class="form-control" name="details" rows="5" placeholder="Please add any additional 'KEY ðŸŽ¹' Information or Details "></textarea>
                </div>

              </div>
              <div class="py-3 mt-3">
                <div class="text-center">
                    <button class="btn btn-outline-primary" type="submit">Submit</button>
                  </div>
              </div>
              </form>
            </div>

          </div>

        </div>
      </section>
      <!-- End Contact Section -->



  </main><!-- End #main -->

  @endforeach
@endsection

