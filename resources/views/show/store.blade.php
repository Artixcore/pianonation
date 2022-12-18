@extends('layouts.app')
@section('meta')
<title>Store my Piano</title>
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
          <h1 data-aos="fade-up">Store Your Piano!</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">  We Are PianoNation!</h2>

        </div>

        <div class="col-lg-8 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
          <img src="{{asset('img/555.jpg')}}" class="img-fluid animated" alt="">
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

                  <p></p>




                </div>


                <div class="col-lg-12 col-md-12" style="text-align: center;" data-aos="fade-up" data-aos-delay="300">
                    <label><h1>Store your Piano</h1></label>
                    <p></p>
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
                        <input type="phone" class="form-control" name="phone" id="email" placeholder="Your Phone">
                      </div>

                      <div class="col-md-3 form-group mt-3 mt-md-0">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                      </div>

                    </div>

                    <div class="row py-3">
                        <label for="">Upload Video of your Piano</label>
                        <p></p>
                        <div class="col-md-3 form-group mt-3 mt-md-0">
                          <input type="file" name="pic_1" class="form-control" id="name" placeholder="First Name" required>
                       </div>

                      </div>

                      <div class="row">
                        <div class="col-md-4 form-group mt-3">
                            <input type="text" class="form-control" name="serial_number" id="subject" placeholder="Serial Number">
                          </div>

                          <div class="col-md-4 form-group mt-3">
                            <input type="text" class="form-control" name="model_number" id="subject" placeholder="Model Number">
                          </div>

                          <div class="col-md-4 form-group mt-3">
                            <input type="text" class="form-control" name="address" id="manufacturer" placeholder="Brand/Manufacturer">
                          </div>
                      </div>


                  <div class="row">
                    <div class="col-md-2 form-group mt-3">
                      <input type="text" class="form-control" name="zip" id="subject" placeholder="Zip Code">
                    </div>

                    <div class="col-md-2 form-group mt-3">
                        <input type="text" class="form-control" name="zip" id="subject" placeholder="City">
                      </div>

                    <div class="col-md-4 form-group mt-3">
                      <input type="text" class="form-control" name="address" id="subject" placeholder="Address">
                    </div>

                    <div class="col-md-4 form-group mt-3">
                       <select name="storage_term" class="form-control">
                           <option selected> Storage Term </option>
                           <option value="1-3 Month">1-3 Month</option>
                           <option value="4-12 Month">4-12 Month</option>
                           <option value="1 Years+">1 Years+</option>
                           <option value="Not Sure">Not Sure</option>
                       </select>
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
