@extends('layouts.app')

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

.text-block {
  position: absolute;
  top: 50%;
  left: 70%;
  transform: translate(-50%, -50%);
  background-color: #ffffff;
  padding: 10px 10px 10px 10px;
  right: 16px;
}

</style>
@endsection
@section('content')


    <!-- ======= Hero Section ======= -->


    <section id="hero" class="d-flex align-items-center">


        <img src="{{asset('public/bg.jpg')}}" style="width: 100%;" alt="" srcset="">

        <div class="text-block" style="background: rgba(238, 250, 237, 0.9);">

                    <div class="container">
                        <div class="row">
                            <p>
                                {{-- <h3>
                                    Welcome to <img src="{{ asset('logo.jpeg')}}" alt="" style="width:100px; height:70px;">
                                </h3> --}}
                                <p style="color: #ffffff;">
                                    <a style="color: #000;" href="#contact">   Quick Piano Search Assistant  <i class="fa-solid fa-arrow-right"></i></a><br>
                                </p>
                                <form action="" method="POST">
                                    @csrf

                                        <input style="background: rgba(253, 253, 253, 0.9);" type="text" class="form-control" placeholder=" Contact Us Directly">


                                </form>
                      </p>

                    <hr>
                    <h5> More Services </h5>
                    <hr>
                    <div class="container text-center">
                        <div class="row text-center">
                            <div class="col-md-3 text-center"><a class=" text-center" style="color: #000;" href="#services"><img src="https://uxwing.com/wp-content/themes/uxwing/download/e-commerce-currency-shopping/store-icon.png" style="height: 40px; width:50px;"  alt="" srcset=""><br>Showroom</a></div>
                            {{-- <div class="col-md-3"><a style="color: #000;" href="#services"><i style="color: #000;" class="fa-solid fa-shop fa-2x"></i></a></div> --}}
                            {{-- <div class="col-md-3"><a style="color: #000;" href=""><img src="http://cdn.onlinewebfonts.com/svg/img_453179.png" style="height: 30px; width:50px;" alt="" srcset=""></a></div> --}}
                            <div class="col-md-3"><a style="color: #000;" href="#more-services"><img src="https://static.thenounproject.com/png/99494-200.png" style="height: 40px; width:50px;" alt="" srcset=""><br>Services</a></div>
                            {{-- <div class="col-md-3"><a style="color: #000;" href="#more-services"><i style="color: #000;" class="fa-solid fa-screwdriver-wrench fa-2x"></i><br>Service</a></div> --}}
                            {{-- <div class="col-md-3"><a style="color: #000;" href="#portfolio"><i style="color: #000;" class="fa-solid fa-piano"></i><br>Piano</a></div> --}}
                            <div class="col-md-3"><a style="color: #000;" href="#portfolio"><img src="http://cdn.onlinewebfonts.com/svg/img_445312.png" alt="" style="height: 40px; width:50px;" srcset=""><br>Piano</a></div>
                            <div class="col-md-3"><a style="color: #000;" href="tel:877977PIANO"><img src="https://w7.pngwing.com/pngs/376/939/png-transparent-computer-icons-scalable-graphics-contact-icon-cdr-text-black-thumbnail.png" alt="" style="height: 40px; width:50px;" srcset=""><br>Contact Us</a></div>
                        </div>
                    </div>

                    </div>
                    </div>
                    </div>


            </div>

    </section>
    <!-- End Hero -->

  <!-- End Hero -->

  <main id="main">
    <hr>
   <!-- ======= Clients Section ======= -->
   <section id="clients" class="clients clients">
    {{-- <div class="container"> --}}
      {{-- <div class="row">

        <div class="col-lg-2 col-md-4 col-6"> --}}
          <img src="{{asset('public/1050.jpg')}}" class="img-fluid" style="width: 100%; height:250px;">
        {{-- </div>

      </div> --}}
    {{-- </div> --}}
  </section>
  <!-- End Clients Section -->

