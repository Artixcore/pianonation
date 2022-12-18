@extends('layouts.app')
@section('meta')
<title>Cutting Edge Technology</title>
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
          <h1 data-aos="fade-up">Cutting Edge Technology</h1>
          <!--<h2 data-aos="fade-up" data-aos-delay="400">Are you a teacher that needs a reliable place to recommend your current students or in need for more students? Are you local to our show room? Please fill out the form below and we are happy to have a better understanding of the services you provide and how we can support you in.</h2>-->

        </div>

        <div class="col-lg-8 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
          <img src="{{asset('img/951.jpg')}}" class="img-fluid animated" alt="">
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
                    <!--<label><h1>Fill the form for with Details</h1></label>-->
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
                        <div class="col-md-4 form-group mt-3">
                            <input type="checkbox" name="option" value="QRS Connect"><h3> <b>QRS Connect</b>  <br/>
                            <small> Mobilize Your Music, Instruments, Work and Tools </small>
                            </h3>

                        </div>
                        <div class="col-md-4 form-group mt-3">
                            <div class="embed-responsive embed-responsive-4by3">
                               <iframe title="vimeo-player" src="https://player.vimeo.com/video/446578646?h=423f30b0fe" width="640" height="360" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-4 form-group mt-3">
                            <input type="checkbox" name="option" value="PNO Upgrade Kit"><h3> <b>PNO Upgrade Kit</b></h3> <br/>

                        </div>
                        <div class="col-md-4 form-group mt-3">
                            <div class="embed-responsive embed-responsive-4by3">
                                <iframe title="vimeo-player" src="https://player.vimeo.com/video/405809454?h=176a3836d2" width="640" height="360" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-4 form-group mt-3">
                            <input type="checkbox" name="option" value="PNOmation Player System"><h3> <b>PNOmation Player System</b><br/> Play Back </h3>

                        </div>
                        <div class="col-md-4 form-group mt-3">
                            <div class="embed-responsive embed-responsive-4by3">
                                <iframe title="vimeo-player" src="https://player.vimeo.com/video/459907228?h=8b45c68926" width="640" height="360" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-4 form-group mt-3">
                            <input type="checkbox" value="PNOScan" name="option"><h3> <b>PNOScan</b><br/>
                            <small> Headphone/Record </small>
                            </h3>

                        </div>
                        <div class="col-md-4 form-group mt-3">
                            <div class="embed-responsive embed-responsive-4by3">
                              <iframe title="vimeo-player" src="https://player.vimeo.com/video/412161943?h=9421106afd" width="640" height="360" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>
                      </div>


                      <div class="row">
                        <div class="col-md-4 form-group mt-3">
                            <input type="checkbox" name="option" value="PNOmation OT"><h3> <b>PNOmation OT</b>  <br/>
                            <small> Rental or Purchase </small>
                            </h3>

                        </div>
                        <div class="col-md-4 form-group mt-3">
                            <div class="embed-responsive embed-responsive-4by3">
                                <iframe title="vimeo-player" src="https://player.vimeo.com/video/398367817?h=4071fdec01" width="640" height="360" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-2 form-group mt-3">
                          <input type="text" class="form-control" name="f_name" id="" placeholder="First Name">
                        </div>
                        <div class="col-md-2 form-group mt-3">
                          <input type="text" class="form-control" name="l_name" id="" placeholder="Last Name">
                        </div>
                        <div class="col-md-4 form-group mt-3">
                            <input type="text" class="form-control" name="phone" id="" placeholder="Phone (Optional)">
                        </div>
                        <div class="col-md-4 form-group mt-3">
                            <input type="email" class="form-control" name="email" id="" placeholder="Email">
                          </div>
                        </div>
                    <p></p>

                  <div class="row">
                    <div class="col-md-4 form-group mt-3">
                      <input type="text" class="form-control" name="zip" id="subject" placeholder="Zip Code">
                    </div>

                    <div class="col-md-8 form-group mt-3">
                      <input type="text" class="form-control" name="address" id="subject" placeholder="Address (Optional)">
                    </div>



                    </div>

                    <p></p>


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

@endsection
