@extends('layouts.app')
@section('meta')
<title>Buy My Piano</title>
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
  <section id="hero" class="d-flex align-items-center py-4">

    <div class="container py-3">
      <div class="row">
        <div class="col-lg-4 pt-5 pt-lg-0 order-2 order-lg-1 py-3 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Virtual Piano Appointment</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">Here at PianoNation we strive to meet your needs in all ways. If visiting our showroom isn’t convenient? Then try our virtual tour. We can answer questions and guide you though your process for ease of shopping. Schedule your appointment below.</h2>
        </div>



        <div class="col-lg-8 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
          <img src="https://ignation.ca/wp-content/uploads/2018/08/pianokeyboardswirl.jpg" class="img-fluid animated" alt="">
          {{-- <img src="https://i.pinimg.com/originals/84/c4/28/84c4280f6236acbc78cac347c63ed89b.png" class="img-fluid animated" alt=""> --}}
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">









    <!-- ======= Services Section ======= -->
    {{-- <section id="services" class="services">
      <div class="container">



      </div>
    </section> --}}
    <!-- End Services Section -->



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
                <label><h1>Virtual Piano Appointment</h1></label>
                <p></p>
              <form action="#" method="post">
              <form action="{{route('public-form-nonimgapp_mail')}}" method="post">
                  @csrf
                <div class="row">
                  <div class="col-md-3 form-group mt-3 mt-md-0">
                    <input type="text" name="f_name" class="form-control" id="name" placeholder="First Name" required>
                  </div>

                  <div class="col-md-3 form-group mt-3 mt-md-0">
                    <input type="text" name="l_name" class="form-control" id="name" placeholder="Last Name" required>
                  </div>

                  <div class="col-md-3 form-group mt-3 mt-md-0">
                    <input type="phone" class="form-control" name="phone" id="email" placeholder="Your Phone">
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
                    <div class="row">

                        <div class="col-md-12">
                            <label for=""><b>Virtual Plaform:</b></label><br/>
                            <input type="checkbox" name="piano_type" value="Grand Piano"><label for="vehicle1">&nbsp; Facebook</label>&nbsp;&nbsp;&nbsp;
                            <input type="checkbox" name="piano_type" value="Grand Piano"><label for="vehicle1">&nbsp; Zoom</label>&nbsp;&nbsp;&nbsp;
                            <input type="checkbox" name="piano_type" value="Grand Piano"><label for="vehicle1">&nbsp; Google Meet</label>&nbsp;&nbsp;&nbsp;
                            <input type="checkbox" name="piano_type" value="Grand Piano"><label for="vehicle1">&nbsp; Other</label>&nbsp;&nbsp;&nbsp;

                        </div>

                      </div>
                  </div>

                 <div class="form-group mt-3">
                  <label for=""><b>Level of Piano:</b></label><br/>
                  <input type="checkbox" name="brand" value="Handcrafted Concert Artist Pianos (Expert Level)"><label for="vehicle1">&nbsp; Handcrafted Concert Artist Pianos (Expert Level)</label>&nbsp;&nbsp;&nbsp;
                  <input type="checkbox" name="brand" value="Quality Budget Pianos (Beginners-mid Level)"><label for="vehicle1">&nbsp; Quality Budget Pianos (Beginners-mid Level)</label>&nbsp;&nbsp;&nbsp;
                  <input type="checkbox" name="brand" value="Trusted Name Brands (Mid-Professional Level)"><label for="vehicle1">&nbsp; Trusted Name Brands (Mid-Professional Level)</label>&nbsp;&nbsp;&nbsp;
                  <br/>
                  <br/>
                   <div class="col-md-12 text-center">
                       <input type="text" name="brand" class="form-control" placeholder="Specific Brands of Interest">
                  </div>
                </div>

                <div class="form-group mt-3">
                  <!--<label for=""><b>Does The Current System Work?:</b></label><br/>-->
                  <!--<input type="checkbox" name="Yes" value="Yes"><label for="vehicle1">&nbsp; Yes</label>&nbsp;&nbsp;&nbsp;-->
                  <!--<input type="checkbox" name="No" value="no"><label for="vehicle1">&nbsp; No</label>&nbsp;&nbsp;&nbsp;-->
                  {{-- <input type="checkbox" name="brand" value="Trusted Name Brands (Mid-Professional Level)"><label for="vehicle1">&nbsp; Trusted Name Brands (Mid-Professional Level)</label>&nbsp;&nbsp;&nbsp; --}}

                </div>

                <div class="form-group mt-3">
                    <div class="row">


                        <label for=""><b>Best Timimg and Day for Appointment:</b></label><br/>

                        <p></p>
                        <div class="col-md-2">
                                <input type="checkbox" name="Yes" value="Yes"><label for="vehicle1">&nbsp; Mon</label>&nbsp;&nbsp;&nbsp;
                        </div>
                        <div class="col-md-3">
                            <input type="time" name="" class="form-control">
                        </div>
                        <div class="col-md-3">
                            <input type="time" name="" class="form-control">
                        </div>
                        <br/><br/>
                        <p></p>
                        <div class="col-md-2">
                                <input type="checkbox" name="Yes" value="Yes"><label for="vehicle1">&nbsp; Tues</label>&nbsp;&nbsp;&nbsp;
                        </div>
                        <div class="col-md-3">
                            <input type="time" name="" class="form-control">
                        </div>
                        <div class="col-md-3">
                            <input type="time" name="" class="form-control">
                        </div>
                        <br/><br/>
                        <p></p>
                        <div class="col-md-2">
                                <input type="checkbox" name="Yes" value="Yes"><label for="vehicle1">&nbsp; Wed</label>&nbsp;&nbsp;&nbsp;
                        </div>
                        <div class="col-md-3">
                            <input type="time" name="" class="form-control">
                        </div>
                        <div class="col-md-3">
                            <input type="time" name="" class="form-control">
                        </div>
                        <br/><br/>
                        <p></p>


                        <div class="col-md-2">
                                <input type="checkbox" name="Yes" value="Yes"><label for="vehicle1">&nbsp; Thus</label>&nbsp;&nbsp;&nbsp;
                        </div>
                        <div class="col-md-3">
                            <input type="time" name="" class="form-control">
                        </div>
                        <div class="col-md-3">
                            <input type="time" name="" class="form-control">
                        </div>
                        <br/><br/>
                        <p></p>
                        <div class="col-md-2">
                                <input type="checkbox" name="Yes" value="Yes"><label for="vehicle1">&nbsp; Sat</label>&nbsp;&nbsp;&nbsp;
                        </div>
                        <div class="col-md-3">
                            <input type="time" name="" class="form-control">
                        </div>
                        <div class="col-md-3">
                            <input type="time" name="" class="form-control">
                        </div>
                        <br/><br/>
                        <p></p>
                        <div class="col-md-2">
                                <input type="checkbox" name="Yes" value="Yes"><label for="vehicle1">&nbsp; Sun</label>&nbsp;&nbsp;&nbsp;
                        </div>
                        <div class="col-md-3">
                            <input type="time" name="" class="form-control">
                        </div>
                        <div class="col-md-3">
                            <input type="time" name="" class="form-control">
                        </div>
                        <br/><br/>





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


@endsection
@section('footer_js')
<script>
// select all accordion items
const accItems = document.querySelectorAll(".accordion__item");

// add a click event for all items
accItems.forEach((acc) => acc.addEventListener("click", toggleAcc));

function toggleAcc() {
  // remove active class from all items exept the current item (this)
  accItems.forEach((item) => item != this ? item.classList.remove("accordion__item--active") : null
  );

  // toggle active class on current item
  if (this.classList != "accordion__item--active") {
    this.classList.toggle("accordion__item--active");
  }
}
</script>
@endsection
