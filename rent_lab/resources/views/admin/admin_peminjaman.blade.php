@extends('admin.admin_template_navbar')

@section('content')
<div class="card mb-3">
    <div class="card-header">
        <h5 class="mb-0 text-center" data-anchor="data-anchor" style="padding: 20px 0 0 0;">Data Peminjaman</h5>
        <p class="mb-0 pt-1 mt-2 mb-0 text-center">Catatan Peminjaman Inventaris dan Alat Laboratorium Berlangsung</p>
    </div>
    <div class="card-body pt-0" style="margin-top: 10px; margin-bottom: 20px;">
        <div class="tab-content">
            <div class="tab-pane preview-tab-pane active" role="tabpanel"
                aria-labelledby="tab-dom-c0a1d3af-5407-4848-8cf1-33f9100ad9e8"
                id="dom-c0a1d3af-5407-4848-8cf1-33f9100ad9e8">
                <div id="tableExample" data-list='{"valueNames":["nim","nama_peminjam","alat", "jml_alat", "tgl_pinjam", "tgl_kembali", "status"],"page":5,"pagination":true}'>
                    <div class="table-responsive scrollbar">
                        <table class="table table-bordered table-striped fs--1 mb-0">
                            <thead class="bg-200 text-900">
                                <tr>
                                    <th class="sort text-center" data-sort="nim">NIM</th>
                                    <th class="sort text-center" data-sort="nama_peminjam">Nama</th>
                                    <th class="sort text-center" data-sort="alat">Alat</th>
                                    <th class="sort text-center" data-sort="jml_alat">Jumlah Alat</th>
                                    <th class="sort text-center" data-sort="tgl_pinjam">Tanggal Peminjaman</th>
                                    <th class="sort text-center" data-sort="tgl_kembali">Tanggal Pengembalian</th>
                                    <th class="sort text-center" data-sort="status_peminjaman">Status</th>
                                </tr>
                            </thead>
                            <tbody class="list">
                                @forelse($borrowHistories as $history)
                                    <tr>
                                        <td class="nim text-center">{{ $history->borrower_id }}</td>
                                        <td class="nama_peminjam text-center">{{ $history->borrower_name }}</td>
                                        <td class="alat text-center">{{ $history->tool->name ?? 'Unknown' }}</td>
                                        <td class="jml_alat text-center">{{ $history->amount }}</td>
                                        <td class="tgl_pinjam text-center">{{ $history->borrow_date }}</td>
                                        <td class="tgl_kembali text-center">{{ $history->return_date }}</td>
                                        <td class="status_peminjaman text-center">
                                            @if ($history->action == 'approved')
                                                <button class="btn btn-primary me-1 mb-1 btn-sm" type="button">Approved</button>
                                                <button class="btn btn-falcon-danger me-1 mb-1 disabled btn-sm" type="button">Rejected</button>
                                            @elseif($history->action == 'rejected')
                                                <button class="btn btn-falcon-primary me-1 mb-1 disabled btn-sm" type="button">Approved</button>
                                                <button class="btn btn-danger me-1 mb-1 btn-sm" type="button">Rejected</button>
                                            @else
                                                <button class="btn btn-falcon-primary me-1 mb-1 btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#approve">Approve</button>
                                                <button class="btn btn-falcon-danger me-1 mb-1 btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#reject">Reject</button>

                                                {{-- modal approve reject--}}
                                                <div class="modal fade" id="approve" data-keyboard="false" tabindex="-1" aria-labelledby="approveLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="approveLabel">Menyetujui Peminjaman</h5><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body modal-dialog modal-dialog-scrollable mt-0" style="margin: 0;">
                                                            <p>Apakah anda yakin untuk menyetujui peminjaman?</p>
                                                        </div>
                                                        <div class="modal-footer"><button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Batal</button><button class="btn btn-primary" type="button" href="#">Ya</button></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="reject" data-keyboard="false" tabindex="-1" aria-labelledby="rejectLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                            <h5 class="modal-title" id="rejectLabel">Tidak Menyetujui Peminjaman</h5><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body modal-dialog modal-dialog-scrollable mt-0" style="margin: 0;">
                                                            <p>Apakah anda yakin untuk tidak menyetujui peminjaman?</p>
                                                            </div>
                                                            <div class="modal-footer"><button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Batal</button><button class="btn btn-primary" type="button" href="#">Ya</button></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7" class="text-center">No data available for the selected
                                            filters.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="row align-items-center mt-3">
                        <div class="pagination d-none"></div>
                        <div class="col">
                            <p class="mb-0 fs--1">
                                <span class="d-none d-sm-inline-block" data-list-info="data-list-info"></span>
                                <span class="d-none d-sm-inline-block"> &mdash; </span>
                                <a class="fw-semi-bold" href="#!" data-list-view="*">View all<span
                                        class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a><a
                                    class="fw-semi-bold d-none" href="#!" data-list-view="less">View Less<span
                                        class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
                            </p>
                        </div>
                        <div class="col-auto d-flex"><button class="btn btn-sm btn-primary" type="button"
                                data-list-pagination="prev"><span>Previous</span></button><button
                                class="btn btn-sm btn-primary px-4 ms-2" type="button"
                                data-list-pagination="next"><span>Next</span></button></div>
                    </div>
                </div>
            </div>
            <div class="tab-pane code-tab-pane" role="tabpanel"
                aria-labelledby="tab-dom-2835613b-9e3a-4ed5-bb13-97d9f6b72296"
                id="dom-2835613b-9e3a-4ed5-bb13-97d9f6b72296">
                <pre class="scrollbar rounded-1" style="max-height:420px"><code class="language-html">&lt;div id=&quot;tableExample&quot; data-list='{&quot;valueNames&quot;:[&quot;name&quot;,&quot;email&quot;,&quot;age&quot;],&quot;page&quot;:5,&quot;pagination&quot;:true}'&gt;
    </code></pre>
            </div>
        </div>
    </div>
</div>
@endsection
