<!DOCTYPE html>
<html lang="en-US" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Sistem Inventaris Laboratorium dan Peminjaman Alat</title>
  
  <meta name="theme-color" content="#ffffff">
  <link rel="icon" href="data:;base64,=">
  <script src="{{ asset('admin/assets/js/config.js') }}"></script>
  <script src="{{ asset('admin/vendors/overlayscrollbars/OverlayScrollbars.min.js') }}"></script>
  
  <!-- Stylesheets -->
  <link rel="preconnect" href="https://fonts.gstatic.com/">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
  <link href="{{ asset('admin/vendors/overlayscrollbars/OverlayScrollbars.min.css') }}" rel="stylesheet">
  <link href="{{ asset('admin/assets/css/theme-rtl.min.css') }}" rel="stylesheet" id="style-rtl">
  <link href="{{ asset('admin/assets/css/theme.min.css') }}" rel="stylesheet" id="style-default">
  <link href="{{ asset('admin/assets/css/user-rtl.min.css') }}" rel="stylesheet" id="user-style-rtl">
  <link href="{{ asset('admin/assets/css/user.min.css') }}" rel="stylesheet" id="user-style-default">
    <script>
      var isRTL = JSON.parse(localStorage.getItem('isRTL'));
      if (isRTL) {
        var linkDefault = document.getElementById('style-default');
        var userLinkDefault = document.getElementById('user-style-default');
        linkDefault.setAttribute('disabled', true);
        userLinkDefault.setAttribute('disabled', true);
        document.querySelector('html').setAttribute('dir', 'rtl');
      } else {
        var linkRTL = document.getElementById('style-rtl');
        var userLinkRTL = document.getElementById('user-style-rtl');
        linkRTL.setAttribute('disabled', true);
        userLinkRTL.setAttribute('disabled', true);
      }
    </script>
  </head>

  <body>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <div class="container-fluid">
        <div class="row min-vh-100 flex-center g-0">
          <div class="col-lg-8 col-xxl-5 py-3 position-relative"><img class="bg-auth-circle-shape" src="../../../assets/img/icons/spot-illustrations/bg-shape.png" alt="" width="250"><img class="bg-auth-circle-shape-2" src="{{asset('admin/assets/img/icons/spot-illustrations/shape-1.png')}}" alt="" width="150">
            <div class="card overflow-hidden z-index-1">
              <div class="card-body p-0">
                <div class="row g-0 h-100">
                  <div class="col-md-5 text-center bg-card-gradient">
                    <div class="position-relative p-4 pt-md-5 pb-md-7 light">
                      <div class="bg-holder bg-auth-card-shape" style="background-image:url(../../../assets/img/icons/spot-illustrations/half-circle.png);"></div>
                      <!--/.bg-holder-->
                      <div class="z-index-1 position-relative"><a class="link-light mb-4 font-sans-serif fs-4 d-inline-block fw-bolder" href="landing_page" style="font-size: 21px !important;">Sistem Inventaris Laboratorium dan Peminjaman Alat</a>
                        <p class="opacity-75 text-white" style="font-size: 14px !important;"><br><br>Melalui sistem ini, admin dapat melakukan pengelolaan inventaris laboratorium dan peminjaman alat dengan lebih efisien dan sistematis.</p>
                      </div>
                    </div>
                    <div class="mt-3 mb-4 mt-md-4 mb-md-5 light">
                      <p class="text-white" style="font-size: 13px !important;">Anda tidak memiliki akun?<br><a class="text-decoration-underline link-light" href="admin_registrasi">Registrasi sekarang!</a></p>
                    </div>
                  </div>
                  <div class="col-md-7 d-flex flex-center">
                    <div class="p-4 p-md-5 flex-grow-1">
                      <div class="row flex-between-center">
                        {{-- tambah ini jika login tidak berhasil
                        <div class="alert alert-danger border-2 d-flex align-items-center" role="alert">
                          <div class="bg-danger"></div>
                          <p class="mb-0 flex-1">Email atau password salah!</p><button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div> --}}
                        <div class="col-auto">
                          <h3>Login</h3>
                        </div>
                      </div>
                      <form class="needs-validation" action="home_admin" novalidate="novalidate">
                        <div class="mb-3"><label class="form-label" for="card-email">Email*</label><input class="form-control" id="card-email" type="email" name="email" placeholder="Alamat email"
                          pattern="^([a-zA-Z0-9_.-])+@(([a-zA-Z0-9-])+.)+([a-zA-Z0-9]{2,4})+$" required="required"/>
                          <div class="invalid-feedback">Email wajib diisi.</div>
                        </div>
                        <div class="mb-3">
                          <div class="d-flex justify-content-between"><label class="form-label" for="card-password">Password*</label></div><input class="form-control" id="card-password" placeholder="Password" required="required" type="password" />
                          <div class="invalid-feedback">Password wajib diisi.</div>
                        </div>
                        {{-- <div class="row flex-between-center">
                          <div class="col-auto">
                            <div class="form-check mb-0"><input class="form-check-input" type="checkbox" id="card-checkbox" checked="checked" /><label class="form-check-label mb-0" for="card-checkbox">Remember me</label></div>
                          </div>
                          <div class="col-auto"><a class="fs--1" href="forgot-password.html">Forgot Password?</a></div>
                        </div> --}}
                        <div class="mb-3"><button class="btn btn-primary d-block w-100 mt-3" href="home_admin" type="submit" >Log in</button></div>
                      </form>
                      {{-- <div class="position-relative mt-4">
                        <hr class="bg-300" />
                        <div class="divider-content-center">or log in with</div>
                      </div>
                      <div class="row g-2 mt-2">
                        <div class="col-sm-6"><a class="btn btn-outline-google-plus btn-sm d-block w-100" href="#"><span class="fab fa-google-plus-g me-2" data-fa-transform="grow-8"></span> google</a></div>
                        <div class="col-sm-6"><a class="btn btn-outline-facebook btn-sm d-block w-100" href="#"><span class="fab fa-facebook-square me-2" data-fa-transform="grow-8"></span> facebook</a></div>
                      </div> --}}
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main><!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->

    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="{{asset('admin/vendors/popper/popper.min.js')}}"></script>
    <script src="{{asset('admin/vendors/bootstrap/bootstrap.min.js')}}"></script>
    <script src="{{asset('admin/vendors/anchorjs/anchor.min.js')}}"></script>
    <script src="{{asset('admin/vendors/is/is.min.js')}}"></script>
    <script src="{{asset('admin/vendors/fontawesome/all.min.js')}}"></script>
    <script src="{{asset('admin/vendors/lodash/lodash.min.js')}}"></script>
    <script src="{{asset('admin/../../../polyfill.io/v3/polyfill.min58be.js?features=window.scroll')}}"></script>
    <script src="{{asset('admin/vendors/list.js/list.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/theme.js')}}"></script>
  </body>
</html>