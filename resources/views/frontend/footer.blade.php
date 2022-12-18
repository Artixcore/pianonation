  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col-lg-6 text-lg-left text-center">
          <div class="copyright">
            &copy; Copyright <strong>{{ config('app.name', 'Laravel') }}</strong>. All Rights Reserved |
          {{-- </div>
          <div class="credits"> --}}

            Developed By <a href="https://www.fiverr.com/zannatnazila">Ismam Tabriz</a>
          </div>
        </div>
        <div class="col-lg-6">
          <nav class="footer-links text-lg-right text-center pt-2 pt-lg-0">
            <a href="#intro" class="scrollto">Home</a>
            <a href="#about" class="scrollto">About</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms of Use</a>
            <a href="{{route('login')}}">Admin</a>
          </nav>
        </div>
      </div>
    </div>
  </footer>
  <!-- End Footer -->
