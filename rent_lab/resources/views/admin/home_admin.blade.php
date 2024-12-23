@extends('admin.template_table_admin')

@section('content')
<div class="card mb-3">
    <div class="bg-holder d-none d-lg-block bg-card" style="background-image:url(../../assets/img/icons/spot-illustrations/corner-4.png);"></div>
    <!--/.bg-holder-->
    <div class="card-body position-relative">
      <div class="row">
        <div class="col-lg-8">
          <h3>Selamat datang, Admin!</h3>
          {{-- <p class="mt-2">Falcon uses <b>List.Js</b> for advance table. List.Js is a Tiny, invisible and simple, yet powerful and incredibly fast vanilla JavaScript library that adds search, sort, filters and flexibility to plain HTML lists, tables, or anything.</p><a class="btn btn-link ps-0 btn-sm" href="https://listjs.com/" target="_blank"> Documentation for List.js<span class="fas fa-chevron-right ms-1 fs--2"></span></a> --}}
        </div>
      </div>
    </div>
  </div>
  <div class="card mb-3">
    <div class="card-header">
      <div class="row flex-between-end">
        <div class="col-auto align-self-center">
          <h5 class="mb-0" data-anchor="data-anchor">Data Peminjaman</h5>
        </div>
        <div class="col-auto ms-auto">
          <div class="nav nav-pills nav-pills-falcon flex-grow-1" role="tablist"><button class="btn btn-sm active" data-bs-toggle="pill" data-bs-target="#dom-c0a1d3af-5407-4848-8cf1-33f9100ad9e8" type="button" role="tab" aria-controls="dom-c0a1d3af-5407-4848-8cf1-33f9100ad9e8" aria-selected="true" id="tab-dom-c0a1d3af-5407-4848-8cf1-33f9100ad9e8">Preview</button><button class="btn btn-sm" data-bs-toggle="pill" data-bs-target="#dom-2835613b-9e3a-4ed5-bb13-97d9f6b72296" type="button" role="tab" aria-controls="dom-2835613b-9e3a-4ed5-bb13-97d9f6b72296" aria-selected="false" id="tab-dom-2835613b-9e3a-4ed5-bb13-97d9f6b72296">Code</button></div>
        </div>
      </div>
    </div>
    <div class="card-body pt-0">
      <div class="tab-content">
        <div class="tab-pane preview-tab-pane active" role="tabpanel" aria-labelledby="tab-dom-c0a1d3af-5407-4848-8cf1-33f9100ad9e8" id="dom-c0a1d3af-5407-4848-8cf1-33f9100ad9e8">
          <div id="tableExample" data-list='{"valueNames":["name","email","age"],"page":5,"pagination":true}'>
            <div class="table-responsive scrollbar">
              <table class="table table-bordered table-striped fs--1 mb-0">
                <thead class="bg-200 text-900">
                  <tr>
                    <th class="sort" data-sort="nim">NIM</th>
                    <th class="sort" data-sort="nama_peminjam">Nama</th>
                    <th class="sort" data-sort="alat">Alat</th>
                    <th class="sort" data-sort="jml_alat">Jumlah Alat</th>
                    <th class="sort" data-sort="tgl_pinjam">Tanggal Peminjaman</th>
                    <th class="sort" data-sort="tgl_kembali">Tanggal Pengembalian</th>
                    <th class="sort" data-sort="status">Status</th>
                  </tr>
                </thead>
                <tbody class="list">
                @forelse($borrowHistories as $history)
                    <tr>
                        <td class="nim">{{ $history->borrower_id }}</td>
                        <td class="nama">{{ $history->borrower_name }}</td>
                        <td class="alat">{{ $history->tool->name ?? 'Unknown' }}</td>
                        <td class="jml_alat">{{ $history->amount }}</td>
                        <td class="tgl_pinjam">{{ $history->borrow_date }}</td>
                        <td class="tgl_kembali">{{ $history->return_date }}</td>
                        <td class="status_peminjaman">{{ $history->action }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="text-center">No data available for the selected filters.</td>
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
                  <a class="fw-semi-bold" href="#!" data-list-view="*">View all<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a><a class="fw-semi-bold d-none" href="#!" data-list-view="less">View Less<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
                </p>
              </div>
              <div class="col-auto d-flex"><button class="btn btn-sm btn-primary" type="button" data-list-pagination="prev"><span>Previous</span></button><button class="btn btn-sm btn-primary px-4 ms-2" type="button" data-list-pagination="next"><span>Next</span></button></div>
            </div>
          </div>
        </div>
        <div class="tab-pane code-tab-pane" role="tabpanel" aria-labelledby="tab-dom-2835613b-9e3a-4ed5-bb13-97d9f6b72296" id="dom-2835613b-9e3a-4ed5-bb13-97d9f6b72296"><pre class="scrollbar rounded-1" style="max-height:420px"><code class="language-html">&lt;div id=&quot;tableExample&quot; data-list='{&quot;valueNames&quot;:[&quot;name&quot;,&quot;email&quot;,&quot;age&quot;],&quot;page&quot;:5,&quot;pagination&quot;:true}'&gt;
        </code></pre>
        </div>
      </div>
    </div>
  </div>
  <div class="card mb-3">
    <div class="card-header">
      <div class="row flex-between-end">
        <div class="col-auto align-self-center">
          <h5 class="mb-0" data-anchor="data-anchor">Data Inventaris</h5>
          {{-- <p class="mb-0 pt-1 mt-2 mb-0">Add <code> pagination </code> class for enable number pagination. The following structure will enable number pagination with next and previous button.</p> --}}
        </div>
        <div class="col-auto ms-auto">
          <div class="nav nav-pills nav-pills-falcon flex-grow-1 mt-2" role="tablist"><button class="btn btn-sm active" data-bs-toggle="pill" data-bs-target="#dom-603ac24c-ea41-4c86-96c0-b0f750fb6de0" type="button" role="tab" aria-controls="dom-603ac24c-ea41-4c86-96c0-b0f750fb6de0" aria-selected="true" id="tab-dom-603ac24c-ea41-4c86-96c0-b0f750fb6de0">Preview</button><button class="btn btn-sm" data-bs-toggle="pill" data-bs-target="#dom-63526a37-e279-4ec7-afa9-896fad6ba3a5" type="button" role="tab" aria-controls="dom-63526a37-e279-4ec7-afa9-896fad6ba3a5" aria-selected="false" id="tab-dom-63526a37-e279-4ec7-afa9-896fad6ba3a5">Code</button></div>
        </div>
      </div>
    </div>
    <div class="card-body pt-0">
      <div class="tab-content">
        <div class="tab-pane preview-tab-pane active" role="tabpanel" aria-labelledby="tab-dom-603ac24c-ea41-4c86-96c0-b0f750fb6de0" id="dom-603ac24c-ea41-4c86-96c0-b0f750fb6de0">
          <div id="tableExample2" data-list='{"valueNames":["name","email","age"],"page":5,"pagination":true}'>
            <div class="table-responsive scrollbar">
              <table class="table table-bordered table-striped fs--1 mb-0">
                <thead class="bg-200 text-900">
                  <tr>
                    <th class="sort" data-sort="nama_alat">Nama Alat</th>
                    <th class="sort" data-sort="deskripsi">Deskripsi</th>
                    <th class="sort" data-sort="jml_total_alat">Jumlah Total Alat</th>
                    <th class="sort" data-sort="jml_alat_tersedia">Jumlah Alat Tersedia</th>
                    <th class="sort" data-sort="status_alat">Status</th>
                  </tr>
                </thead>
                <tbody class="list">
                @foreach($tools as $tool)
                    <tr>
                        <td class="nama_alat">{{ $tool->tool_name }}</td>
                        <td class="deskripsi">{{ $tool->description }}</td>
                        <td class="jml_total_alat">{{ $tool->quantity }}</td>
                        <td class="jml_alat_tersedia">{{ $tool->available_quantity }}</td>
                        <td class="status_alat">{{ $tool->status }}</td>
                    </tr>
                @endforeach
                </tbody>
              </table>
            </div>
            <div class="d-flex justify-content-center mt-3"><button class="btn btn-sm btn-falcon-default me-1" type="button" title="Previous" data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
              <ul class="pagination mb-0"></ul><button class="btn btn-sm btn-falcon-default ms-1" type="button" title="Next" data-list-pagination="next"><span class="fas fa-chevron-right"> </span></button>
            </div>
          </div>
        </div>
        <div class="tab-pane code-tab-pane" role="tabpanel" aria-labelledby="tab-dom-63526a37-e279-4ec7-afa9-896fad6ba3a5" id="dom-63526a37-e279-4ec7-afa9-896fad6ba3a5"><pre class="scrollbar rounded-1" style="max-height:420px"><code class="language-html">&lt;div id=&quot;tableExample2&quot; data-list='{&quot;valueNames&quot;:[&quot;name&quot;,&quot;email&quot;,&quot;age&quot;],&quot;page&quot;:5,&quot;pagination&quot;:true}'&gt;

            </code></pre>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-3">
                    <div class="card-header">
                      <div class="row flex-between-end">
                        <div class="col-auto align-self-center">
                          <h5 class="mb-0" data-anchor="data-anchor">Riwayat Peminjaman</h5>
                        </div>
                        <div class="col-auto ms-auto">
                          <div class="nav nav-pills nav-pills-falcon flex-grow-1" role="tablist"><button class="btn btn-sm active" data-bs-toggle="pill" data-bs-target="#dom-6df155b7-0a7a-4492-a93a-0c9583531af8" type="button" role="tab" aria-controls="dom-6df155b7-0a7a-4492-a93a-0c9583531af8" aria-selected="true" id="tab-dom-6df155b7-0a7a-4492-a93a-0c9583531af8">Preview</button><button class="btn btn-sm" data-bs-toggle="pill" data-bs-target="#dom-eabbf22d-a439-49fd-8112-17e026b2f678" type="button" role="tab" aria-controls="dom-eabbf22d-a439-49fd-8112-17e026b2f678" aria-selected="false" id="tab-dom-eabbf22d-a439-49fd-8112-17e026b2f678">Code</button></div>
                        </div>
                      </div>
                    </div>
                    <div class="card-body pt-0 px-0">
                      <div class="tab-content">
                        <div class="tab-pane preview-tab-pane active" role="tabpanel" aria-labelledby="tab-dom-6df155b7-0a7a-4492-a93a-0c9583531af8" id="dom-6df155b7-0a7a-4492-a93a-0c9583531af8">
                          <div id="tableExample3" data-list='{"valueNames":["name","email","payment"],"filter":true}'>
                            <div class="row justify-content-end g-0">
                              <div class="col-auto px-3"> <select class="form-select form-select-sm mb-3" aria-label="Bulk actions" data-list-filter="data-list-filter">
                                  <option selected="" value="">Select payment status</option>
                                  <option value="Pending">Pending</option>
                                  <option value="Success">Success</option>
                                  <option value="Blocked">Blocked</option>
                                </select></div>
                            </div>
                            <div class="table-responsive scrollbar">
                              <table class="table table-sm table-striped fs--1 mb-0 overflow-hidden">
                                <thead class="bg-200 text-900">
                                  <tr>
                                    <th class="sort pe-1 align-middle white-space-nowrap" data-sort="nama_peminjam">Nama Peminjam</th>
                                    <th class="sort pe-1 align-middle white-space-nowrap" data-sort="nama_alat">Nama Alat</th>
                                    <th class="sort pe-1 align-middle white-space-nowrap" data-sort="jml_alat">Jumlah Alat Pinjam</th>
                                    <th class="sort pe-1 align-middle white-space-nowrap" data-sort="tgl_pinjam">Tanggal Peminjaman</th>
                                    <th class="sort pe-1 align-middle white-space-nowrap" data-sort="tgl_kembali">Tanggal Pengembalian</th>
                                    <th class="sort align-middle white-space-nowrap text-end pe-4" data-sort="status_final">Status Final</th>

                                  </tr>
                                </thead>
                                <tbody class="list" id="table-purchase-body">
                                @foreach($borrowHistories as $history)
                                    <tr class="btn-reveal-trigger">
                                        <td class="align-middle white-space-nowrap name">{{ $history->borrower_name }}</td>
                                        <td class="align-middle white-space-nowrap email">{{ $history->tool->tool_name }}</td>
                                        <td class="align-middle text-end fs-0 white-space-nowrap payment">{{ $history->amount }}</td>
                                        <td class="align-middle white-space-nowrap">{{ $history->borrow_date }}</td>
                                        <td class="align-middle white-space-nowrap">{{ $history->return_date }}</td>
                                        <td class="align-middle white-space-nowrap text-end pe-4">
                                            @if($history->action == 'approved')
                                                <span class="badge badge rounded-pill badge-soft-success">Approved <span class="ms-1 fas fa-check" data-fa-transform="shrink-2"></span></span>
                                            @elseif($history->action == 'Pending')
                                                <span class="badge badge rounded-pill badge-soft-warning">Pending <span class="ms-1 fas fa-stream" data-fa-transform="shrink-2"></span></span>
                                            @elseif($history->action == 'rejected')
                                                <span class="badge badge rounded-pill badge-soft-warning">Rejected <span class="ms-1 fas fa-ban" data-fa-transform="shrink-2"></span></span>
                                            @else
                                                <span class="badge badge rounded-pill badge-soft-dark">Unknown</span>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane code-tab-pane" role="tabpanel" aria-labelledby="tab-dom-eabbf22d-a439-49fd-8112-17e026b2f678" id="dom-eabbf22d-a439-49fd-8112-17e026b2f678"><pre class="scrollbar rounded-1" style="max-height:420px"><code class="language-html">&lt;div id=&quot;tableExample3&quot; data-list='{&quot;valueNames&quot;:[&quot;name&quot;,&quot;email&quot;,&quot;payment&quot;],&quot;filter&quot;:true}'&gt;    
@endsection