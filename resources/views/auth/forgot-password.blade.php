<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme" data-layout="vertical">

<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Favicon icon-->
  <link rel="shortcut icon" type="image/png" href="{{asset('ayba/1.png')}}" />

  <!-- Core Css -->
  <link rel="stylesheet" href="../../assets/css/styles.css" />

  <title>Aybar Corp</title>
</head>

<body>
  <!-- Preloader -->
  <div class="preloader">
    <img src="../../assets/images/logos/favicon.png" alt="loader" class="lds-ripple img-fluid" />
  </div>
  <div id="main-wrapper">
    <div class="position-relative overflow-hidden auth-bg min-vh-100 w-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100 my-5 my-xl-0">
          <div class="col-md-9 d-flex flex-column justify-content-center">
            <div class="card mb-0 bg-body auth-login m-auto w-100">
              <div class="row gx-0">
                <!-- ------------------------------------------------- -->
                <!-- Part 1 -->
                <!-- ------------------------------------------------- -->
                <div class="col-xl-6 border-end">
                  <div class="row justify-content-center py-4">
                    <div class="col-lg-11">
                      <div class="card-body">
                        <a href="../../index.html" class="text-nowrap logo-img d-block mb-4 w-100 text-center">
                          <img src="{{asset('ayba/1.png')}}"width="50px" class="dark-logo" alt="Logo-Dark" />
                        </a>
                        <p class="text-muted">Por favor ingrese la dirección de correo electrónico asociada con su cuenta y le enviaremos un enlace para restablecer su contraseña.</p>
                    
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                          <div class="mb-3">
                            <label for="text-email" class="form-label">Email :</label>
                            <input id="email" type="email"id="text-email" placeholder="Ingresa tu Email"  class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                           
                          </div>
                          <button type="submit" class="btn btn-dark w-100 py-8 mb-4 rounded-1">
                            {{ __('Enviar enlace de restablecimiento de contraseña') }}
                        </button>
                        
                         
                          <a href="../../login" class="btn bg-primary-subtle text-primary w-100 py-8 mb-4 rounded-1">Regresa al login</a>

                        </form>

                      </div>
                    </div>
                  </div>

                </div>
                <!-- ------------------------------------------------- -->
                <!-- Part 2 -->
                <!-- ------------------------------------------------- -->
                <div class="col-xl-6 d-none d-xl-block"style="background-image:url('{{asset('resource/1734104450_bg.png')}}')">
                  <div class="row justify-content-center align-items-center h-100 pb-5">
                    <div class="col-lg-9">
                    

                    </div>
                  </div>

                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="dark-transparent sidebartoggler"></div>
  <!-- Import Js Files -->
  <script src="../../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../../assets/libs/simplebar/dist/simplebar.min.js"></script>
  <script src="../../assets/js/theme/app.init.js"></script>
  <script src="../../assets/js/theme/theme.js"></script>
  <script src="../../assets/js/theme/app.min.js"></script>
  <script src="../../assets/js/theme/sidebarmenu.js"></script>

  <!-- solar icons -->
  <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
</body>

</html>



