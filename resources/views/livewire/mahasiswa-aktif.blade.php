<div id="layoutSidenav_content">

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
                                </tr>
                            </thead>

                            <tbody class="table-group-divider">
                                @php
                                $no = 1;
                                @endphp

                                @forelse ($mahasiswa_aktif as $data)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $data->nama }}</td>
                                    <td>{{ $data->jenis_kelamin }}</td>
                                    <td>{{ $data->jurusan }}</td>
                                    <td> <span class="badge text-bg-success"> {{ $data->status }}</span></td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="5">Data Tidak Di Temukan.</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                        <div>
                            {{ $mahasiswa_aktif->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- </Akhir content tabel mahasiswa -->
</div>