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
  <style>
    
  </style>
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
      <nav class="navbar navbar-standard navbar-expand-lg fixed-top navbar-dark" data-navbar-darken-on-scroll="data-navbar-darken-on-scroll" style="padding: 30px 0;">
        <div class="container"><a class="navbar-brand" href="landing_page"><span class="text-white dark__text-white" style="font-size: 26px;">Sistem Inventaris Laboratorium</span></a><button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarStandard" aria-controls="navbarStandard" aria-expanded="false" aria-label="Toggle navigation"></button>
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <div class="theme-control-toggle fa-icon-wait px-2"><input
                        class="form-check-input ms-0 theme-control-toggle-input" id="themeControlToggle"
                        type="checkbox" data-theme-control="theme" value="dark" /><label
                        class="mb-0 theme-control-toggle-label theme-control-toggle-light"
                        for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left"
                        title="Switch to light theme"><span class="fas fa-sun fs-0"></span></label><label
                        class="mb-0 theme-control-toggle-label theme-control-toggle-dark"
                        for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left"
                        title="Switch to dark theme"><span class="fas fa-moon fs-0"></span></label>
                </div>
            </li>
              {{-- <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" id="navbarDropdownLogin" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Login</a>
                <div class="dropdown-menu dropdown-caret dropdown-menu-end dropdown-menu-card" aria-labelledby="navbarDropdownLogin">
                  <div class="card shadow-none navbar-card-login">
                    <div class="card-body fs--1 p-4 fw-normal">
                      <div class="row text-start justify-content-between align-items-center mb-2">
                        <div class="col-auto">
                          <h5 class="mb-0">Log in</h5>
                        </div>
                        <div class="col-auto">
                          <p class="fs--1 text-600 mb-0">or <a href="authentication/simple/register.html">Create an account</a></p>
                        </div>
                      </div>
                      <form>
                        <div class="mb-3"><input class="form-control" type="email" placeholder="Email address" /></div>
                        <div class="mb-3"><input class="form-control" type="password" placeholder="Password" /></div>
                        <div class="row flex-between-center">
                          <div class="col-auto">
                            <div class="form-check mb-0"><input class="form-check-input" type="checkbox" id="modal-checkbox" /><label class="form-check-label mb-0" for="modal-checkbox">Remember me</label></div>
                          </div>
                          <div class="col-auto"><a class="fs--1" href="authentication/simple/forgot-password.html">Forgot Password?</a></div>
                        </div>
                        <div class="mb-3"><button class="btn btn-primary d-block w-100 mt-3" type="submit" name="submit">Log in</button></div>
                      </form>
                      <div class="position-relative mt-4">
                        <hr class="bg-300" />
                        <div class="divider-content-center">or log in with</div>
                      </div>
                      <div class="row g-2 mt-2">
                        <div class="col-sm-6"><a class="btn btn-outline-google-plus btn-sm d-block w-100" href="#"><span class="fab fa-google-plus-g me-2" data-fa-transform="grow-8"></span> google</a></div>
                        <div class="col-sm-6"><a class="btn btn-outline-facebook btn-sm d-block w-100" href="#"><span class="fab fa-facebook-square me-2" data-fa-transform="grow-8"></span> facebook</a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="nav-item"><a class="nav-link" href="#!" data-bs-toggle="modal" data-bs-target="#exampleModal">Register</a></li> --}}
            </ul>
          </div>
      </nav>
      {{-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-body p-4">
              <div class="row text-start justify-content-between align-items-center mb-2">
                <div class="col-auto">
                  <h5 id="modalLabel">Register</h5>
                </div>
                <div class="col-auto">
                  <p class="fs--1 text-600 mb-0">Have an account? <a href="authentication/simple/login.html">Login</a></p>
                </div>
              </div>
              <form>
                <div class="mb-3"><input class="form-control" type="text" autocomplete="on" placeholder="Name" /></div>
                <div class="mb-3"><input class="form-control" type="email" autocomplete="on" placeholder="Email address" /></div>
                <div class="row gx-2">
                  <div class="mb-3 col-sm-6"><input class="form-control" type="password" autocomplete="on" placeholder="Password" /></div>
                  <div class="mb-3 col-sm-6"><input class="form-control" type="password" autocomplete="on" placeholder="Confirm Password" /></div>
                </div>
                <div class="form-check"><input class="form-check-input" type="checkbox" id="modal-register-checkbox" /><label class="form-label" for="modal-register-checkbox">I accept the <a href="#!">terms </a>and <a href="#!">privacy policy</a></label></div>
                <div class="mb-3"><button class="btn btn-primary d-block w-100 mt-3" type="submit" name="submit">Register</button></div>
              </form>
              <div class="position-relative mt-4">
                <hr class="bg-300" />
                <div class="divider-content-center">or register with</div>
              </div>
              <div class="row g-2 mt-2">
                <div class="col-sm-6"><a class="btn btn-outline-google-plus btn-sm d-block w-100" href="#"><span class="fab fa-google-plus-g me-2" data-fa-transform="grow-8"></span> google</a></div>
                <div class="col-sm-6"><a class="btn btn-outline-facebook btn-sm d-block w-100" href="#"><span class="fab fa-facebook-square me-2" data-fa-transform="grow-8"></span> facebook</a></div>
              </div>
            </div>
          </div>
        </div>
      </div> --}}

      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-0 overflow-hidden light" id="banner" style="padding-bottom: 259px !important;">
        <div class="bg-holder overlay" style="background-color:rgb(57, 80, 92) ;background-position: center bottom;"></div>
        <!--/.bg-holder-->
        <div class="container" style="padding-top: 70px">
          <div class="row flex-center pt-8 pt-lg-10 pb-lg-9 pb-xl-0">
            <div class="col-md-11 col-lg-8 col-xl-4 pb-7 pb-xl-9 text-center text-xl-start">
              <h1 class="text-white fw-light" style="font-weight: 600 !important; padding-bottom: 20px;">Selamat Datang!</h1>
              <p class="lead text-white opacity-75" style="padding-bottom: 20px;">Sebuah sistem untuk pengelolaan inventaris laboratorium dan peminjaman alat</p>
              
              <a class="btn btn-outline-light border-2 rounded-pill btn-lg mt-4 fs-0 py-2" style="margin-top: 15px !important;" href="home_user">Masuk sebagai User<span class="fas fa-play ms-2" data-fa-transform="shrink-6 down-1"></span></a>
              <a class="btn btn-outline-light border-2 rounded-pill btn-lg mt-4 fs-0 py-2" style="margin-top: 15px !important;" href="admin_login">Masuk sebagai Admin<span class="fas fa-play ms-2" data-fa-transform="shrink-6 down-1"></span></a>
            </div>
            <div class="col-xl-7 offset-xl-1 align-self-end mt-4 mt-xl-0"><a class="img-landing-banner rounded" href="landing_page"><img class="img-fluid" src="{{asset('admin/assets/img/generic/dashboard-alt.jpg')}}" alt="" /></a></div>
          </div>
        </div><!-- end of .container-->
      </section><!-- <section> close ============================-->
      <!-- ============================================-->
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
    <script src="{{asset('admin/vendors/swiper/swiper-bundle.min.js')}}"> </script>
    <script src="{{asset('admin/vendors/typed.js/typed.js')}}"></script>
    <script src="{{asset('admin/vendors/fontawesome/all.min.js')}}"></script>
    <script src="{{asset('admin/vendors/lodash/lodash.min.js')}}"></script>
    <script src="{{asset('admin/../../../polyfill.io/v3/polyfill.min58be.js?features=window.scroll')}}"></script>
    <script src="{{asset('admin/vendors/list.js/list.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/theme.js')}}"></script>
  </body>
</html>