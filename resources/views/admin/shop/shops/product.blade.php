   @extends('admin.shop.view')

   @section('shops')

    <div class="container">

      <div class="section-title" data-aos="fade-up">
        <h2>Piano</h2>
            <div class="card">
      <div class="card-body">
         <form action="">



                <select name="" class="form-control">
                  <option selected>Select Price</option>
                  <option value="">500 - 2,000</option>
                  <option value="">300 - 5,400</option>
                  <option value="">5,500 - 9,900</option>

                  <option value="">10,000+</option>
                  <option value="">20,000+</option>
                  <option value="">30,000+</option>
                  <option value="">50,000+</option>
                  <option value="">80,000+</option>

                </select>

                  <input type="submit" value="Search" class="btn btn-outline-primary">
              </div>
          </form>
      </div>
      </div>
      </div>

      <div class="row">

          @foreach ($search as $item)

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
          <div class="member" data-aos="fade-up" data-aos-delay="400">
            <div class="member-img">

             <img src="{{asset('public/product/image')}}/{{$item->photo}}" style="height:380px;" class="img-fluid" alt="">

            </div>
            <div class="member-info">
              <h4> <a href="{{route('piano.product', $item->name)}}" class="btn btn-outline-primary"> {{$item->name}} </a></h4>
              <span>{{$item->price}}</span>
            </div>
          </div>
        </div>
        @endforeach

      </div>

    </div>


    @endsection
