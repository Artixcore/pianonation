

     <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div >
       <!--{{-- <h1><a href="{{url('/')}}">{{ config('app.name', 'Laravel') }}</a></h1> --}}-->
        <!-- Uncomment below if you prefer to use an image logo -->
      <a href="{{url('/')}}"><img src="{{ asset('logo.jpeg')}}" alt="" style="width:100px; height:70px;"></a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>

          <li><a class="nav-link scrollto" href="{{url('/')}}">Home</a></li>
          <!--<li><a class="nav-link scrollto" href="#affiliate">Affiliate Network</a></li>-->
              <li class="dropdown"><a href="#portfolio"><span>New Piano</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                    @foreach (App\Type::all() as $item)
                    <li><a href="{{route('piano.search', $item->type)}}">{{$item->type}}</a></li>
                    @endforeach

                </ul>
              </li>

              <li class="dropdown"><a href="#portfolio"><span>Pre-Owned Piano</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                    @foreach (App\Type::all() as $item)
                    <li><a href="{{route('piano.search', $item->type)}}">{{$item->type}}</a></li>
                    @endforeach
                </ul>
              </li>

          </li>
          <li><a class="nav-link scrollto" href="{{url('Piano/service')}}">Services</a></li>
          <li><a class="nav-link scrollto" href="{{url('education')}}">Education</a></li>
          <li><a class="nav-link scrollto" href="{{url('/')}}/#contact">Contact</a></li>
          {{-- <li><a class="nav-link scrollto" href="#">Cart ( {{ Cart::getTotalQuantity()}} )</a></li> --}}
          {{-- <li><a class="nav-link scrollto" href="#about">About</a></li> --}}
          @guest
          <li><a class="nav-link scrollto" href="{{route('login')}}">Login</a></li>
          @else
          <li class="dropdown"><a href="#"><span>Piano</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
                <li class="dropdown">
                        @if (Auth::user()->urole=='admin')
                        <a class="dropdown-item" href="{{ route('admin.users.index') }}">
                            User Managment
                        </a>
                        @elseif (Auth::user()->urole=='author')
                        <a class="dropdown-item" href="{{ route('author.dashboard') }}">
                            User Managment
                        </a>
                        @else
                        Fuck You
                        @endif

                </li>

                <li class="dropdown">
                    <a class="dropdown-item" href="{{route('site.view')}}">create Site</a>
                </li>

                <li class="dropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>

                </li>
            @endguest
              </li>
            </ul>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
