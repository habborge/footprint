@extends('layouts.page')
<style type="text/css" media="screen">
  .help-block strong{
    font-size: 10px !important;
    color: red !important;
}
</style>
@section('content')
<header style="padding:40px" id="header" class="u-header u-header--bg-transparent u-header--abs-top">
  <div class="u-header__section">
    <div id="logoAndNav" class="container-fluid">
      <!-- Nav -->
      <nav class="navbar navbar-expand u-header__navbar">
        <!-- White Logo -->
        <a class="d-none d-lg-flex navbar-brand u-header__navbar-brand u-header__navbar-brand-center u-header__navbar-brand-text-white" href="/">

          <img src="/images/logo.png">
      </a>
      <!-- End White Logo -->

      <a class="d-flex d-lg-none navbar-brand u-header__navbar-brand u-header__navbar-brand-center u-header__navbar-brand-collapsed" href="/">
          <img src="/images/logo.png">
      </a>

      <!-- Button -->
      <div class="ml-auto">
          <a class="btn btn-sm btn-primary transition-3d-hover" href="/voluntary">
            Se Voluntario
        </a>
       {{--  <a class="btn btn-sm btn-primary transition-3d-hover"  href="/register">
            Registro
        </a> --}}
    </div>
    <!-- End Button -->
</nav>
<!-- End Nav -->
</div>
</div>
</header>

<main id="content" role="main">
  <!-- Form -->
  <div class="d-flex align-items-center position-relative height-lg-100vh">
    <div class="col-lg-5 col-xl-4 d-none d-lg-flex align-items-center gradient-half-primary-v1 height-lg-100vh px-0" id="particles-js">

    </div>

    <div class="container">
      <div class="row no-gutters">
        <div class="col-md-8 col-lg-7 col-xl-6 offset-md-2 offset-lg-2 offset-xl-3 space-3 space-lg-0">
          <!-- Form -->
          <form class="js-validate mt-5" method="POST" action="/login">
            @csrf
            <!-- Title -->
            <div class="mb-7">
              <h2 class="h3 text-primary font-weight-normal mb-0">Bienvenido a <span class="font-weight-semi-bold">Footprint</span></h2>
              <p>Llena el formulario para acceder.</p>
          </div>
          <!-- End Title -->


          <!-- Form Group -->

          @if($errors->any())

          @foreach ($errors->all() as $error)
          <div class="alert alert-danger" role="alert">
              {{ $error }}
          </div>
          @endforeach
          @endif



        {{--   <div class="js-form-message form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div> --}}

        <div class="js-form-message form-group">
          <label class="form-label" for="signinSrEmail">E-Mail Address</label>
          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

          @error('email')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <!-- End Form Group -->






    <!-- Form Group -->
    <div class="js-form-message form-group">
      <label class="form-label" for="signinSrPassword">
        <span class="d-flex justify-content-between align-items-center">
          Contraseña

      </span>
  </label>
  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

  @error('password')
  <span class="invalid-feedback" role="alert">
    <strong>{{ $message }}</strong>
</span>
@enderror
</div>
<!-- End Form Group -->

     {{--  <div class="form-group{{ $errors->has('g-recaptcha-response') ? ' has-error' : '' }}">


          {!! app('captcha')->display() !!}
          @if ($errors->has('g-recaptcha-response'))
          <span class="help-block">
            <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
        </span>
        @endif

    </div> --}}

    <!-- Button -->
    <div class="row align-items-center mb-5">
      <div class="col-6">
        {{--  <span class="small text-muted">No tienes una cuenta?</span>
         <a class="small" href="/register">Registrate</a>
         <a class="link-muted text-capitalize font-weight-normal" href="/password/reset">Olvidaste tu contraseña?</a> --}}
     </div>

     <div class="col-6 text-right">
      <button type="submit" class="btn btn-primary transition-3d-hover">Acceder</button>
  </div>
</div>
<!-- End Button -->
</form>
<!-- End Form -->
</div>
</div>
</div>
</div>
<!-- End Form -->
</main>

{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
