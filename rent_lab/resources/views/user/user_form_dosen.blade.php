@extends('user.user_template_navbar')

@section('content')
<div class="col-lg-6 col-xl-12 col-xxl-6 h-100">
    <div class="d-flex mb-4">
        <span class="fa-stack me-2 ms-n1">
            <i class="fas fa-circle fa-stack-2x text-300"></i>
            <i class="fa-inverse fa-stack-1x text-primary fas fa-check-double"></i>
        </span>
        <div class="col">
            <h5 class="mb-0 text-primary position-relative">
                <span class="bg-200 dark__bg-1100 pe-3">Formulir Peminjaman Alat Dosen / Staff Akademik</span>
                <span class="border position-absolute top-50 translate-middle-y w-100 start-0 z-index--1"></span>
            </h5>
            <p class="mb-0">Untuk melakukan peminjaman, silakan isi data pada formulir dengan sesuai!</p>
        </div>
    </div>

    <div class="card theme-wizard h-100 mb-5">
        <div class="card-header bg-light pt-3 pb-2">
            <ul class="nav justify-content-between nav-wizard">
                <li class="nav-item">
                    <a class="nav-link {{ session('form_valid') ? '' : 'active' }} fw-semi-bold"
                       href="#bootstrap-wizard-validation-tab1"
                       data-bs-toggle="tab">
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
                       data-bs-toggle="tab">
                        <span class="nav-item-circle-parent">
                            <span class="nav-item-circle">
                                <span class="fas fa-check"></span>
                            </span>
                        </span>
                        <span class="d-none d-md-block mt-1 fs--1">Selesai</span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="card-body py-4">
            <div class="tab-content">
                <!-- Formulir Peminjaman -->
                <div class="tab-pane {{ session('form_valid') ? '' : 'active' }}" id="bootstrap-wizard-validation-tab1">
                    <form action="{{ route('user_form_dosen.store') }}" method="POST" class="needs-validation" novalidate>
                        @csrf
                        <div class="mb-3">
                            <label class="form-label" for="status">Status*</label>
                            <select class="form-select" name="status" id="status" required>
                                <option value="">Pilih status peminjam...</option>
                                <option value="Dosen">Dosen</option>
                                <option value="Staff Akademik">Staff Akademik</option>
                            </select>
                            <div class="invalid-feedback">Status peminjam wajib diisi.</div>
                        </div>
                        
                        <!-- Identitas Peminjam -->
                        <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                            <div class="col-auto navbar-vertical-label">Identitas Peminjam</div>
                            <div class="col ps-0"><hr class="mb-0 navbar-vertical-divider" /></div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="nama">Nama*</label>
                            <input class="form-control" type="text" name="nama" id="nama" placeholder="Nama" required />
                            <div class="invalid-feedback">Nama wajib diisi.</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="nip">NIP*</label>
                            <input class="form-control" type="text" name="nip" id="nip" placeholder="NIP" required />
                            <div class="invalid-feedback">NIP wajib diisi.</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="email">Email*</label>
                            <input class="form-control" type="email" name="email" id="email" placeholder="Email" required />
                            <div class="invalid-feedback">Email wajib diisi.</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="notelp">Nomor Telepon*</label>
                            <input class="form-control" type="number" name="notelp" id="notelp" placeholder="Nomor Telepon" required />
                            <div class="invalid-feedback">Nomor telepon wajib diisi.</div>
                        </div>
                        
                        <!-- Peminjaman -->
                        <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                            <div class="col-auto navbar-vertical-label">Peminjaman</div>
                            <div class="col ps-0"><hr class="mb-0 navbar-vertical-divider" /></div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="alat">Alat*</label>
                                   <select class="form-select" name="alat" required id="alat">
                                    <option value="">Pilih Alat ...</option>
                                    @foreach ($tools as $tool)
                                        <option value="{{ $tool->tool_name }}">{{ $tool->tool_name }}</option>

                                    @endforeach
                                </select>
                            <div class="invalid-feedback">Alat wajib diisi.</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="jumlahAlat">Jumlah Alat*</label>
                            <input class="form-control" type="number" name="jumlahAlat" id="jumlahAlat" placeholder="Jumlah alat" required />
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

                <!-- Selesai -->
                <div class="tab-pane text-center {{ session('form_valid') ? 'active' : '' }}" id="bootstrap-wizard-validation-tab2">
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
        // Peralihan tab otomatis
        if (@json(session('form_valid', false))) {
            const selesaiTab = document.querySelector('a[href="#bootstrap-wizard-validation-tab2"]');
            selesaiTab.click();
        }
    });
</script>
@endsection
