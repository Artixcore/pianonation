@extends('layouts.app')
@section('meta')
<title>{{ config('app.name', 'Laravel') }}</title>
@endsection

@section('style_css')
    <style>
        /* GLOBAL STYLES
-------------------------------------------------- */
/* Padding below the footer and lighter body text */

body {
  padding-top: 3rem;
  padding-bottom: 3rem;
  /* color: #ffffff; */
}

/* img{
    border-radius: 25px;
    -webkit-box-shadow: 1px 1px 10px 5px rgba(27,120,3,0.81);
    box-shadow: 1px 1px 10px 5px rgba(27,120,3,0.81);
    padding: 1px;
    transition: transform .2s;
    width: 200%;
    margin: 0 auto;
}
img::hover {
    transform: scale(1.5);
} */

/* CUSTOMIZE THE CAROUSEL
-------------------------------------------------- */

/* Carousel base class */
.carousel {
  margin-bottom: 4rem;
}
/* Since positioning the image, we need to help out the caption */
.carousel-caption {
  bottom: 3rem;
  z-index: 10;
}

/* Declare heights because of positioning of img element */
.carousel-item {
  height: 32rem;
}
.carousel-item > img {
  position: absolute;
  top: 0;
  left: 0;
  min-width: 100%;
  height: 32rem;
}


/* MARKETING CONTENT
-------------------------------------------------- */

/* Center align the text within the three columns below the carousel */
.marketing .col-lg-4 {
  margin-bottom: 1.5rem;
  text-align: center;
}
.marketing h2 {
  font-weight: 400;
}
/* rtl:begin:ignore */
.marketing .col-lg-4 p {
  margin-right: .75rem;
  margin-left: .75rem;
}
/* rtl:end:ignore */


/* Featurettes
------------------------- */

.featurette-divider {
  margin: 5rem 0; /* Space out the Bootstrap <hr> more */
}

/* Thin out the marketing headings */
.featurette-heading {
  font-weight: 300;
  line-height: 1;
  /* rtl:remove */
  letter-spacing: -.05rem;
}


/* RESPONSIVE CSS
-------------------------------------------------- */

@media (min-width: 40em) {
  /* Bump up size of carousel content */
  .carousel-caption p {
    margin-bottom: 1.25rem;
    font-size: 1.25rem;
    line-height: 1.4;
  }

  .featurette-heading {
    font-size: 50px;
  }
}

@media (min-width: 62em) {
  .featurette-heading {
    margin-top: 7rem;
  }
}

    </style>
@endsection
@section('content')

  <main id="main">

        <div class="container py-4">
            <div class="row">
              <div class="col-md-4"><img src="https://th.bing.com/th/id/R.2e10a88dc89609a2dcda4e3410aa35c4?rik=f4cYPCSyvYElAg&pid=ImgRaw&r=0" style="width: 100%; heigh:100%; max-width:100%; max-height:100%;" alt="..."></div>
              <div class="col-md-4"><img src="https://th.bing.com/th/id/R.2e10a88dc89609a2dcda4e3410aa35c4?rik=f4cYPCSyvYElAg&pid=ImgRaw&r=0" style="width: 100%; heigh:100%; max-width:100%; max-height:100%;" alt="..."></div>
              <div class="col-md-4"><img src="https://th.bing.com/th/id/R.2e10a88dc89609a2dcda4e3410aa35c4?rik=f4cYPCSyvYElAg&pid=ImgRaw&r=0" style="width: 100%; heigh:100%; max-width:100%; max-height:100%;" alt="..."></div>
            </div>
        </div>





    <div class="container p-2">
        <!-- START THE FEATURETTES -->


        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-8">
                <img src="https://th.bing.com/th/id/R.2e10a88dc89609a2dcda4e3410aa35c4?rik=f4cYPCSyvYElAg&pid=ImgRaw&r=0" style="width:100%; heigh:500px;" alt="...">
              </div>

          <div class="col-md-4">
            <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It’ll blow your mind.</span></h2>
            <p class="lead">Some great placeholder content for the first featurette here. Imagine some exciting prose here.</p>
          </div>

        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-4">
              <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It’ll blow your mind.</span></h2>
              <p class="lead">Some great placeholder content for the first featurette here. Imagine some exciting prose here.</p>
            </div>
            <div class="col-md-8">
              <img src="https://th.bing.com/th/id/R.2e10a88dc89609a2dcda4e3410aa35c4?rik=f4cYPCSyvYElAg&pid=ImgRaw&r=0" style="width: 100%; height:100%;" alt="...">
            </div>
          </div>

          <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">Oh yeah, it’s that good. <span class="text-muted">See for yourself.</span></h2>
            <p class="lead">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
          </div>
          <div class="col-md-5 order-md-1">
            <img src="https://th.bing.com/th/id/R.2e10a88dc89609a2dcda4e3410aa35c4?rik=f4cYPCSyvYElAg&pid=ImgRaw&r=0" style="width: 100%; height:100%;" alt="...">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-5">
            <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
            <p class="lead">And yes, this is the last block of representative placeholder content. Again, not really intended to be actually read, simply here to give you a better view of what this would look like with some actual content. Your content.</p>
          </div>
          <div class="col-md-7">
            <img src="https://th.bing.com/th/id/R.2e10a88dc89609a2dcda4e3410aa35c4?rik=f4cYPCSyvYElAg&pid=ImgRaw&r=0" style="width: 100%; height:100%;" alt="...">
          </div>
        </div>

        <hr class="featurette-divider">

        <!-- /END THE FEATURETTES -->

      </div><!-- /.container -->



  </main><!-- End #main -->
  @include('frontend.footer')
@endsection
