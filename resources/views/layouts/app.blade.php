<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    @yield('meta')
    <!-- Scripts -->
    <script src="https://js.stripe.com/v3/" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables.net-bs5/1.13.1/dataTables.bootstrap5.min.js" integrity="sha512-DK2sDFXaKlL6GyjjmKlL1YsuUiAuEKBqYqj0oYQijZQadPjTunVZYhDCOb8pv5CcIKwoz8ev+wMhJgaQcBN7xg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables.net-bs5/1.13.1/dataTables.bootstrap5.css" integrity="sha512-qEaSifFoM5dFVA8Eue2Vuy7350b+l4jjBhxifQ8aLy60xzHTsKe1Kc3HKZFiLPlSpzavRrw2QMzg5l6AIAdmxg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    @yield('style_css')
    <!-- Styles -->
      <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  {{-- <embed src="{{ asset('public/music.mp3')}}" loop="true" autostart="true"> --}}

  <link href="{{ asset('fe/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{ asset('fe/assets/vendor/bootstrap/css/bootstrap.css')}}" rel="stylesheet">
  <link href="{{ asset('fe/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{ asset('fe/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{ asset('fe/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{ asset('fe/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{ asset('fe/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <link href="{{ asset('fe/assets/css/style.css')}}" rel="stylesheet">
    <style>
        body {
        background-color: #ffffff;
        }
    </style>

</head>
<body>

    @include('frontend.navbar')

       <div class="py-3"></div>
        @yield('content')


    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('fe/assets/vendor/aos/aos.js')}}"></script>
    <script src="{{ asset('fe/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
    <script src="{{ asset('fe/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="{{ asset('fe/assets/vendor/php-email-form/validate.js')}}"></script>
    <script src="{{ asset('fe/assets/vendor/purecounter/purecounter.js')}}"></script>
    <script src="{{ asset('fe/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('fe/assets/js/main.js')}}"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    @yield('footer_js')

</body>
</html>
