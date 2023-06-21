<div id="layoutSidenav_content">

    @if ($app = Session::get('app'))
    <script>
        Swal.fire({
                    title: 'SUCCESS',
                    text: '{{ $app }}',
                    icon: 'success'
                })
    </script>
    @endif

    <div>
        <main>
            <div class="container-fluid px-4">
                <h3 class="mt-4 mb-5">Dashboard</h3>
                <div class="row text-center">
                    <div class="col-xl-4 col-md-6">
                        <div class="card bg-secondary text-white mb-4">
                            <div class="card-body"><i class="bi bi-people-fill"></i> Semua Mahasiswa</div>
                            <div class="card-footer">
                                {{ $total_semua_mahasiswa }}
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-md-6">
                        <div class="card bg-success text-white mb-4">
                            <div class="card-body"><i class="bi bi-person-check-fill"></i> Total Mahasiswa Aktif</div>
                            <div class="card-footer">
                                {{ $total_mahasiswa_aktif }}
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-md-6">
                        <div class="card bg-danger text-white mb-4">
                            <div class="card-body"><i class="bi bi-person-dash-fill"></i> Total Mahasiswa Tidak Aktif
                            </div>
                            <div class="card-footer">
                                {{ $total_mahasiswa_tidak_aktif }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>