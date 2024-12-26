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
        <div class="container" data-layout="container">
            <script>
                var isFluid = JSON.parse(localStorage.getItem('isFluid'));
                if (isFluid) {
                    var container = document.querySelector('[data-layout]');
                    container.classList.remove('container');
                    container.classList.add('container-fluid');
                }
            </script>
            <nav class="navbar navbar-light navbar-vertical navbar-expand-xl" style="display: none;">
                <script>
                    var navbarStyle = localStorage.getItem("navbarStyle");
                    if (navbarStyle && navbarStyle !== 'transparent') {
                        document.querySelector('.navbar-vertical').classList.add(`navbar-${navbarStyle}`);
                    }
                </script>
                <div class="d-flex align-items-center">
                    <div class="toggle-icon-wrapper">
                        <button class="btn navbar-toggler-humburger-icon navbar-vertical-toggle"
                            data-bs-toggle="tooltip" data-bs-placement="left" title="Toggle Navigation"><span
                                class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
                    </div><a class="navbar-brand" href="home_admin">
                        <div class="d-flex align-items-center py-3"><span class="font-sans-serif"
                                style="font-size: 20px">Sistem Inventaris</span></div>
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
                    <div class="navbar-vertical-content scrollbar">
                        <ul class="navbar-nav flex-column mb-3" id="navbarVerticalNav">
                            <!-- Dashboard Section -->
                            <li class="nav-item">
                                <a class="nav-link dropdown-indicator" href="#dashboard" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="dashboard">
                                    <div class="d-flex align-items-center">
                                        <span class="nav-link-icon"><span class="fas fa-chart-pie"></span></span>
                                        <span class="nav-link-text ps-1">Dashboard Admin</span>
                                    </div>
                                </a>
                                <ul class="nav collapse" id="dashboard">
                                    <li class="nav-item"><a class="nav-link" href="profil_admin">
                                        <div class="d-flex align-items-center">
                                            <span class="nav-link-text ps-1">Profil Admin</span>
                                        </div>
                                    </a></li>
                                    <li class="nav-item"><a class="nav-link" href="home_admin">
                                        <div class="d-flex align-items-center">
                                            <span class="nav-link-text ps-1">Statistik Peminjaman</span>
                                        </div>
                                    </a></li>
                                </ul>
                            </li>
                            
                            <!-- Data Section -->
                            <li class="nav-item">
                                <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                                    <div class="col-auto navbar-vertical-label">Data</div>
                                    <div class="col ps-0">
                                        <hr class="mb-0 navbar-vertical-divider" />
                                    </div>
                                </div>
                                <a class="nav-link" href="admin_inventaris">
                                    <div class="d-flex align-items-center">
                                        <span class="nav-link-icon"><span class="fas fa-table"></span></span>
                                        <span class="nav-link-text ps-1">Data Inventaris</span>
                                    </div>
                                </a>
                                <a class="nav-link" href="admin_peminjaman">
                                    <div class="d-flex align-items-center">
                                        <span class="nav-link-icon"><span class="fas fa-table"></span></span>
                                        <span class="nav-link-text ps-1">Data Peminjaman</span>
                                    </div>
                                </a>
                                <a class="nav-link" href="admin_riwayat">
                                    <div class="d-flex align-items-center">
                                        <span class="nav-link-icon"><span class="fas fa-table"></span></span>
                                        <span class="nav-link-text ps-1">Riwayat Peminjaman</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                
            </nav>
            <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand-xl" style="display: none;">
            </nav>
            <div class="content">
                <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand" style="display: none;">
                    <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
                    <a class="navbar-brand" href="home_admin">
                        <div class="d-flex align-items-center py-3"><span class="font-sans-serif"
                                style="font-size: 20px">Sistem Inventaris</span></div>
                    </a>

                    <ul class="navbar-nav navbar-nav-icons ms-auto flex-row align-items-center">
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
                        <li class="nav-item dropdown"><a class="nav-link pe-0 ps-2" id="navbarDropdownUser"
                            role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="avatar avatar-xl">
                                <img class="rounded-circle" src="{{ asset('admin/assets/img/icons/profile.png') }}"
                                    alt="" />
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end py-0"
                            aria-labelledby="navbarDropdownUser">
                            <div class="bg-white dark__bg-1000 rounded-2 py-2">
                                <a class="dropdown-item" href="profil_admin">Profile &amp;
                                    account</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="admin_logout">Logout</a>
                            </div>
                        </div>
                    </li>
                    </ul>
                </nav>
                <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand-lg" style="display: none;"
                    data-move-target="#navbarVerticalNav" data-navbar-top="combo">
                    <ul class="navbar-nav navbar-nav-icons ms-auto flex-row align-items-center">
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
                        
                        <li class="nav-item dropdown"><a class="nav-link pe-0 ps-2" id="navbarDropdownUser"
                                role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <div class="avatar avatar-xl">
                                    <img class="rounded-circle"
                                        src="{{ asset('admin/assets/img/icons/profile.png') }}" alt="" />
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end py-0"
                                aria-labelledby="navbarDropdownUser">
                                <div class="bg-white dark__bg-1000 rounded-2 py-2">
                                    <a class="dropdown-item" href="profil_admin">Profile &amp;
                                        account</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="logout">Logout</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </nav>
                <script>
                    var navbarPosition = localStorage.getItem('navbarPosition');
                    var navbarVertical = document.querySelector('.navbar-vertical');
                    var navbarTopVertical = document.querySelector('.content .navbar-top');
                    var navbarTop = document.querySelector('[data-layout] .navbar-top');
                    var navbarTopCombo = document.querySelector('.content [data-navbar-top="combo"]');
                    if (navbarPosition === 'top') {
                        navbarTop.removeAttribute('style');
                        navbarTopVertical.remove(navbarTopVertical);
                        navbarVertical.remove(navbarVertical);
                        navbarTopCombo.remove(navbarTopCombo);
                    } else if (navbarPosition === 'combo') {
                        navbarVertical.removeAttribute('style');
                        navbarTopCombo.removeAttribute('style');
                        navbarTop.remove(navbarTop);
                        navbarTopVertical.remove(navbarTopVertical);
                    } else {
                        navbarVertical.removeAttribute('style');
                        navbarTopVertical.removeAttribute('style');
                        navbarTop.remove(navbarTop);
                        navbarTopCombo.remove(navbarTopCombo);
                    }
                </script>
                @yield('hello')
                <div class="row g-0">
                    @yield('content')
                </div>
            </div>
        </div>
    </main>

    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="{{ asset('admin/vendors/popper/popper.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/anchorjs/anchor.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/is/is.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/fontawesome/all.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/lodash/lodash.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/plyr/plyr.polyfilled.min.js/polyfill.io/v3/polyfill.min58be.js?features=window.scroll') }}"></script>
    {{-- <script src="{{ asset('admin/../../../polyfill.io/v3/polyfill.min58be.js?features=window.scroll') }}"></script> --}}
    <script src="{{ asset('admin/vendors/list.js/list.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/theme.js') }}"></script>
</body>

</html>
