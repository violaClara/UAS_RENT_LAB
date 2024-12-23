@extends('admin_template_navbar')

@section('hello')
    <div class="card mb-3">
        <div class="bg-holder d-none d-lg-block bg-card"
            style="background-image:url(../../assets/img/icons/spot-illustrations/corner-4.png);"></div>
        <!--/.bg-holder-->
        <div class="card-body position-relative">
            <div class="row">
                <div class="col-lg-12">
                    <h3>Selamat datang, Admin!</h3>
                    <p class="mt-2">Pastikan untuk selalu melakukan cross-check di setiap peminjaman ataupun pengembalian!</p>
                </div>
            </div>
        </div>
    </div>
    
@endsection
