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
            <div class="card-header bg-light pt-3 pb-2">
                <ul class="nav justify-content-between nav-wizard">
                    <li class="nav-item"><a class="nav-link active fw-semi-bold" href="#bootstrap-wizard-validation-tab1"
                            data-bs-toggle="tab" data-wizard-step="data-wizard-step"><span
                                class="nav-item-circle-parent"><span class="nav-item-circle"><span
                                        class="fas fa-user"></span></span></span><span
                                class="d-none d-md-block mt-1 fs--1">Formulir Peminjaman</span></a></li>
                    <li class="nav-item"><a class="nav-link {{ session('form_valid') ? '' : 'disabled' }} fw-semi-bold" href="#bootstrap-wizard-validation-tab2"
                            data-bs-toggle="tab" data-wizard-step="data-wizard-step"><span
                                class="nav-item-circle-parent"><span class="nav-item-circle"><span
                                        class="fas fa-check"></span></span></span><span
                                class="d-none d-md-block mt-1 fs--1">Selesai</span></a></li>
                </ul>
            </div>
            <div class="card-body py-4" id="wizard-controller">
                <div class="tab-content">
                    <div class="tab-pane active px-sm-3 px-md-5" role="tabpanel"
                        aria-labelledby="bootstrap-wizard-validation-tab1" id="bootstrap-wizard-validation-tab1">
                        <form class="needs-validation" novalidate="novalidate">
                            <div class="mb-3">
                                <label class="form-label" for="bootstrap-wizard-validation-wizard-status">Status*</label>
                                <select class="form-select" name="status" id="bootstrap-wizard-validation-wizard-status"
                                    required="required" data-wizard-validate-status="true">
                                    <option value="">Pilih status peminjam ...</option>
                                    <option value="Mahasiswa">Mahasiswa</option>
                                </select>
                                <div class="invalid-feedback">Status peminjam wajib diisi.</div>
                            </div>
                            <br>
                            <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                                <div class="col-auto navbar-vertical-label">Identitas Peminjam</div>
                                <div class="col ps-0">
                                    <hr class="mb-0 navbar-vertical-divider" />
                                </div>
                            </div>
                            <br>
                            <div class="mb-3"><label class="form-label"
                                    for="bootstrap-wizard-validation-wizard-nama">Nama*</label><input class="form-control"
                                    type="text" name="nama" placeholder="Nama" required="required"
                                    id="bootstrap-wizard-validation-wizard-nama" data-wizard-validate-nama="true" />
                                <div class="invalid-feedback">Nama wajib diisi.</div>
                            </div>
                            <div class="mb-3"><label class="form-label"
                                    for="bootstrap-wizard-validation-wizard-nim">NIM*</label><input class="form-control"
                                    type="text" name="nim" placeholder="NIM" required="required"
                                    id="bootstrap-wizard-validation-wizard-nim" data-wizard-validate-ni="true" />
                                <div class="invalid-feedback">NIM wajib diisi.</div>
                            </div>
                            <div class="mb-3"><label class="form-label"
                                    for="bootstrap-wizard-validation-wizard-email">Email*</label><input class="form-control"
                                    type="email" name="email" placeholder="Alamat email"
                                    pattern="^([a-zA-Z0-9_.-])+@(([a-zA-Z0-9-])+.)+([a-zA-Z0-9]{2,4})+$" required="required"
                                    id="bootstrap-wizard-validation-wizard-email" data-wizard-validate-email="true" />
                                <div class="invalid-feedback">Email wajib diisi.</div>
                            </div>
                            <div class="mb-3"><label class="form-label"
                                    for="bootstrap-wizard-validation-wizard-notelp">Nomor telepon*</label>
                                  <input class="form-control" type="number" name="notelp" placeholder="Nomor telepon"
                                    required="required" id="bootstrap-wizard-validation-wizard-notelp"
                                    data-wizard-validate-notelp="true" min="0" step="1"/>
                                <div class="invalid-feedback">Nomor telepon wajib diisi.</div>
                            </div>
                            <br>
                            <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                                <div class="col-auto navbar-vertical-label">Peminjaman</div>
                                <div class="col ps-0">
                                    <hr class="mb-0 navbar-vertical-divider" />
                                </div>
                            </div>
                            <br>
                            <div class="mb-3">
                              <label for="bootstrap-wizard-validation-wizard-alat">Alat*</label><select class="form-select js-choice" id="bootstrap-wizard-validation-wizard-alat" size="1" name="alat" data-options='{"removeItemButton":true,"placeholder":true}' required="required" data-wizard-validate-alat="true">
                                <option value="">Pilih Alat ...</option>
                                <option value="Mikrotik">Mikrotik</option>
                                <option value="Multimeter">Multimeter</option>
                              </select>
                              <div class="invalid-feedback">Alat wajib diisi.</div>
                            </div>
                            <div class="mb-3"><label class="form-label"
                              for="bootstrap-wizard-validation-wizard-jumlahAlat">Jumlah Alat*</label>
                            <input class="form-control" type="number" min="0" step="1" name="jumlahAlat" placeholder="Jumlah alat"
                              required="required" id="bootstrap-wizard-validation-wizard-jumlahAlat"
                              data-wizard-validate-jumlahAlat="true" />
                          <div class="invalid-feedback">Jumlah alat wajib diisi.</div>
                      </div>
                            <div class="mb-3">
                              <label class="form-label" for="bootstrap-wizard-validation-wizard-tanggal">Tanggal Peminjaman*</label>
                              <input class="form-control datetimepicker" type="text" id="bootstrap-wizard-validation-wizard-tanggal"
                                  name="tanggal" placeholder="Tanggal peminjaman"
                                  data-options='{"mode":"range","dateFormat":"d/m/y","disableMobile":true,"locale":"id"}'
                                  required="required" data-wizard-validate-tanggal="true" />
                              <div class="invalid-feedback">Tanggal peminjaman wajib diisi.</div>
                          </div>                          
                        </form>
                    </div>

                    <div class="tab-pane text-center px-sm-3 px-md-5" role="tabpanel"
                        aria-labelledby="bootstrap-wizard-validation-tab2" id="bootstrap-wizard-validation-tab2">
                        <div class="wizard-lottie-wrapper">
                            <div class="lottie wizard-lottie mx-auto my-3"
                                data-options='{"path":"{{ asset('admin/assets/img/animated-icons/celebration.json') }}"}'>
                            </div>
                        </div>
                        <h4 class="mb-1">Formulir peminjaman telah berhasil terkirim!</h4>
                        <p>Permintaan peminjamanmu akan segera diproses. Info lebih lanjut silakan hubungi admin.</p><a
                            class="btn btn-primary px-5 my-3" href="form_user_mhs">Kembali</a>
                    </div>
                </div>
            </div>
            <div class="card-footer bg-light">
                <div class="px-sm-3 px-md-5">
                    <ul class="pager wizard list-inline mb-0">
                        <li class="previous"><button class="btn btn-link ps-0" type="button"><span
                                    class="fas fa-chevron-left me-2" data-fa-transform="shrink-3"></span>Prev</button>
                        </li>
                        <li class="next"><button class="btn btn-primary px-5 px-sm-6" type="submit">Next<span
                                    class="fas fa-chevron-right ms-2" data-fa-transform="shrink-3"> </span></button></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
