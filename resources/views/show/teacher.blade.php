@extends('layouts.app')
@section('meta')
<title>Teacher Refferal Network</title>
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
          <h1 data-aos="fade-up">Teacher Refferal Network</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">Are you a teacher that needs a reliable place to recommend your current students or in need for more students? Are you local to our show room? Please fill out the form below and we are happy to have a better understanding of the services you provide and how we can support you in.</h2>

        </div>

        <div class="col-lg-8 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
          <img src="{{asset('img/875.jpg')}}" class="img-fluid animated" alt="">
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



                <div class="col-lg-12 col-md-12" style="text-align: center;" data-aos="fade-up" data-aos-delay="300">
                    <label><h1>Fill the form for with Details</h1></label>
                    <p></p>
                  <form action="#" method="post">
                  {{-- <form action="{{route('mail')}}" method="post"> --}}
                      @csrf

                      <div class="row">
                        <div class="col-md-2 form-group mt-3">
                          <input type="text" class="form-control" name="zip" id="subject" placeholder="First Name">
                        </div>
                        <div class="col-md-2 form-group mt-3">
                          <input type="text" class="form-control" name="address" id="subject" placeholder="Last Name">
                        </div>
                        <div class="col-md-4 form-group mt-3">
                            <input type="text" class="form-control" name="zip" id="subject" placeholder="Phone">
                        </div>
                        <div class="col-md-4 form-group mt-3">
                            <input type="text" class="form-control" name="zip" id="subject" placeholder="Email">
                          </div>
                        </div>
                    <p></p>

                  <div class="row">
                    <div class="col-md-3 form-group mt-3">
                      <input type="text" class="form-control" name="zip" id="subject" placeholder="Zip Code">
                    </div>

                    <div class="col-md-3 form-group mt-3">
                      <input type="text" class="form-control" name="address" id="subject" placeholder="City">
                    </div>

                    <div class="col-md-6 form-group mt-3">
                        <input type="text" class="form-control" name="zip" id="subject" placeholder="Name of School or Studio">
                    </div>

                    </div>

                    <p></p>
                    <div class="row">
                        <label for=""> <b>Teaching Zone / Area</b> </label>
                        <div class="col-md-3 form-group mt-3 mt-md-0">
                        <label for=""><b>Do They Offer Remote/Virtual</b></label><br/>
                        <input type="checkbox" name="">Yes &nbsp; <input type="checkbox" name="">No
                        </div>

                        <div class="col-md-3 form-group mt-3 mt-md-0">
                            <label for=""><b>Do You go to students Home?</b></label><br/>
                            <input type="checkbox" name="">Yes &nbsp; <input type="checkbox" name="">No
                        </div>

                        <div class="col-md-3 form-group mt-3 mt-md-0">
                          <input type="phone" class="form-control" name="phone" id="email" placeholder="How Many Students You Have?">
                        </div>

                        <div class="col-md-3 form-group mt-3 mt-md-0">
                            <label for=""><b>Do You Need more students?</b></label><br/>
                            <input type="checkbox" name="">Yes &nbsp; <input type="checkbox" name="">No
                        </div>

                      </div>

                    <div class="row">
                        <div class="col-md-4 form-group mt-3">
                            <label for=""><b>What Piano you like to play?</b></label>
                            <input type="text" class="form-control" name="phone" id="email" placeholder="What Piano you like to play?">
                          </div>

                          <div class="col-md-4 form-group mt-3">
                            <label for=""><b>What Piano Do you Teach on?</b></label>
                            <input type="text" class="form-control" name="phone" id="email" placeholder="What Piano Do you Teach on?">
                          </div>

                          <div class="col-md-4 form-group mt-3">
                          <label for=""><b>Are you married to specific Piano or Brand?</b></label><br/>
                          <input type="checkbox" name="">Yes &nbsp; <input type="checkbox" name="">No
                          <input type="text" class="form-control" placeholder="If Yes, Then What Brand or Piano">
                          </div>
                    </div>


                    <div class="row">
                        <div class="col-md 6 form-group mt-3">
                            <label for=""><b>Would you like to see our showroom and Piano Lines?</b></label><br/>
                          <input type="checkbox" name="">Yes &nbsp; <input type="checkbox" name="">No
                        </div>

                        <div class="col-md 6 form-group mt-3">
                            <label for=""><b>Would you like for us to have our Team to reach out to explain our Reffral Program?</b></label><br/>
                          <input type="checkbox" name="">Yes &nbsp; <input type="checkbox" name="">No
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
