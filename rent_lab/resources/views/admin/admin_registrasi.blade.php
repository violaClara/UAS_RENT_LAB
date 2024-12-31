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
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap"
        rel="stylesheet">
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
    <main class="main" id="top">
        <div class="container-fluid">
            <div class="row min-vh-100 flex-center g-0">
                <div class="col-lg-8 col-xxl-5 py-3 position-relative">
                    <div class="card overflow-hidden z-index-1">
                        <div class="card-body p-0">
                            <div class="row g-0 h-100">
                                <div class="col-md-5 text-center bg-card-gradient">
                                    <div class="position-relative p-4 pt-md-5 pb-md-7 light">
                                        <div class="z-index-1 position-relative">
                                            <a class="link-light mb-4 font-sans-serif fs-4 d-inline-block fw-bolder" href="landing_page" style="font-size: 21px !important;">
                                                Sistem Inventaris Laboratorium dan Peminjaman Alat
                                            </a>
                                            <p class="opacity-75 text-white" style="font-size: 14px !important;">
                                                Melalui sistem ini, admin dapat melakukan pengelolaan inventaris laboratorium dan peminjaman alat dengan lebih efisien dan sistematis.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="mt-3 mb-4 mt-md-4 mb-md-5 light">
                                        <p class="pt-3 text-white">Anda sudah memiliki akun?<br><a class="btn btn-outline-light mt-2 px-4" href="admin_login">Log In</a></p>
                                    </div>
                                </div>
                                <div class="col-md-7 d-flex flex-center">
                                    <div class="p-4 p-md-5 flex-grow-1">
                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif

                                        <h3>Registrasi</h3>
                                        <form class="needs-validation" action="{{ route('admin_registrasi.submit') }}" method="POST" novalidate>
                                            @csrf
                                            <div class="mb-3">
                                                <label class="form-label" for="card-name">Nama*</label>
                                                <input class="form-control" type="text" name="name" id="card-name" placeholder="Nama" required />
                                                <div class="invalid-feedback">Nama wajib diisi.</div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="card-email">Email*</label>
                                                <input class="form-control" type="email" name="email" id="card-email" placeholder="Alamat email" required />
                                                <div class="invalid-feedback">Email wajib diisi.</div>
                                            </div>
                                            <div class="row gx-2">
                                                <div class="mb-3 col-sm-6">
                                                    <label class="form-label" for="card-password">Password*</label>
                                                    <input class="form-control" type="password" name="password" id="card-password" placeholder="Password" required />
                                                    <div class="invalid-feedback">Password wajib diisi.</div>
                                                </div>
                                                <div class="mb-3 col-sm-6">
                                                    <label class="form-label" for="card-confirm-password">Konfirmasi Password*</label>
                                                    <input class="form-control" type="password" name="password_confirmation" id="card-confirm-password" placeholder="Konfirmasi Password" required />
                                                    <div class="invalid-feedback">Konfirmasi password wajib diisi.</div>
                                                </div>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="card-register-checkbox" required />
                                                <label class="form-label" for="card-register-checkbox">
                                                    Saya menyetujui
                                                    <a data-bs-toggle="modal" data-bs-target="#ketentuan" class="link-primary" style="cursor: pointer;">ketentuan</a>
                                                    dan
                                                    <a data-bs-toggle="modal" data-bs-target="#kebijakan_privasi" class="link-primary" style="cursor: pointer;">kebijakan privasi*</a>
                                                </label>
                                                <div class="invalid-feedback">Ketentuan dan kebijakan privasi wajib dicentang.</div>
                                            </div>
                                            <div class="mb-3">
                                                <button class="btn btn-primary d-block w-100 mt-3" type="submit">Registrasi</button>
                                            </div>
                                        </form>

                                        <!-- Modal Ketentuan -->
                                        <div class="modal fade" id="ketentuan" data-bs-backdrop="false" tabindex="-1" aria-labelledby="ketentuanLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-scrollable">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="ketentuanLabel">Ketentuan Pengguna</h5>
                                                        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h5>Syarat dan Ketentuan</h5>
                                                        <ul>
                                                            <li><b>Penerimaan Syarat</b><br> Dengan membuat akun pada Sistem Inventaris Laboratorium dan Peminjaman Alat, Anda setuju untuk mematuhi dan terikat oleh Syarat dan Ketentuan ini. Jika Anda tidak setuju, Anda tidak diperbolehkan menggunakan Sistem.</li>
                                                            <li><b>Akun Pengguna</b><br> Anda harus memberikan informasi yang akurat dan lengkap selama proses pendaftaran. Anda bertanggung jawab untuk menjaga kerahasiaan akun Anda. Segera laporkan jika ada penggunaan tidak sah.</li>
                                                            <li><b>Penggunaan yang Diizinkan</b><br> Sistem hanya untuk pengelolaan inventaris dan peminjaman alat. Aktivitas ilegal atau melanggar hak pihak lain dilarang.</li>
                                                            <li><b>Akurasi Data</b><br> Pengguna bertanggung jawab atas keakuratan data. Sistem tidak bertanggung jawab atas masalah akibat data yang salah.</li>
                                                            <li><b>Ketersediaan Sistem</b><br> Kami berupaya memastikan akses tanpa gangguan tetapi tidak dapat menjamin sepenuhnya.</li>
                                                            <li><b>Penghentian</b><br> Kami berhak menangguhkan atau menghentikan akun jika terjadi pelanggaran.</li>
                                                            <li><b>Batasan Tanggung Jawab</b><br> Kami tidak bertanggung jawab atas kerugian kecuali diwajibkan oleh hukum.</li>
                                                            <li><b>Perubahan Syarat</b><br> Kami dapat memperbarui Syarat ini kapan saja. Penggunaan Sistem setelah perubahan berarti Anda menerima perubahan tersebut.</li>
                                                        </ul>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button class="btn btn-primary" type="button" data-bs-dismiss="modal">Mengerti</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Modal Kebijakan Privasi -->
                                        <div class="modal fade" id="kebijakan_privasi" data-bs-backdrop="false" tabindex="-1" aria-labelledby="kebijakan_privasiLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-scrollable">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="kebijakan_privasiLabel">Kebijakan Privasi Pengguna</h5>
                                                        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h5>Kebijakan Privasi</h5>
                                                        <ul>
                                                            <li><b>Pengumpulan Data</b><br> Kami mengumpulkan data pribadi seperti nama dan alamat email serta data penggunaan seperti riwayat login.</li>
                                                            <li><b>Tujuan Pengumpulan Data</b><br> Data digunakan untuk pengelolaan akun, melacak aktivitas, dan meningkatkan fungsionalitas Sistem.</li>
                                                            <li><b>Berbagi Data</b><br> Data tidak akan dibagikan kecuali diwajibkan oleh hukum atau untuk pengelolaan Sistem.</li>
                                                            <li><b>Keamanan Data</b><br> Kami melindungi data Anda dengan standar keamanan industri, namun tidak menjamin keamanan absolut.</li>
                                                            <li><b>Penyimpanan Data</b><br> Data disimpan selama akun aktif atau diperlukan untuk tujuan operasional.</li>
                                                            <li><b>Hak Pengguna</b><br> Anda berhak mengakses, memperbarui, atau menghapus data Anda.</li>
                                                            <li><b>Perubahan Kebijakan</b><br> Kami dapat memperbarui Kebijakan Privasi dan memberitahukan perubahan signifikan.</li>
                                                        </ul>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button class="btn btn-primary" type="button" data-bs-dismiss="modal">Mengerti</button>
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
            </div>
        </div>
    </main>

    <script src="{{ asset('admin/vendors/popper/popper.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/anchorjs/anchor.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/is/is.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/fontawesome/all.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/lodash/lodash.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/theme.js') }}"></script>
</body>
</html>