@extends('admin.admin_template_navbar')

@section('content')
    <div class="card mb-3">
        <div class="card-header">
            <h5 class="mb-0 text-center" data-anchor="data-anchor" style="padding: 20px 0 0 0;">Riwayat Peminjaman</h5>
            <p class="mb-0 pt-1 mt-2 mb-0 text-center">Catatan Riwayat Peminjaman Inventaris dan Alat Laboratorium</p>
        </div>
        <div class="card-body pt-0 px-0" style="margin-top: 10px; margin-bottom: 20px;">
            <div class="tab-content">
                <div class="tab-pane preview-tab-pane active" role="tabpanel"
                    aria-labelledby="tab-dom-6df155b7-0a7a-4492-a93a-0c9583531af8"
                    id="dom-6df155b7-0a7a-4492-a93a-0c9583531af8">
                    <div id="tableExample3" data-list='{"valueNames":["status_peminjam", "nama_peminjam","nama_alat","jml_alat", "tgl_pinjam", "tgl_kembali", "status_final"],"filter":true}'>
                        {{-- <div class="row justify-content-end g-0">
                            <div class="col-auto px-3"> <select class="form-select form-select-sm mb-3" aria-label="Bulk actions" data-list-filter="data-list-filter">
                                    <option selected="" value="">Pilih status final</option>
                                    <option value="Approved">Approved</option>
                                    <option value="Pending">Pending</option>
                                    <option value="Rejected">Rejected</option>
                                </select></div>
                        </div> --}}
                        <div id="data">
                            <div class="row justify-content-end g-8">
                                <div class="col-auto px-3">
                                    <div class="search-box" style="width: 80%;" data-list='{"valueNames":["title"]}'>
                                        <form class="position-relative mb-3" data-bs-toggle="search" data-bs-display="static"><input class="search form-control search-input fuzzy-search" type="search" placeholder="Filter" aria-label="Search" />
                                        <span class="fas fa-search search-box-icon"></span>
                                        </form>
                                        <div class="btn-close-falcon-container position-absolute end-0 top-50 translate-middle shadow-none" data-bs-dismiss="search">
                                        <div class="btn-close-falcon" aria-label="Close"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- <input class="search" placeholder="Search" /> --}}
                        <div class="table-responsive scrollbar">
                            <table class="table table-sm table-striped fs--1 mb-0 overflow-hidden">
                                <thead class="bg-200 text-900">
                                    <tr>
                                        <th class="sort pe-1 align-middle white-space-nowrap text-center" data-sort="status_peminjam">Status <br> Peminjam</th>
                                        <th class="sort pe-1 align-middle white-space-nowrap text-center" data-sort="nama_peminjam">Nama <br> Peminjam</th>
                                        <th class="sort pe-1 align-middle white-space-nowrap text-center" data-sort="nama_alat">Nama <br> Alat</th>
                                        <th class="sort pe-1 align-middle white-space-nowrap text-center" data-sort="jml_alat">Jumlah <br> Alat Pinjam</th>
                                        <th class="sort pe-1 align-middle white-space-nowrap text-center" data-sort="tgl_pinjam">Tanggal <br> Peminjaman</th>
                                        <th class="sort pe-1 align-middle white-space-nowrap text-center" data-sort="tgl_kembali">Tanggal <br> Pengembalian</th>
                                        <th class="sort align-middle white-space-nowrap text-end pe-4 text-center" data-sort="status_final">Status <br> Final</th>

                                    </tr>
                                </thead>
                                <tbody class="list" id="table-purchase-body">
                                    @foreach ($borrowHistories as $history)
                                    <tr class="btn-reveal-trigger">
                                        <td class="align-middle white-space-nowrap status_peminjam text-center">{{ $history->peminjamanMhs->status ?? $history->peminjamanDosen->status ?? 'Unknown' }}</td>

                                        <td class="align-middle white-space-nowrap nama_peminjam text-center">{{ $history->borrower_name }}</td>
                                        <td class="align-middle white-space-nowrap nama_alat text-center">{{ $history->tool->tool_name ?? 'No Tool Assigned' }}</td>
                                        <td class="align-middle text-end fs-0 white-space-nowrap jml_alat text-center">{{ $history->amount }}</td>
                                        <td class="align-middle white-space-nowrap tgl_pinjam text-center">{{ $history->borrow_date }}</td>
                                        <td class="align-middle white-space-nowrap tgl_kembali text-center">{{ $history->return_date }}</td>
                                        <td class="align-middle white-space-nowrap text-end pe-4 status_final text-center">
                                            @if ($history->action == 'approved')
                                                <span class="badge badge rounded-pill badge-soft-success text-center">Approved<span class="ms-1 fas fa-check" data-fa-transform="shrink-2"></span></span>
                                            @elseif($history->action == 'Pending')
                                                <span class="badge badge rounded-pill badge-soft-warning text-center">Pending<span class="ms-1 fas fa-stream" data-fa-transform="shrink-2"></span></span>
                                            @elseif($history->action == 'rejected')
                                                <span class="badge badge rounded-pill badge-soft-secondary text-center">Rejected<span class="ms-1 fas fa-ban" data-fa-transform="shrink-2"></span></span>
                                            @else
                                                <span class="badge badge rounded-pill badge-soft-dark text-center">Unknown</span>
                                            @endif
                                        </td>
                                    </tr>
                                    
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane code-tab-pane" role="tabpanel"
                    aria-labelledby="tab-dom-eabbf22d-a439-49fd-8112-17e026b2f678"
                    id="dom-eabbf22d-a439-49fd-8112-17e026b2f678">
                    <pre class="scrollbar rounded-1" style="max-height:420px"><code class="language-html">
        </code></pre>
                </div>
            </div>
        </div>
    </div>
@endsection