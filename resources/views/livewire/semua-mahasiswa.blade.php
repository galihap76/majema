<div id="layoutSidenav_content">

    <!-- Modal tambah-->
    <div wire:ignore.self class="modal fade" id="tambahMahasiswa" tabindex="-1" aria-labelledby="tambahMahasiswa"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="tambahMahasiswa">Tambah Mahasiswa</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                        wire:click="close()"></button>
                </div>

                {{-- Session store --}}
                @if (session()->has('store'))
                <div class="container d-flex align-items-center justify-content-center">
                    <div class="alert-dismissible fade show alert alert-success w-75 text-center mt-3" role="alert">
                        <strong>{{ session('store') }}</strong>
                    </div>
                </div>
                @endif

                <div class="modal-body">

                    <!-- Form tambah mahasiswa -->
                    <form wire:submit.prevent='storeData'>

                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Mahasiswa</label>
                            <input wire:model="nama" type="text" class="form-control" id="nama" name="nama"
                                maxlength="40" autocomplete='off' required />
                        </div>

                        <div class="mb-3">
                            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                            <input wire:model="jenis_kelamin" type="text" class="form-control" id="jenis_kelamin"
                                maxlength="15" name="jenis_kelamin" autocomplete='off' required />
                        </div>

                        <div class="mb-3">
                            <label for="jurusan" class="form-label">Jurusan</label>
                            <input wire:model="jurusan" type="text" class="form-control" id="jurusan" name="jurusan"
                                maxlength="40" autocomplete='off' required />
                        </div>

                        <div class="mb-3">
                            <label for="status" class="form-label">Status</label>
                            <input wire:model="status" type="text" class="form-control" id="status" name="status"
                                maxlength="15" autocomplete='off' required />
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal"
                                wire:click="close()">Tutup</button>
                            <button type="submit" class="btn btn-success">Tambah</button>
                        </div>
                    </form>
                    <!-- Akhir form tambah mahasiswa-->

                </div>
            </div>
        </div>
    </div>
    <!-- </Akhir modal tambah -->

    <!-- Modal edit-->
    <div wire:ignore.self class="modal fade" id="editMahasiswa" tabindex="-1" aria-labelledby="editMahasiswa"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="editMahasiswa">Edit Mahasiswa</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                        wire:click="close()"></button>
                </div>

                {{-- Session edit --}}
                @if (session()->has('edit'))
                <div class="container d-flex align-items-center justify-content-center">
                    <div class="alert-dismissible fade show alert alert-success w-75 text-center mt-3" role="alert">
                        <strong>{{ session('edit') }}</strong>
                    </div>
                </div>
                @endif

                <div class="modal-body">

                    <!-- Form edit mahasiswa -->
                    <form wire:submit.prevent='editData'>

                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Mahasiswa</label>
                            <input wire:model="nama" type="text" class="form-control" id="nama" name="nama"
                                maxlength="40" autocomplete='off' required />
                        </div>

                        <div class="mb-3">
                            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                            <input wire:model="jenis_kelamin" type="text" class="form-control" id="jenis_kelamin"
                                maxlength="15" name="jenis_kelamin" autocomplete='off' required />
                        </div>

                        <div class="mb-3">
                            <label for="jurusan" class="form-label">Jurusan</label>
                            <input wire:model="jurusan" type="text" class="form-control" id="jurusan" name="jurusan"
                                maxlength="40" autocomplete='off' required />
                        </div>

                        <div class="mb-3">
                            <label for="status" class="form-label">Status</label>
                            <input wire:model="status" type="text" class="form-control" id="status" name="status"
                                maxlength="15" autocomplete='off' required />
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal"
                                wire:click="close()">Tutup</button>
                            <button type="submit" class="btn btn-warning">Edit</button>
                        </div>
                    </form>
                    <!-- Akhir form edit mahasiswa-->

                </div>
            </div>
        </div>
    </div>
    <!-- </Akhir modal edit -->

    <!-- Modal delete-->
    <div wire:ignore.self class="modal fade" id="deleteMahasiswa" tabindex="-1" aria-labelledby="deleteMahasiswa"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="deleteMahasiswa">Delete Mahasiswa</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                        wire:click="close()"></button>
                </div>

                {{-- Session delete --}}
                @if (session()->has('delete'))
                <div class="container d-flex align-items-center justify-content-center">
                    <div class="alert-dismissible fade show alert alert-success w-75 text-center mt-3" role="alert">
                        <strong>{{ session('delete') }}</strong>
                    </div>
                </div>
                @endif

                <div class="modal-body">
                    <h5>Apakah Anda yakin ingin menghapus data mahasiswa?</h5>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal"
                            wire:click="close()">Cancel</button>
                        <button type="button" wire:click="deleteMahasiswa()" class="btn btn-danger">Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- </Akhir modal delete-->

    <!-- Content tabel mahasiswa -->
    <div class="container mb-4">
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <p><i class="fas fa-table me-1"></i> Datatable Mahasiswa</p>

                        <div class="mt-4">
                            <input type="search" wire:model="search" class="form-control float-end mx-2"
                                placeholder="Search..." style="width: 230px" />
                            <button type="button" class="btn btn-success float-start" data-bs-toggle="modal"
                                wire:click="close()" data-bs-target="#tambahMahasiswa">
                                Tambah Mahasiswa
                            </button>
                        </div>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table table-bordered text-center">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Jenis Kelamin</th>
                                    <th scope="col">Jurusan</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>

                            <tbody class="table-group-divider">
                                @php
                                $no = 1;
                                @endphp

                                @forelse ($semua_mahasiswa as $data)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $data->nama }}</td>
                                    <td>{{ $data->jenis_kelamin }}</td>
                                    <td>{{ $data->jurusan }}</td>
                                    <td> <span
                                            class="badge {{ $data->status == 'aktif' ? 'text-bg-success' : 'text-bg-danger' }}">
                                            {{ $data->status }}
                                        </span></td>
                                    <td>
                                        <div class="d-flex justify-content-center">
                                            <button type="button" class="btn btn-danger mb-1 mr-1 me-2 mt-3"><i
                                                    class="bi bi-trash" data-bs-toggle="modal"
                                                    data-bs-target="#deleteMahasiswa"
                                                    wire:click="initDeleteData({{$data->id_mahasiswa}})"></i></button>
                                            <button type="button" class="btn btn-warning text-white mb-1 mt-3"><i
                                                    class="bi bi-pencil" data-bs-toggle="modal"
                                                    data-bs-target="#editMahasiswa"
                                                    wire:click="initEditData({{$data->id_mahasiswa}})"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="5">Data Tidak Di Temukan.</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                        <div>
                            {{ $semua_mahasiswa->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- </Akhir content tabel mahasiswa -->
</div>

@push('scripts')
<script>
    // Untuk menutup modal bootstrap
    window.addEventListener('close-modal', event =>{

        // Buat variabel hideTambahMahasiswa untuk menyembunyikan
        let hideTambahMahasiswa = function() {
            $('#tambahMahasiswa').modal('hide');
        };

        // Buat variabel hideEditMahasiswa untuk menyembunyikan
        let hideEditMahasiswa = function() {
                $('#editMahasiswa').modal('hide');
        };

        // Buat variabel hideDeleteMahasiswa untuk menyembunyikan
        let hideDeleteMahasiswa = function() {
                $('#deleteMahasiswa').modal('hide');
        };

        // Sembunyikan setelah dalam dua detik
        setTimeout(hideTambahMahasiswa, 2000);
        setTimeout(hideEditMahasiswa, 2000);
        setTimeout(hideDeleteMahasiswa, 2000);
    
        });
</script>
@endpush