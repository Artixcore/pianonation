
@extends('layouts.app')
@section('meta')
<title>Services</title>
@endsection
@section('content')

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-4 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">We have all kinds of Piano services!</h1>
          {{-- <h2 data-aos="fade-up" data-aos-delay="400"> Visit Our Grand Rapids Or Wixom Piano Showrooms! The Nationwide Piano Store Based In Michigan, We Are PianoNation!</h2> --}}
          <a href="#contact" class="btn btn-outline-success">Contact Us</a>
        </div>



        <div class="col-lg-8 order-1 order-lg-2 hero-img">
          <iframe width="100%" height="450px;" src="http://storage.cloud.google.com/bestpiano/welcome.mp4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write;   gyroscope; picture-in-picture"></iframe>
        </div>
      </div>
    </div>

  </section>
  <!-- End Hero -->

  <main id="main">

    @foreach (App\Service::all() as $service)

        <!-- ======= About Us Section ======= -->
        <section id="services" class="about">
            <div class="container">

              <div class="section-title" data-aos="fade-up">
                <h2>{{$service->ser_name}}</h2>
              </div>

              <div class="row content">
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="150">
                 <img class="img-fluid animated" src="{{asset('public/service/image')}}/{{$service->ser_photo}}" alt="" srcset="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="300">
                    <p>
                    <h3>{{$service->ser_details}}</h3>
                    </p>

                </div>
              </div>

            </div>

          </section>


          @endforeach


    <!-- ======= Contact Section ======= -->
        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact" style="text-align: center;">
            <div class="container">



              <div class="row">

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                  <div class="contact-about"  style="text-align: center;">
                    <h3>PianoNation</h3>
                  </div>

                </div>


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
                        <input type="text" name="f_name" class="form-control" id="f_name" placeholder="First Name" required>
                      </div> <input type="hidden" name="lead_name" value="Move My Piano">

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

    <!-- End Contact Section -->

  </main><!-- End #main -->


@endsection

