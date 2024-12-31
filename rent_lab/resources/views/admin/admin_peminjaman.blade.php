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
                <div id="tableExample" data-list='{"valueNames":["status_peminjam", "ni","nama_peminjam","alat", "jml_alat", "tgl_pinjam", "tgl_kembali", "status_pinjam"],"page":5,"pagination":true}'>
                    <div class="table-responsive scrollbar">
                        <table class="table table-bordered table-striped fs--1 mb-0">
                            <thead class="bg-200 text-900">
                                <tr>
                                    <th class="sort text-center align-middle" data-sort="status_peminjam">Status <br> Peminjam</th>
                                    <th class="sort text-center align-middle" data-sort="ni">Nomor <br> Induk</th>
                                    <th class="sort text-center align-middle" data-sort="nama_peminjam">Nama</th>
                                    <th class="sort text-center align-middle" data-sort="alat">Alat</th>
                                    <th class="sort text-center align-middle" data-sort="jml_alat">Jumlah <br> Alat</th>
                                    <th class="sort text-center align-middle" data-sort="tgl_pinjam">Tanggal <br> Peminjaman</th>
                                    <th class="sort text-center align-middle" data-sort="tgl_kembali">Tanggal <br> Pengembalian</th>
                                    <th class="sort text-center align-middle" data-sort="status_pinjam">Status</th>
                                </tr>
                            </thead>
                            <tbody class="list">
    @forelse($borrowHistories as $history)
        <tr>
              <td class="status_peminjam text-center">
            {{ $history->peminjamanMhs->status ?? $history->peminjamanDosen->status ?? 'Unknown' }}
        </td>
            <td class="ni text-center">{{ $history->borrower_id }}</td>
            <td class="nama_peminjam text-center">{{ $history->borrower_name }}</td>
            <td class="alat text-center">{{ $history->tool->tool_name ?? 'Unknown' }}</td>
            <td class="jml_alat text-center">{{ $history->amount }}</td>
            <td class="tgl_pinjam text-center">{{ $history->borrow_date }}</td>
      <td class="tgl_kembali text-center">
                                            @if ($history->return_date)
                                                {{ $history->return_date }}
                                            @elseif ($history->action != 'rejected')
                                                <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#updateReturnDateModal_{{ $history->id }}">Ubah Tanggal</button>
                                                <div class="modal fade" id="updateReturnDateModal_{{ $history->id }}" tabindex="-1" aria-labelledby="updateReturnDateModalLabel_{{ $history->id }}" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="updateReturnDateModalLabel_{{ $history->id }}">Ubah Tanggal Pengembalian</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <form action="{{ route('admin_peminjaman.updateReturnDate', $history->id) }}" method="POST">
                                                                @csrf
                                                                <div class="modal-body">
                                                                    <div class="mb-3">
                                                                        <label for="return_date" class="form-label">Tanggal Pengembalian</label>
                                                                        <input type="date" name="return_date" class="form-control" min="{{ $history->borrow_date }}" required>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        </td>
            <td class="status_pinjam text-center">
                @if ($history->action == 'approved')
                    <span class="badge bg-success">Approved</span>
                @elseif ($history->action == 'rejected')
                    <span class="badge bg-danger">Rejected</span>
                @else
                    <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#approveModal_{{ $history->id }}">Approve</button>
                    <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#rejectModal_{{ $history->id }}">Reject</button>
                    
                    <!-- Modal Approve -->
                    <div class="modal fade" id="approveModal_{{ $history->id }}" tabindex="-1" aria-labelledby="approveModalLabel_{{ $history->id }}" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="approveModalLabel_{{ $history->id }}">Konfirmasi Approve</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Apakah Anda yakin ingin menyetujui peminjaman alat ini?
                                </div>
                                <div class="modal-footer">
                                    <form action="{{ route('admin_peminjaman.approve', $history->id) }}" method="POST">
                                        @csrf
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                        <button type="submit" class="btn btn-primary">Ya, Approve</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal Reject -->
                    <div class="modal fade" id="rejectModal_{{ $history->id }}" tabindex="-1" aria-labelledby="rejectModalLabel_{{ $history->id }}" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="rejectModalLabel_{{ $history->id }}">Konfirmasi Reject</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Apakah Anda yakin ingin menolak peminjaman alat ini?
                                </div>
                                <div class="modal-footer">
                                    <form action="{{ route('admin_peminjaman.reject', $history->id) }}" method="POST">
                                        @csrf
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                        <button type="submit" class="btn btn-danger">Ya, Reject</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="8" class="text-center">Tidak ada data peminjaman.</td>
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
