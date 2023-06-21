@extends('auth.layout_auth')
@section('title', 'Registrasi')

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

                        <!-- Icon registrasi -->
                        <div class="mb-5 text-center"><i class="bi bi-person-circle" style="font-size: 40px;"></i></div>
                        <!-- </Akhir icon registrasi -->

                        <!-- Form -->
                        <form method="post" action="/proses_registrasi">
                            @csrf

                            @if ($error_registrasi = Session::get('error_registrasi'))
                            <script>
                                Swal.fire({
                            title: 'ERROR',
                            text: '{{ $error_registrasi}}',
                            icon: 'error'
                            })
                            </script>
                            @endif

                            <!-- Username -->
                            <div class="mb-4">
                                <label class="form-label" for="username">Username</label>
                                <input type="text" id="username" class="form-control" name="username" maxlength="20"
                                    autocomplete="off" value="{{ old('username')}}" required />
                            </div>
                            <!-- </Akhir username -->

                            <!-- Password -->
                            <div class="mb-4">
                                <label class="form-label" for="password">Password</label>
                                <input type="password" id="password" class="form-control" name="password"
                                    value="{{ old('password')}}" required />
                            </div>
                            <!-- </Akhir password -->

                            <!-- Tombol registrasi -->
                            <div class="text-center">
                                <button class="btn btn-dark w-75 text-center rounded-pill"
                                    type="submit">Registrasi</button>
                            </div>
                            <!-- </Akhir tombol registrasi -->

                        </form>
                        <!-- </Akhir form -->

                        <!-- Garis -->
                        <hr class="my-4">
                        <!-- </Akhir garis -->

                        <!-- Kembali -->
                        <div class="text-center">
                            <a href="{{url('auth')}}">Kembali</a>
                        </div>
                        <!-- </Akhir kembali -->

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