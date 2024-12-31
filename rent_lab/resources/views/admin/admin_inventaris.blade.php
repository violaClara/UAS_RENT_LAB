@extends('admin.admin_template_navbar')

@section('content')
    <div class="card mb-3">
        <div class="card-header">
            <h5 class="mb-0 text-center">Data Inventaris</h5>
            <p class="mb-0 pt-1 text-center">Catatan Inventaris dan Alat Laboratorium</p>
        </div>
        <div class="card-body">
            <div class="d-grid gap-2">
                <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#tambah_data">Tambah</button>
            </div>

            {{-- Modal Tambah --}}
            <div class="modal fade" id="tambah_data" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Tambah Data Inventaris</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('admin_inventaris.store') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="nama_alat" class="form-label">Nama Alat</label>
                                    <input type="text" class="form-control" id="nama_alat" name="tool_name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="deskripsi" class="form-label">Deskripsi</label>
                                    <textarea class="form-control" id="deskripsi" name="description" required></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="jml_total_alat" class="form-label">Jumlah Total Alat</label>
                                    <input type="number" class="form-control" id="jml_total_alat" name="quantity" min="0" step="1" required>
                                </div>
                                <div class="mb-3">
                                    <label for="jml_alat_tersedia" class="form-label">Jumlah Alat Tersedia</label>
                                    <input type="number" class="form-control" id="jml_alat_tersedia" name="available_quantity" min="0" step="1" required>
                                </div>
                                <div class="mb-3">
                                    <label for="status_alat" class="form-label">Status</label>
                                    <select class="form-select" id="status_alat" name="status" required>
                                        <option value="">Pilih status alat...</option>
                                        <option value="available">Available</option>
                                        <option value="unavailable">Unavailable</option>
                                    </select>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Data Table --}}
            <table class="table table-bordered mt-3">
                <thead class="table-light">
                    <tr>
                        <th>Nama Alat</th>
                        <th>Deskripsi</th>
                        <th>Jumlah Total</th>
                        <th>Jumlah Tersedia</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tools as $tool)
                        <tr>
                            <td>{{ $tool->tool_name }}</td>
                            <td>{{ $tool->description }}</td>
                            <td>{{ $tool->quantity }}</td>
                            <td>{{ $tool->available_quantity }}</td>
                            <td>{{ $tool->status }}</td>
                            <td>
                                {{-- Tombol Edit --}}
                                <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#edit_data_{{ $tool->id }}">Edit</button>
                                {{-- Tombol Hapus --}}
                                <button class="btn btn-danger btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#hapus_data_{{ $tool->id }}">Hapus</button>
                            </td>
                        </tr>

                        {{-- Modal Edit --}}
                        <div class="modal fade" id="edit_data_{{ $tool->id }}" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Edit Data Inventaris</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('admin_inventaris.update', $tool->id) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <div class="mb-3">
                                                <label for="nama_alat_{{ $tool->id }}" class="form-label">Nama Alat</label>
                                                <input type="text" class="form-control" id="nama_alat_{{ $tool->id }}" name="tool_name" value="{{ $tool->tool_name }}" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="deskripsi_{{ $tool->id }}" class="form-label">Deskripsi</label>
                                                <textarea class="form-control" id="deskripsi_{{ $tool->id }}" name="description" required>{{ $tool->description }}</textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label for="jml_total_alat_{{ $tool->id }}" class="form-label">Jumlah Total Alat</label>
                                                <input type="number" class="form-control" id="jml_total_alat_{{ $tool->id }}" name="quantity" value="{{ $tool->quantity }}" min="0" step="1" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="jml_alat_tersedia_{{ $tool->id }}" class="form-label">Jumlah Alat Tersedia</label>
                                                <input type="number" class="form-control" id="jml_alat_tersedia_{{ $tool->id }}" name="available_quantity" value="{{ $tool->available_quantity }}" min="0" step="1" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="status_alat_{{ $tool->id }}" class="form-label">Status</label>
                                                <select class="form-select" id="status_alat_{{ $tool->id }}" name="status" required>
                                                    <option value="available" {{ $tool->status == 'available' ? 'selected' : '' }}>Available</option>
                                                    <option value="unavailable" {{ $tool->status == 'unavailable' ? 'selected' : '' }}>Unavailable</option>
                                                </select>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Modal Hapus --}}
                        <div class="modal fade" id="hapus_data_{{ $tool->id }}" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Konfirmasi Hapus</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Apakah Anda yakin ingin menghapus alat <strong>{{ $tool->tool_name }}</strong>?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <form action="{{ route('admin_inventaris.destroy', $tool->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
