@extends('layouts.app')
@foreach ($sites as $item)
@section('meta')
<title>{{$item->title}}</title>
@endsection
@section('style_css')
<style>
body, html {
  height: 100%;
}

.bg-img {
  /* The image used */
  background-image: url("{{asset('public/site/image')}}/{{$item->cover}}");

  /* Control the height of the image */
  min-height: 500px;
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

/* Add styles to the form container */
.cont {
  position: absolute;
  vertical-align: text-top;
  right: 0;
  margin: 20px;
  max-width: 350px;
  padding: 8px;
  background-color: white;
}

.conto {
  position: left;
  right: 0;
  margin: 20px;
  /* max-width: 300px; */
  padding: 16px;
  background-color: white;
}

</style>
@endsection
@section('content')

<div class="py-3">

<div class="bg-img py-3">

<div class="col-md-5" style=" background-color: #ffffff; opacity: 0.9;">
<div class="container">
    <div class="row">

        <h2>
            {{$item->title}}
        </h2>
        <br><br>
        <h5>
            {{ $item->header }}
        </h5>
    </div>
</div>
<div class="col-md-6">
    <div class="container">
        <div class="row">
            <a href="#FORM" class="btn btn-outline-success">SET APPOINTMENT</a>
        </div>
    </div>
</div>
<br>
</div>


<div class="col-md-7" style=" background-color: #ffffff; opacity: 0.9;">
    <form action="{{route('public-form')}}" id="FORM" class="cont" method="post">
            @csrf
          <div class="row">
            <div class="mb-3 mt-3 mt-md-0">
              <input type="text" name="f_name" class="form-control" id="name" placeholder="First Name" required>
            </div>

            <div class="mb-3  mt-3 mt-md-0">
              <input type="text" name="l_name" class="form-control" id="name" placeholder="Last Name" required>
            </div>


            <div class="mb-3  mt-3 mt-md-0">
                  <input type="text" class="form-control" placeholder="Phone">
                </div>
            <div class="mb-3  mt-3 mt-md-0">
                    <input type="text" class="form-control" placeholder="Email">
                  </div>
          </div>


            <div class="mb-3  mt-3 mt-md-0">
            <input type="text" class="form-control" name="zip" id="subject" placeholder="Zip Code">
          </div>

            <div class="mb-3  mt-3 mt-md-0">
            <input type="text" class="form-control" name="address" id="subject" placeholder="City">
          </div>



            <div class="mb-3  mt-3 mt-md-0">
            <textarea class="form-control" name="details" placeholder="Please add any additional 'KEY 🎹' Information or Details "></textarea>
          </div>


          <div class="mb-3  mt-3">
              <div class="text-center">
                  <button class="btn btn-outline-primary" type="submit">Submit</button>
                </div>
            </div>
        </form>
</div>



</div>
<br>
<br>
<br>
<br>
<div class="container">
    <div class="row">
   {{-- <h3> <a href="{{route('piano.products')}}" class="btn btn-outline-primary" title="More Details"><i class="bx bx-link"></i> See All Piano</a> </h3> --}}



@foreach (App\Products::all() as $product)

<div class="col-lg-4 col-md-6 portfolio-item {{$product->category}}">
    <div class="portfolio-wrap">
      <img src="{{asset('public/product/image')}}/{{$product->photo}}" style="height:500px; width:500px;" class="img-fluid" alt="">
      <div class="portfolio-info">
        <h4>{{$product->name}}</h4>
        <p>{{$product->type}}</p>
        <div class="portfolio-links">
          <a href="{{asset('public/product/image')}}/{{$product->photo}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="{{$product->name}}"><i class="bx bx-plus"></i></a>
          {{-- <a href="{{route('piano.product')}}/{{$product->name}}" class="btn btn-outline-primary" title="More Details"><i class="bx bx-link"></i> More Details</a> --}}
          {{-- <a href="{{route('piano.product', $product->name)}}" class="btn btn-outline-primary" title="More Details"><i class="bx bx-link"></i> More Details</a> --}}
        </div>
      </div>
    </div>
  </div>


  @endforeach
    </div>
</div>

</div>

<div class="embed-responsive embed-responsive-16by9" style="width:800px; height:450px">
    <iframe class="embed-responsive" title="YouTube video player" src="{{ $item->video_link }}" frameborder="0" allowfullscreen="" width="100%" height="100%"></iframe>
</div>


@endsection
@endforeach
