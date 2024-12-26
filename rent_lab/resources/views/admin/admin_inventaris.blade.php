@extends('admin.admin_template_navbar')

@section('content')
    <div class="card mb-3">
        <div class="card-header">
            <h5 class="mb-0 text-center" data-anchor="data-anchor" style="padding: 20px 0 0 0;">Data Inventaris</h5>
            <p class="mb-0 pt-1 mt-2 mb-0 text-center">Catatan Inventaris dan Alat Laboratorium</p>
        </div>
        <div class="card-body pt-0" style="margin-top: 10px; margin-bottom: 20px;">
            <div class="tab-content">
                <div class="tab-pane preview-tab-pane active" role="tabpanel"
                    aria-labelledby="tab-dom-603ac24c-ea41-4c86-96c0-b0f750fb6de0"
                    id="dom-603ac24c-ea41-4c86-96c0-b0f750fb6de0">
                    <div id="tableExample2" data-list='{"valueNames":["nama_alat","deskripsi","jml_total_alat", "jml_alat_tersedia", "status_alat"],"page":5,"pagination":true}'>
                        <div class="table-responsive scrollbar">
                            <table class="table table-bordered table-striped fs--1 mb-0">
                                <thead class="bg-200 text-900">
                                    <tr>
                                        <th class="sort text-center" data-sort="nama_alat">Nama Alat</th>
                                        <th class="sort text-center" data-sort="deskripsi">Deskripsi</th>
                                        <th class="sort text-center" data-sort="jml_total_alat">Jumlah Total Alat</th>
                                        <th class="sort text-center" data-sort="jml_alat_tersedia">Jumlah Alat Tersedia</th>
                                        <th class="sort text-center" data-sort="status_alat">Status</th>
                                        <th class="sort text-center" data-sort="edit">Edit</th>
                                    </tr>
                                </thead>
                                <tbody class="list">
                                    @foreach ($tools as $tool)
                                        <tr>
                                            <td class="nama_alat text-center">{{ $tool->tool_name }}</td>
                                            <td class="deskripsi text-center">{{ $tool->description }}</td>
                                            <td class="jml_total_alat text-center">{{ $tool->quantity }}</td>
                                            <td class="jml_alat_tersedia text-center">{{ $tool->available_quantity }}</td>
                                            <td class="status_alat text-center">{{ $tool->status }}</td>
                                            <td class="edit text-center">
                                                <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#error-modal">Edit</button>
                                                {{-- modal --}}
                                                <div class="modal fade" id="error-modal" tabindex="-1" role="dialog" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 500px">
                                                    <div class="modal-content position-relative">
                                                    <div class="position-absolute top-0 end-0 mt-2 me-2 z-index-1">
                                                        <button class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body p-0">
                                                        <div class="rounded-top-lg py-3 ps-4 pe-6 bg-light">
                                                        <h4 class="mb-1" id="modalExampleDemoLabel">Edit Data Inventaris</h4>
                                                        </div>
                                                        <div class="p-4 pb-0">
                                                        <form>
                                                            <div class="mb-3">
                                                                <label class="col-form-label" for="nama_alat" style="font-size: 16px; font-weight:500;">Nama Alat:</label>
                                                                <input class="form-control" id="nama_alat" type="text" />
                                                            </div>
                                                            <div class="mb-3">
                                                                <label class="col-form-label" for="deskripsi" style="font-size: 16px; font-weight:500;">Deskripsi:</label>
                                                                <textarea class="form-control" id="deskripsi"></textarea>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label class="col-form-label" for="jml_total_alat" style="font-size: 16px; font-weight:500;">Jumlah Total Alat:</label>
                                                                <input class="form-control" id="jml_total_alat" type="number" min="0" step="1" />
                                                            </div>
                                                            <div class="mb-3">
                                                                <label class="col-form-label" for="jml_alat_tersedia" style="font-size: 16px; font-weight:500;">Jumlah Alat Tersedia:</label>
                                                                <input class="form-control" id="jml_alat_tersedia" type="number" min="0" step="1" />
                                                            </div>
                                                            <div class="mb-3">
                                                                <label class="form-label" for="status_alat" style="font-size: 16px; font-weight:500;">Status*</label>
                                                                <select class="form-select" name="status" id="status_alat">
                                                                    <option value="">Pilih status alat ...</option>
                                                                    <option value="available">Available</option>
                                                                </select>
                                                            </div>
                                                            <br><br>
                                                        </form>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button class="btn btn-primary" type="button" data-bs-dismiss="modal">Simpan </button>
                                                    </div>
                                                    </div>
                                                </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="d-flex justify-content-center mt-3"><button class="btn btn-sm btn-falcon-default me-1"
                                type="button" title="Previous" data-list-pagination="prev"><span
                                    class="fas fa-chevron-left"></span></button>
                            <ul class="pagination mb-0"></ul><button class="btn btn-sm btn-falcon-default ms-1"
                                type="button" title="Next" data-list-pagination="next"><span
                                    class="fas fa-chevron-right"> </span></button>
                        </div>
                    </div>
                </div>
                <div class="tab-pane code-tab-pane" role="tabpanel"
                    aria-labelledby="tab-dom-63526a37-e279-4ec7-afa9-896fad6ba3a5"
                    id="dom-63526a37-e279-4ec7-afa9-896fad6ba3a5">
                    <pre class="scrollbar rounded-1" style="max-height:420px"><code class="language-html">

        </code></pre>
                </div>
            </div>
        </div>
    </div>
@endsection
