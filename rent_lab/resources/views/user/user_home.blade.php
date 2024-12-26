@extends('user.user_template_navbar')

@section('hello')
    <div class="card mb-3">
        <div class="bg-holder d-none d-lg-block bg-card"
            style="background-image:url(../../assets/img/icons/spot-illustrations/corner-4.png);"></div>
        <!--/.bg-holder-->
        <div class="card-body position-relative">
            <div class="row">
                <div class="col-lg-12">
                    <h3>Selamat datang, User!</h3>
                    <p class="mt-2">Pastikan untuk selalu melakukan cross-check di setiap peminjaman ataupun pengembalian!
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="col-xxl-6 px-xxl-2">
        <div class="card h-100">
            <div class="card-header bg-light py-2">
                <div class="row flex-between-center">
                    <div class="col-auto">
                        <h6 class="mb-0" id="rekap_peminjaman">Statistik Peminjaman</h6>
                    </div>
                </div>
            </div>
            <div class="card-body h-100">
                <div class="echart-bar-top-products h-100" data-echart-responsive="true"></div>
            </div>
        </div>
    </div>
@endsection