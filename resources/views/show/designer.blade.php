@extends('layouts.app')
@section('meta')
<title>Designer Broker Network!</title>
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
.red a:hover{
  font-size: 24px;
}

</style>
@endsection
@section('content')

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-4 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Designer Broker Network!</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">We are here for you Designers and specialize in custom builds as well as broker specific Pianos for your clients. Let's get started below.</h2>

        </div>

        <div class="col-lg-8 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
          <img src="{{asset('img/656.jpg')}}" class="img-fluid animated" alt="">
          {{-- <img src="https://i.pinimg.com/originals/84/c4/28/84c4280f6236acbc78cac347c63ed89b.png" class="img-fluid animated" alt=""> --}}
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">



        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact" style="text-align: center;">
            <div class="container">

                 <div class="row">
                     <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                        <div class="carousel-inner">
                         <!--<div class="carousel-item active"><img src="{{asset('img/s1.jpg')}}" class="d-block w-100" alt="..."></div>-->
                         <div class="carousel-item active"><img src="{{asset('img/s2.jpg')}}" class="d-block w-100" alt="..."></div>
                         <div class="carousel-item"><img src="{{asset('img/s3.jpg')}}" class="d-block w-100" alt="..."></div>
                         <div class="carousel-item"><img src="{{asset('img/s4.jpg')}}" class="d-block w-100" alt="..."></div>
                         <div class="carousel-item"><img src="{{asset('img/s5.jpg')}}" class="d-block w-100" alt="..."></div>
                         <div class="carousel-item"><img src="{{asset('img/s6.jpg')}}" class="d-block w-100" alt="..."></div>
                         <div class="carousel-item"><img src="{{asset('img/s7.jpg')}}" class="d-block w-100" alt="..."></div>
                        </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                             <span class="visually-hidden">Previous</span>
                              </button>
                             <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                               <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                 </div>


              <div class="row">



                <div class="col-lg-12 col-md-12" style="text-align: center;" data-aos="fade-up" data-aos-delay="300">
                    <label><h1>Fill the form for with Details</h1></label>
                    <p>
                        @if(session()->has('message'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong> {{ session()->get('message') }}</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
                    @endif
                    </p>
                  <form action="{{route('public-form')}}" method="post">
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
                        <div class="col-md-4 form-group mt-3">
                            <input type="text" class="form-control" name="designer" id="subject" placeholder="Designers / Group Name">
                          </div>

                          <div class="col-md-4 form-group mt-3">
                            <input type="text" class="form-control" name="poc" id="subject" placeholder="Point of Contact">
                          </div>

                          <div class="col-md-4 form-group mt-3">
                            <label for=""><b>Multiple Location:</b></label> <input type="checkbox" value="Yes" name="ml"> Yes &nbsp;&nbsp; <input value="No" type="checkbox" name="ml"> No &nbsp; <input type="text" name="mlh" class="form-control" placeholder="if yes, How Many?">
                          </div>
                    </div>

                    <div class="row">

                          <div class="col-md-12 form-group mt-3">
                            <label for=""><b>Would you like to know more about our broker support program?</b> </label>
                            <input type="checkbox" name="bs" value="Yes"> Yes &nbsp;
                            <input type="checkbox" name="bs" value="No"> No
                          </div>

                      </div>

                  <div class="row">
                    <div class="col-md-3 form-group mt-3">
                      <input type="text" class="form-control" name="zip" id="" placeholder="Zip Code">
                    </div>

                    <div class="col-md-3 form-group mt-3">
                      <input type="text" class="form-control" name="city" id="" placeholder="City">
                    </div>

                    <div class="col-md-6 form-group mt-3">
                        <input type="text" class="form-control" name="address" id="" placeholder="Full Address">
                    </div>
                    </div>



                    <div class="form-group mt-3">
                      <textarea class="form-control" name="details" rows="5" placeholder="Please add any additional 'KEY 🎹' Information or Details "></textarea>
                    </div>

                  </div>



                  <div class="py-3 mt-3">
                    <div class="text-center">
                        <button class="btn btn-outline-success" type="submit">Submit</button>
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
