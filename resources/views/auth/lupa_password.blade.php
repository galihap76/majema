@extends('auth.layout_auth')
@section('title', 'Lupa Password')

@section('content')

<!-- Section -->
<section class="vh-100">

    <!-- Container -->
    <div class="container h-100">

        <!-- Row -->
        <div class="row d-flex justify-content-center align-items-center h-100">

            <!-- Col -->
            <div class="col-12 col-md-8 col-lg-6 col-xl-5 mt-4">

                <!-- Card -->
                <div class="card shadow-lg p-3 mb-5 bg-body rounded" style="border: 2px solid white;">

                    <!-- Card body -->
                    <div class="card-body p-5">

                        <!-- Icon lupa password -->
                        <div class="mb-5 text-center"><i class="bi bi-person-circle" style="font-size: 40px;"></i></div>
                        <!-- </Akhir icon password -->

                        <!-- Form -->
                        <form method="post" action="/proses_lupa_password">
                            @csrf

                            @if ($gagal_di_ubah = Session::get('gagal_di_ubah'))
                            <script>
                                Swal.fire({
                                        title: 'ERROR',
                                        text: '{{ $gagal_di_ubah }}',
                                        icon: 'error'
                                    })
                            </script>

                            @elseif ($gagal_konfirmasi = Session::get('gagal_konfirmasi'))
                            <script>
                                Swal.fire({
                                    title: 'ERROR',
                                    text: '{{ $gagal_konfirmasi }}',
                                    icon: 'error'
                                })
                            </script>

                            @endif

                            <!-- Username -->
                            <div class="mb-4">
                                <label class="form-label" for="username">Username</label>
                                <input type="text" id="username" name="username" class="form-control"
                                    value="{{ old('username')}}" autocomplete="off" required />
                            </div>
                            <!-- </Akhir username -->

                            <!-- Password -->
                            <div class="mb-4">
                                <label class="form-label" for="password">Password</label>
                                <input type="password" id="password" name="password" class="form-control"
                                    value="{{ old('password')}}" required />
                            </div>
                            <!-- </Akhir password -->

                            <!-- Konfirmasi password -->
                            <div class="mb-4">
                                <label class="form-label" for="password2">Konfirmasi Password</label>
                                <input type="password" id="password2" name="password2" class="form-control"
                                    value="{{ old('password2')}}" required />
                            </div>
                            <!-- </Akhir konfirmasi password -->

                            <!-- Tombol ubah -->
                            <div class="text-center">
                                <button class="btn btn-dark w-75 text-center rounded-pill" type="submit">Ubah</button>
                            </div>
                            <!-- </Akhir tombol ubah -->

                        </form>
                        <!-- </Akhir form -->

                        <!-- Garis -->
                        <hr class="my-4">
                        <!-- </Akhir garis -->

                        <!-- Login -->
                        <div class="text-center">
                            <a href="{{url('auth')}}">Kembali</a>
                        </div>
                        <!-- </Akhir Login -->

                    </div>
                    <!-- </Akhir card body -->

                </div>
                <!-- </Akhir card -->

            </div>
            <!-- </Akhir col -->

        </div>
        <!-- </Akhir row -->

    </div>
    <!-- </Akhir container -->

</section>
<!-- </Akhir section -->

@endsection