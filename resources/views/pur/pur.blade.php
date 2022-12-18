@extends('layouts.app')

@section('meta')
<title>Book the Piano</title>
@endsection
@section('style_css')

<style>
    #ero {
    /* width: 100%; */
    height: 85vh;
    margin-top: 30px;
}
</style>
@endsection

@section('content')
     <!-- ======= Breadcrumbs ======= -->
     <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>Please fill the form below for our PianoNation team member to reach out to you to finalize your order. (Online orders will require a $500 refundable deposit)</h2>
        </div>

        </div>
      </section>
      <!-- End Breadcrumbs -->

      @foreach ($products as $item)


      <!-- ======= Portfolio Details Section ======= -->
      <section id="portfolio-details" class="portfolio-details">
        <div class="container">

          <div class="row gy-4">
              <h2>
                @if(session()->has('message'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong> {{ session()->get('message') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
            @endif
              </h2>
            <div class="col-lg-8">
                <form class="row g-3" method="POST" action="{{route('payment')}}">
                    @csrf
                    <div class="col-md-6">
                        <input type="hidden" name="piano_id" value="{{$item->id}}">
                        <label for="inputEmail4" class="form-label">First Name *</label>
                        <input type="text" class="form-control" name="f_name">
                      </div>
                      <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Last Name *</label>
                        <input type="text" class="form-control" name="l_name">
                      </div>
                      <div class="col-md-12">

               <div class="form-group text-center mt-3">

                <label><b>How you pay remaining Balance?</b></label><br/>

                  <input type="checkbox" name="remain_bal" value="Cash"><label for="vehicle1">&nbsp; Cash</label>&nbsp;&nbsp;&nbsp;
                  <input type="checkbox" name="remain_bal" value="Credit Card"><label for="vehicle1">&nbsp; Credit Card</label>&nbsp;&nbsp;&nbsp;
                  <input type="checkbox" name="remain_bal" value="Bank Transfer"><label for="vehicle1">&nbsp; Bank Transfer</label>&nbsp;&nbsp;&nbsp;
                  <input type="checkbox" name="remain_bal" value="Crypto Currency"><label for="vehicle1">&nbsp; Crypto Currency</label>&nbsp;&nbsp;&nbsp;

                </div>
                      </div>

                      <div class="col-md-12">
                       <input type="hidden" name="shop_name" value="{{$item->shop_name}}">
                       <input type="hidden" name="user_id" value="{{$item->user_id}}">
                        <div class="form-group text-center mt-3">

                         <label><b>Are there any stairs or steps?</b></label><br/>

                           <input type="checkbox" name="steps" value="Yes"><label for="vehicle1">&nbsp; Yes</label>&nbsp;&nbsp;&nbsp;
                           <input type="checkbox" name="steps" value="No"><label for="vehicle1">&nbsp; No</label>&nbsp;&nbsp;&nbsp;

                         </div>
                               </div>

                    <div class="col-md-6">
                      <label for="inputEmail4" class="form-label">Email *</label>
                      <input type="email" name="email" class="form-control">
                    </div>
                    <div class="col-md-6">
                      <label for="inputPassword4" class="form-label">Contact Number for Agent to reach you *</label>
                      <input type="number" name="contact" class="form-control">
                    </div>
                    <div class="col-md-12">
                      <label for="inputAddress" class="form-label">Address</label>
                      <input type="text" class="form-control" name="address">
                    </div>
                    <div class="col-md-6">
                      <label for="inputAddress2" class="form-label">Address 2</label>
                      <input type="text" class="form-control" name="address_2">
                    </div>
                    <div class="col-md-6">
                        <label for="inputAddress2" class="form-label">Estimate Delivery Timeframe</label>
                       <select name="timeframe" class="form-control">
                        <option value="A Week">A Week</option>
                        <option value="Two Week">Two Week</option>
                        <option value="Three Week">Three Week</option>
                       </select>
                      </div>
                    <div class="col-md-6">
                      <label for="inputCity" class="form-label">City</label>
                      <input type="text" class="form-control" name="city">
                    </div>
                    <div class="col-md-4">
                      <label for="inputState" class="form-label">State</label>
                      <input type="text" class="form-control" name="state">
                    </div>
                    <div class="col-md-2">
                      <label for="inputZip" class="form-label">Zip</label>
                      <input type="text" class="form-control" name="zip">
                    </div>

                    <div class="col-12">
                        {{-- <button type="submit" style="float: right;" class="btn btn-outline-success btn-lg">Order Now</button> --}}
                    </div>
                </form>
                <a href="{{route('checkout')}}" class="btn btn-outline-success btn-lg">Order Now</a>
            </div>

            <div class="col-lg-4">


                    @php
                    $iamgews = App\ProImage::where('product_id', $item->product_id)->get();
                @endphp

                @foreach ($iamgews as $itm)
                    <div class="swiper-slide">
                      <img src="{{asset('public/product/image')}}/{{$itm->photo}}" style="heightt:100%; width:100%;" alt="">
                    </div>
                @endforeach

              <div class="portfolio-info">
                <h3>{{$item->name}}</h3>
                <ul>
                  <li><strong>Category</strong>: {{$item->category}}</li>
                  <li><strong>Shop Name</strong>: {{$item->shop_name}}</li>
                  <li><strong>Price</strong>: {{ $item->price }} </li>
                  <li><strong>Discount</strong>: {{ $item->discount }} </li>
                  <li><strong>Status</strong>: {{ $item->status }} </li>
                  <li><strong>Type</strong>: {{ $item->type }} </li>
                </ul>
              </div>
              <div class="portfolio-description">

              </div>
            </div>

          </div>

        </div>
    </section>

    <p></p>


    @endforeach
      <!-- End Portfolio Details Section -->
@endsection

