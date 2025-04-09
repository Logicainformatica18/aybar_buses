<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme" data-layout="vertical">

<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Favicon icon-->
  <link rel="icon" type="image/jpg" href="{{ asset('ayba/favicon.png') }}" />

  <!-- Core Css -->
  <link rel="stylesheet" href="../assets/css/styles.css" />

  <title>Aybar Corp</title>
</head>

<body>
  <!-- Preloader -->
  <div class="preloader">

    <img src="{{ asset('ayba/1.png') }}" alt="loader" class="lds-ripple img-fluid" />
  </div>
  <div id="main-wrapper">
    <div class="position-relative overflow-hidden radial-gradient min-vh-100 w-100">
      <div class="position-relative z-index-5">
        <div class="row gx-0">

          <div class="col-lg-6 col-xl-5 col-xxl-4">
            <div class="min-vh-100 bg-body row justify-content-center align-items-center p-5">
              <div class="col-12 auth-card">
                <a href="{{url('/')}}" class="text-nowrap logo-img d-block w-100 text-center">
                  <img src="{{asset('ayba/1.png')}}" class="dark-logo" alt="Logo-Dark" width="40%" />

                </a>
                <h2 class="mb-2 mt-4 fs-7 fw-bolder">Iniciar Sesión</h2>
                {{-- <p class="mb-9">Your Admin Dashboard</p> --}}
                <div class="row">
                  <div class="col-12 mb-2 mb-sm-0">
                    <a class="btn btn-link border border-muted d-flex align-items-center justify-content-center rounded-2 py-8 text-decoration-none" href="{{ url('auth/google') }}" role="button">

                        <img src="../assets/images/svgs/google-icon.svg" alt="matdash-img" class="img-fluid me-2" width="18" height="18" />
                      Google
                    </a>
                  </div>
                  {{-- <div class="col-6">
                    <a class="btn btn-link border border-muted d-flex align-items-center justify-content-center rounded-2 py-8 text-decoration-none" href="javascript:void(0)" role="button">
                      <img src="../assets/images/svgs/facebook-icon.svg" alt="matdash-img" class="img-fluid me-2" width="18" height="18" />
                      Facebook
                    </a>
                  </div> --}}
                </div>
                <div class="position-relative text-center my-4">
                  <p class="mb-0 fs-4 px-3 d-inline-block bg-body text-dark z-index-5 position-relative">
                    o ingresa con email
                  </p>
                  <span class="border-top w-100 position-absolute top-50 start-50 translate-middle"></span>
                </div>
                <form method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input id="email" type="email"
                    class="form-control @error('email') is-invalid @enderror" name="email"
                    value="{{ old('email') }}" required autocomplete="email" autofocus
                    placeholder="Email"id="exampleInputEmail1" aria-describedby="emailHelp">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    {{-- <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" /> --}}
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label">Contraseña</label>



                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password" placeholder="Contraseña"id="exampleInputPassword1">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror


                  </div>
                  <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <div class="form-check">

                        <input class="form-check-input primary" type="checkbox" name="remember"
                        id="remember" {{ old('remember') ? 'checked' : '' }} checked>
                        <label class="form-check-label text-dark" for="flexCheckChecked" >
                            Recordarme

                      </label>
                    </div>

                    @if (Route::has('password.request'))

                    <a class="text-primary fw-medium" href="{{ route('password.request') }}">¿Olvidaste tu Contraseña?</a>
                @endif

                  </div>
                  <button type="submit"
                  class="btn btn-primary w-100 py-8 mb-4 rounded-2"
                  style="background-color: #023039;font-weight: 100%; height:40px;width:70%; border-radius: 20px;border-color:#F6A42C">
                  <span style="color:white; font-size: 1em;">Ingresar</span>
              </button>


                  {{-- <div class="d-flex align-items-center justify-content-center">
                    <p class="fs-4 mb-0 fw-medium">New to MatDash?</p>
                    <a class="text-primary fw-medium ms-2" href="../dark/authentication-register.html">Create an
                      account</a>
                  </div> --}}
                </form>
              </div>
            </div>
          </div>

          <div class="col-lg-6 col-xl-7 col-xxl-8 position-relative overflow-hidden   d-none d-md-block">
            {{-- <div class="circle-top"></div> --}}
            <img src="ayba/f_login.png" height="100%" alt="">
            <div>

              {{-- <img src="../assets/images/logos/logo-icon.svg" class="circle-bottom" alt="Logo-Dark" /> --}}
            </div>
            {{-- <div class="d-lg-flex align-items-center z-index-5 position-relative h-n80">
              <div class="row justify-content-center w-100">
                <div class="col-lg-6">
                  <h2 class="text-white fs-10 mb-3 lh-base">
                    Welcome to
                    <br />
                    MatDash
                  </h2>
                  <span class="opacity-75 fs-4 text-white d-block mb-3">MatDash helps developers to build organized
                    and well
                    <br />
                    coded dashboards full of beautiful and rich modules.
                  </span>
                  <a href="../landingpage/index.html" class="btn btn-primary">Learn More</a>
                </div>
              </div>
            </div> --}}
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="dark-transparent sidebartoggler"></div>
  <!-- Import Js Files -->
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/libs/simplebar/dist/simplebar.min.js"></script>
  <script src="../assets/js/theme/app.dark.init.js"></script>
  <script src="../assets/js/theme/theme.js"></script>
  <script src="../assets/js/theme/app.min.js"></script>
  <script src="../assets/js/theme/sidebarmenu.js"></script>

  <!-- solar icons -->
  <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
</body>

</html>
