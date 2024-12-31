@extends('user.user_template_navbar')

@section('content')
    <div class="col-lg-6 col-xl-12 col-xxl-6 h-100">
        <div class="d-flex mb-4"><span class="fa-stack me-2 ms-n1"><i class="fas fa-circle fa-stack-2x text-300"></i><i
                    class="fa-inverse fa-stack-1x text-primary fas fa-check-double"></i></span>
            <div class="col">
                <h5 class="mb-0 text-primary position-relative"><span class="bg-200 dark__bg-1100 pe-3">Formulir Peminjaman
                        Alat Mahasiswa</span><span
                        class="border position-absolute top-50 translate-middle-y w-100 start-0 z-index--1"></span></h5>
                <p class="mb-0">Untuk melakukan peminjaman, silakan isi data pada formulir dengan sesuai!</p>
            </div>
        </div>
        <div class="card theme-wizard h-100 mb-5">
        <ul class="nav justify-content-between nav-wizard">
    <li class="nav-item">
        <a class="nav-link {{ session('form_valid') ? '' : 'active' }} fw-semi-bold"
           href="#bootstrap-wizard-validation-tab1"
           data-bs-toggle="tab"
           data-wizard-step="data-wizard-step">
            <span class="nav-item-circle-parent">
                <span class="nav-item-circle">
                    <span class="fas fa-user"></span>
                </span>
            </span>
            <span class="d-none d-md-block mt-1 fs--1">Formulir Peminjaman</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ session('form_valid') ? 'active' : 'disabled' }} fw-semi-bold"
           href="#bootstrap-wizard-validation-tab2"
           data-bs-toggle="tab"
           data-wizard-step="data-wizard-step">
            <span class="nav-item-circle-parent">
                <span class="nav-item-circle">
                    <span class="fas fa-check"></span>
                </span>
            </span>
            <span class="d-none d-md-block mt-1 fs--1">Selesai</span>
        </a>
    </li>
</ul>

            <div class="card-body py-4" id="wizard-controller">
                <div class="tab-content">
                <div class="tab-pane {{ session('form_valid') ? '' : 'active' }} px-sm-3 px-md-5" 
     role="tabpanel" 
     aria-labelledby="bootstrap-wizard-validation-tab1" 
     id="bootstrap-wizard-validation-tab1" 
     style="{{ session('form_valid') ? 'display: none;' : '' }}">
                        <!-- Formulir Peminjaman -->
                        <form class="needs-validation" method="POST" action="{{ route('user_form_mhs.store') }}" novalidate="novalidate">
                        @csrf
                            <div class="mb-3">
                                <label class="form-label" for="status">Status*</label>
                                <select class="form-select" name="status" id="status" required>
                                    <option value="">Pilih status peminjam ...</option>
                                    <option value="Mahasiswa">Mahasiswa</option>
                                </select>
                                <div class="invalid-feedback">Status peminjam wajib diisi.</div>
                            </div>

                            <!-- Identitas Peminjam -->
                            <div class="mb-3">
                                <label class="form-label" for="nama">Nama*</label>
                                <input class="form-control" type="text" name="nama" placeholder="Nama" required id="nama">
                                <div class="invalid-feedback">Nama wajib diisi.</div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="nim">NIM*</label>
                                <input class="form-control" type="text" name="nim" placeholder="NIM" required id="nim">
                                <div class="invalid-feedback">NIM wajib diisi.</div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="email">Email*</label>
                                <input class="form-control" type="email" name="email" placeholder="Alamat email" required id="email">
                                <div class="invalid-feedback">Email wajib diisi.</div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="notelp">Nomor Telepon*</label>
                                <input class="form-control" type="number" name="notelp" placeholder="Nomor telepon" required id="notelp">
                                <div class="invalid-feedback">Nomor telepon wajib diisi.</div>
                            </div>

                            <!-- Peminjaman -->
                            <div class="mb-3">
                                <label for="alat">Alat*</label>
                                <select class="form-select" name="alat" required id="alat">
                                    <option value="">Pilih Alat ...</option>
                                    @foreach ($tools as $tool)
                                        <option value="{{ $tool->tool_name }}">{{ $tool->tool_name }}</option>

                                    @endforeach
                                </select>
                                <div class="invalid-feedback">Alat wajib diisi.</div>
                            </div>  
                            <div class="mb-3">
                                <label for="jumlahAlat">Jumlah Alat*</label>
                                <input class="form-control" type="number" name="jumlahAlat" placeholder="Jumlah alat" required id="jumlahAlat">
                                <div class="invalid-feedback">Jumlah alat wajib diisi.</div>
                            </div>
                          <div class="mb-3">
                                <label for="tanggal">Tanggal Peminjaman*</label>
                                <input class="form-control" type="date" name="tanggal" required id="tanggal" min="{{ date('Y-m-d') }}">
                                <div class="invalid-feedback">Tanggal peminjaman tidak boleh kurang dari hari ini.</div>
                            </div>

                            <div class="d-flex justify-content-between">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>

                    <!-- Tab Selesai -->
                    <div class="tab-pane text-center px-sm-3 px-md-5 {{ session('form_valid') ? 'active' : '' }}" 
     role="tabpanel" 
     aria-labelledby="bootstrap-wizard-validation-tab2" 
     id="bootstrap-wizard-validation-tab2" 
     style="{{ session('form_valid') ? '' : 'display: none;' }}">
    <h4>Formulir peminjaman telah berhasil terkirim!</h4>
    <p>Permintaan peminjamanmu akan segera diproses. Info lebih lanjut silakan hubungi admin.</p>
    <a class="btn btn-primary" href="{{ route('form_user_mhs') }}">Kembali</a>
</div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const formValid = @json(session('form_valid', false));

        if (formValid) {
            const selesaiTab = document.querySelector('a[href="#bootstrap-wizard-validation-tab2"]');
            selesaiTab.click(); // Beralih ke tab selesai
        }
    });
</script>
@endsection




