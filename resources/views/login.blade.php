@extends('layouts.app')
@section('style_css')
    <style>
        html,
body {
  height: 100%;
}

body {

  align-items: center;
  padding-top: 30px;
  padding-bottom: 30px;
  background-color: #ffffff;
}

    </style>
@endsection
@section('content')



<div class="container">
    <div class="row">
      <div class="col-md-8">

      </div>


      <div class="col-md-4">
        <form method="POST" action="{{ route('login') }}">
            @csrf

          <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

          <div class="form-floating">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email Here.." autofocus>

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <label for="floatingInput">Email address</label>
          </div>
          <div class="form-floating">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password Here.." required autocomplete="current-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <label for="floatingPassword">Password</label>
          </div>

          <div class="checkbox mb-3">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="form-check-label" for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>
          </div>
          <div class="form-group">
            {{-- <button type="submit" style="border-color: #000000;" class="btn btn-outline-success mt-2">
                {{ __('Login') }}
            </button> --}}
            @if (Route::has('password.request'))
                <a class="btn btn-link" style="color: #000000;" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif
        </div>
          <button class="w-100 btn btn-lg btn-outline-primary" type="submit">Sign in</button>

        </form></div>
    </div>
  </div>




@endsection
