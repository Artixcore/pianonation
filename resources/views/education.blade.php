
@extends('layouts.app')
@section('meta')
<title>Education</title>
@endsection
@section('content')

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-5 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">We have best Piano Teachers!</h1>
          {{-- <h2 data-aos="fade-up" data-aos-delay="400"> Visit Our Grand Rapids Or Wixom Piano Showrooms! The Nationwide Piano Store Based In Michigan, We Are PianoNation!</h2> --}}
          <a href="#contact" class="btn btn-outline-primary">Contact Us</a>
        </div>

        <div class="col-lg-7 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
            <iframe width="100%" height="450px;" src="https://storage.cloud.google.com/bestpiano/welcome.mp4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container">

              <div class="section-title" data-aos="fade-up">
                <h2>Education</h2>
              </div>

              <div class="row content">
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="150">
                    <div class="card">
                        <img src="{{asset('ed.jpg')}}" class="img-fluid animated" alt="">
                        <div class="card-body">

                            <h1 class="card-title"><a href="">Our Inistitute</a></h1>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="300">
                    <div class="card">
                        <img src="{{asset('eds.jpg')}}" class="img-fluid animated" alt="">
                        <div class="card-body">

                            <h1 class="card-title"><a href="">Music Teacher</a></h1>
                        </div>
                    </div>
                </div>
              </div>

            </div>

          </section>

          <!-- End About Us Section -->




    <!-- ======= Contact Section ======= -->
    @include('contact')
    <!-- End Contact Section -->

  </main><!-- End #main -->


@endsection

