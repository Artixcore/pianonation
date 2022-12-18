
@extends('layouts.app')
@section('meta')
<title>Shop Smart Piano</title>
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
</style>
@endsection
@section('content')

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-4 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Shop Smart!</h1>
          <h2 data-aos="fade-up" data-aos-delay="400"> Are you new to the Piano shopping world? We made it simple by providing you a free download of the shopping smart guide. Knowledge is key when you start this process and we are happy to educate you in person or allow you to read some helpful tips now. See below👇🏽“!</h2>

        </div>


        <div class="col-lg-8 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
            <iframe width="100%" height="500" src="https://www.youtube.com/embed/FPL7KNJ-X5g" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">


    <!-- End Services Section -->
 <!-- ======= Contact Section ======= -->
 <section id="contact" class="contact" style="text-align: center;">
    <div class="container">



      <div class="row">



        <div class="col-lg-12 col-md-12" style="text-align: center;" data-aos="fade-up" data-aos-delay="300">
            <label><h1>Get your free Shop Smart guide here</h1></label>
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
          {{-- <form action="{{route('mail')}}" method="post"> --}}
              @csrf
            <div class="row">
              <div class="col-md-3 form-group mt-3 mt-md-0">
                <input type="text" name="f_name" class="form-control" id="name" placeholder="First Name" required>
              </div>

              <div class="col-md-3 form-group mt-3 mt-md-0">
                <input type="text" name="l_name" class="form-control" id="name" placeholder="Last Name" required>
              </div>

              <div class="col-md-3 form-group mt-3 mt-md-0">
                <input type="phone" class="form-control" name="phone" id="phone" placeholder="Your Phone">
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
              <input type="text" class="form-control" name="address" id="subject" placeholder="Full Address">
            </div>

            <div class="form-group mt-3">
                <label for=""><b>Piano Type:</b></label><br/>
                <input type="checkbox" name="piano_type" value="Grand Piano"><label for="vehicle1">&nbsp; Grand Piano</label>&nbsp;&nbsp;&nbsp;
                <input type="checkbox" name="piano_type" value="Baby Grand Piano"><label for="vehicle1">&nbsp; Baby Grand Piano</label>&nbsp;&nbsp;&nbsp;
                <input type="checkbox" name="piano_type" value="Upright Piano"><label for="vehicle1">&nbsp; Upright Piano</label>&nbsp;&nbsp;&nbsp;
                <input type="checkbox" name="piano_type" value="Digital Piano"><label for="vehicle1">&nbsp; Digital Piano</label>&nbsp;&nbsp;&nbsp;
                <input type="checkbox" name="piano_type" value="Player Piano"><label for="vehicle1">&nbsp; Player Piano</label>&nbsp;&nbsp;&nbsp;
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


@endsection