<hr>
        <!-- ======= More Services Section ======= -->
        <section id="services" class="more-services">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Our Showrooms</h2>
                </div>

              <div class="row">

                @foreach (App\Shop::paginate(6) as $shop)

                <div class="col-md-4 d-flex align-items-stretch mt-4">
                  <div class="card" style='background-image: url("public/shop/image/{{$shop->shop_logo}}");' data-aos="fade-up" data-aos-delay="200">
                    <div class="card-body">
                      <h1 class="card-title"><a href="{{route('showroom', $shop->shop_number)}}">{{$shop->shop_name}}</a></h1>
                    </div>
                  </div>
                </div>

                @endforeach
              </div>

            </div>
          </section>

              <!-- ======= video ======= -->


       <div class="row">
           <div class="col-md-12 align-items-stretch">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe style="width:100%; height:500px;" src="https://player.vimeo.com/video/459909761?h=df68f7d28f" frameborder="0" allowfullscreen></iframe>
                   <!--<iframe src="https://vimeo.com/459909761" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                </div>
            </div>

            <div class="col-md-12 align-items-stretch text-center">
            <a href="{{url('player-piano')}}" class="btn btn-outline-primary">I Want This😩 </a>
            </div>
        </div>





    <!-- video -->



     <!-- ======= More Services Section ======= -->
    <section id="more-services" class="more-services">
      <div class="container" id="allone">
        <div class="section-title" data-aos="fade-up">
            <h2>We Provide</h2>
          </div>
        <div class="row">
          <div class="col-md-4 d-flex align-items-stretch">
            <div class="card" style='background-image: url("public/img/shop.jpeg");' data-aos="fade-up" data-aos-delay="100">
            <a href="{{url('shop-smart')}}">  <div class="card-body">
                <h1 class="card-title">Shop Smart</h1>
              </div>
              </a>
            </div>
          </div>
          <div class="col-md-4 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="card" style='background-image: url("public/img/004.jpg");' data-aos="fade-up" data-aos-delay="200">
              <a href="{{url('player-piano')}}"><div class="card-body">
                <h1 class="card-title">Player Piano</h1>
              </div></a>
            </div>

          </div>
          <div class="col-md-4 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="card" style='background-image: url("public/img/advance.png");' data-aos="fade-up" data-aos-delay="100">
             <a href="{{url('cutting-edge-technology')}}"> <div class="card-body">
                <h1 class="card-title">Cutting Edge Technology</h1>
              </div></a>
            </div>
          </div>
          <div class="col-md-4 d-flex align-items-stretch mt-4">

                <div class="card" style='background-image: url("public/img/005.jpg");' data-aos="fade-up" data-aos-delay="200">
              <a href="{{url('upgrade-my-piano')}}"><div class="card-body">
                <h1 class="card-title">Upgrade My Player System</h1>

              </div></a>
            </div>
          </div>
          <div class="col-md-4 d-flex align-items-stretch mt-4">
            <div class="card" style='background-image: url("public/img/111.jpeg");' data-aos="fade-up" data-aos-delay="200">
             <a href="{{url('consign-piano')}}"> <div class="card-body">
                <h1 class="card-title">Consign My Piano</h1>

              </div></a>
            </div>
          </div>
          <div class="col-md-4 d-flex align-items-stretch mt-4">
            <div class="card" style='background-image: url("public/img/003.jpg");' data-aos="fade-up" data-aos-delay="200">
              <a href="{{url('buy-my-piano')}}"><div class="card-body">
                <h1 class="card-title">Buy My Piano</h1>

              </div></a>
            </div>
          </div>

          <div class="col-md-6 d-flex align-items-stretch mt-4">
            <div class="card" style='background-image: url("public/img/002.jpg");' data-aos="fade-up" data-aos-delay="200">
              <a href="{{url('tune-my-piano')}}"><div class="card-body">
                <h1 class="card-title">Tune My Piano</h1>

              </div></a>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch mt-4">
            <div class="card" style='background-image: url("public/img/001.jpg");' data-aos="fade-up" data-aos-delay="200">
             <a href="{{url('move-my-piano')}}"> <div class="card-body">
               <h1 class="card-title">Move My Piano</h1>

              </div></a>
            </div>
          </div>

          <div class="col-md-6 d-flex align-items-stretch mt-4">
             <div class="card" style='background-image: url("public/img/006.jpg");' data-aos="fade-up" data-aos-delay="200">
             <a href="{{url('buy-my-piano')}}"> <div class="card-body">
                <h1 class="card-title">Restore My Piano</h1>

              </div></a>
            </div>
          </div>

          <div class="col-md-6 d-flex align-items-stretch mt-4">
            <div class="card" style='background-image: url("public/img/piano.png");' data-aos="fade-up" data-aos-delay="200">
              <a href="{{url('virtual-piano-appointment')}}"><div class="card-body">
                <h1 class="card-title">Virtual Piano Appointment</h1>

              </div></a>
            </div>
          </div>


          <div class="col-md-4 d-flex align-items-stretch mt-4">
            <div class="card" style='background-image: url("public/img/030.jpg");' data-aos="fade-up" data-aos-delay="200">
             <a href="{{url('concert-piano-rental')}}"> <div class="card-body">
                <h1 class="card-title">Concert Piano Rental</h1>

              </div></a>
            </div>
          </div>

          <div class="col-md-4 d-flex align-items-stretch mt-4">
            <div class="card" style='background-image: url("public/img/555.jpg");' data-aos="fade-up" data-aos-delay="200">
           <a href="{{url('store-my-piano')}}">   <div class="card-body">
                <h1 class="card-title">Store My Piano</h1>

              </div></a>
            </div>
          </div>

          <div class="col-md-4 d-flex align-items-stretch mt-4">
            <div class="card" style='background-image: url("public/img/444.jpg");' data-aos="fade-up" data-aos-delay="200">
             <a href="{{url('donate-my-piano')}}"> <div class="card-body">
                <h1 class="card-title">Donate My Piano</h1>

              </div></a>
            </div>
          </div>

          <div class="col-md-4 d-flex align-items-stretch mt-4" id="#affiliate">
            <div class="card" style='background-image: url("public/img/875.jpg");' data-aos="fade-up" data-aos-delay="200">
                <a href="{{url('teacher-refferal-network')}}">
                <div class="card-body">
                <h1 class="card-title">Teacher Refferal Network</h1>
                {{-- <p class="card-text">Nostrum eum sed et autem dolorum perspiciatis. Magni porro quisquam laudantium voluptatem.</p> --}}

              </div>
            </a>
            </div>
          </div>

          <div class="col-md-4 d-flex align-items-stretch mt-4">
            <div class="card" style='background-image: url("public/img/676.jpg");' data-aos="fade-up" data-aos-delay="200">
                <a href="{{url('schools-house-worship')}}"><div class="card-body">
                <h1 class="card-title">Schools and House of Worship</h1>
                {{-- <p class="card-text">Nostrum eum sed et autem dolorum perspiciatis. Magni porro quisquam laudantium voluptatem.</p> --}}

              </div></a>
            </div>
          </div>

          <div class="col-md-4 d-flex align-items-stretch mt-4">
            <div class="card" style='background-image: url("public/img/656.jpg");' data-aos="fade-up" data-aos-delay="200">
                <a href="{{url('designer-broker-network')}}"> <div class="card-body">
                <h1 class="card-title">Designer Broker Network</h1>
                {{-- <p class="card-text">Nostrum eum sed et autem dolorum perspiciatis. Magni porro quisquam laudantium voluptatem.</p> --}}

              </div></a>
            </div>
          </div>

        </div>

      </div>
    </section>

    <!-- End More Services Section -->







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

              @foreach (App\Product::paginate(6) as $products)

              <div class="col-lg-4 col-md-6 portfolio-item {{$products->category}}">
                <a href="{{route('piano.product',$products->name)}}">
                <div class="portfolio-wrap">
                  <img src="{{asset('public/product/image')}}/{{$products->photo}}" style="height:500px; width:500px;" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <a href="{{route('piano.product',$products->name)}}"><h4>{{$products->name}}</h4></a>
                    <p>{{$products->type}}</p>
                    <p>{{$products->price}}</p>
                    <p>{{$products->discount  }}</p>
                    <div class="portfolio-links">
                      <a href="{{asset('public/product/image')}}/{{$products->photo}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="{{$products->name}}"></a>
                      <a href="{{route('piano.product',$products->product_id)}}" class="btn btn-outline-primary" title="More Details">Order Now</a>
                    </div>
                  </div>
                </div>
                </a>
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
              @endif
          </div>
              </p>
              <form action="{{route('public-form-nonimg')}}" method="post">
                @csrf
              <div class="row">
                <div class="col-md-3 form-group mt-3 mt-md-0">
                  <input type="text" name="f_name" class="form-control" id="f_name" placeholder="First Name" required>
                </div>

                <div class="col-md-3 form-group mt-3 mt-md-0">
                  <input type="text" name="l_name" class="form-control" id="l_name" placeholder="Last Name" required>
                </div>

                <div class="col-md-3 form-group mt-3 mt-md-0">
                  <input type="phone" class="form-control" name="phone" placeholder="Your Phone (Optional)">
                </div>

                <div class="col-md-3 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>

              </div>


            <div class="row">


               <div class="col-md-3 form-group mt-3">
                <input type="text" class="form-control" name="zip" placeholder="Zip Code">
              </div>

              <div class="col-md-9 form-group mt-3">
                <input type="text" class="form-control" name="address" placeholder="Full Address (Optional)">
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
                <textarea class="form-control" name="details" rows="5" placeholder="Please add any additional 'KEY 🎹' Information or Details "></textarea>
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


@endsection
