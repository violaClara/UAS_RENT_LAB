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
    /* Make the section with the background image and overlay */
    #banner {
      position: relative;
      background-image: url("{{ asset('admin/assets/img/generic/computer.jpeg') }}");
      background-size: cover;
      background-position: center;
      height: 100vh; /* Full viewport height */
    }

    /* Create the overlay effect */
    #banner::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.77); /* Black overlay with transparency */
      z-index: 1;
    }

    /* Content inside the banner */
    #banner .container {
      position: relative;
      z-index: 2;
      padding-top: 70px;
    }

    /* Styling for the heading and buttons */
    #banner h1, #banner p {
      color: white;
      z-index: 2;
    }

    .btn-outline-light {
      border-color: white;
      color: white;
    }

    .btn-outline-light:hover {
      background-color: white;
      color: black;
    }
  </style>
</head>

<body>
  <!-- ===============================================-->
  <!--    Main Content-->
  <!-- ===============================================-->
  <main class="main" id="top">
    <nav class="navbar navbar-standard navbar-expand-lg fixed-top navbar-dark" data-navbar-darken-on-scroll="data-navbar-darken-on-scroll" style="padding: 30px 0;">
      <div class="container">
        <a class="navbar-brand" href="landing_page">
          <span class="text-white dark__text-white" style="font-size: 26px;">Sistem Inventaris Laboratorium</span>
        </a>
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarStandard" aria-controls="navbarStandard" aria-expanded="false" aria-label="Toggle navigation"></button>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <div class="theme-control-toggle fa-icon-wait px-2">
              <input class="form-check-input ms-0 theme-control-toggle-input" id="themeControlToggle" type="checkbox" data-theme-control="theme" value="dark" />
              <label class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch to light theme">
                <span class="fas fa-sun fs-0"></span>
              </label>
              <label class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch to dark theme">
                <span class="fas fa-moon fs-0"></span>
              </label>
            </div>
          </li>
        </ul>
      </div>
    </nav>

    <!-- Banner Section -->
    <section class="py-0 overflow-hidden light" id="banner" style="padding-bottom: 259px !important;">
      <div class="container" style="padding-top: 70px">
        <div class="row flex-center pt-8 pt-lg-10 pb-lg-9 pb-xl-0">
          <div class="col-md-11 col-lg-8 col-xl-4 pb-7 pb-xl-9 text-center text-xl-start">
            <h1 class="text-white fw-light" style="font-weight: 600 !important; padding-bottom: 20px;">Selamat Datang!</h1>
            <p class="lead text-white opacity-75" style="padding-bottom: 20px;">Sebuah sistem untuk pengelolaan inventaris laboratorium dan peminjaman alat</p>

            <a class="btn btn-outline-light border-2 rounded-pill btn-lg mt-4 fs-0 py-2" style="margin-top: 15px !important;" href="home_user">Masuk sebagai User<span class="fas fa-play ms-2" data-fa-transform="shrink-6 down-1"></span></a>
            <a class="btn btn-outline-light border-2 rounded-pill btn-lg mt-4 fs-0 py-2" style="margin-top: 15px !important;" href="admin_login">Masuk sebagai Admin<span class="fas fa-play ms-2" data-fa-transform="shrink-6 down-1"></span></a>
          </div>
          <div class="col-xl-7 offset-xl-1 align-self-end mt-4 mt-xl-0">
            <a class="img-landing-banner rounded" href="landing_page">
              <img class="img-fluid" src="{{ asset('admin/assets/img/generic/computer.jpeg') }}" alt="" />
            </a>
          </div>
        </div>
      </div>
    </section><!-- <section> close ============================-->
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
