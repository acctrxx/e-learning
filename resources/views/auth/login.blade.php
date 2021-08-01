@extends('layouts.auth')
@section('title')
  Insight Login
@endsection
@section('content')
    <div class="row h-100">
      <div class="col-lg-5 col-12">
          <div id="auth-left">
              <div class="auth-logo">
                  <a href="index.html"><img style="height: 40px;" src="https://i.pinimg.com/originals/8b/80/22/8b8022a1bdadc616217f2116243af729.png" alt="Logo"></a>
              </div>
              <h1 class="auth-title">Log in.</h1>
              <p class="auth-subtitle mb-5">Log in with your data that you entered during registration.</p>

              @if (session('status'))
                <div class="mb-4 font-medium text-sm text-pink-600">
                    {{ session('status') }}
                </div>
              @endif

              <form action="{{ route('loginProccess') }}" method="POST">
                @csrf
                @method('POST')
                  <div class="form-group position-relative has-icon-left mb-4">
                      <input type="email" name="email" class="form-control form-control-xl" placeholder="Email" :value="old('email')" required autofocus>
                      <div class="form-control-icon">
                          <i class="bi bi-person"></i>
                      </div>
                  </div>
                  <div class="form-group position-relative has-icon-left mb-4">
                      <input type="password" name="password" class="form-control form-control-xl" value="{{ old('password') }}" placeholder="Password" required autocomplete="current-password">
                      <div class="form-control-icon">
                          <i class="bi bi-shield-lock"></i>
                      </div>
                  </div>
                  {{-- <div class="form-check form-check-lg d-flex align-items-end">
                      <input class="form-check-input me-2" type="checkbox" value="" id="flexCheckDefault">
                      <label class="form-check-label text-gray-600" for="flexCheckDefault">
                          Keep me logged in
                      </label>
                  </div> --}}
                  <button style="background-color: #d30c55; color: #f4f4f4;" class="btn btn-block btn-lg shadow-lg mt-5">Log in</button>
              </form>
              <div class="text-center mt-5 text-lg fs-4">
                  <p style="color: #a9949c;">Don't have an account? <a href="{{ url('register') }}" style="color: #d30c55;"
                          class="font-bold">Sign up</a>.</p>
                  <p><a class="font-bold" style="color: #d30c55;" href="auth-forgot-password.html">Forgot password?</a>.</p>
              </div>
          </div>
      </div>
      <div class="col-lg-7 d-none d-lg-block">
          <div id="auth-right">

          </div>
      </div>
  </div>
@endsection