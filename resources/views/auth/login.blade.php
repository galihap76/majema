@extends('auth.layout_auth')
@section('title', 'Login')

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

                        <!-- Icon login -->
                        <div class="mb-5 text-center"><i class="bi bi-person-circle" style="font-size: 40px;"></i></div>
                        <!-- </Akhir icon login -->

                        <!-- Form -->
                        <form method="post" action="/proses_login">
                            @csrf

                            @if ($sukses_registrasi = Session::get('sukses_registrasi'))
                            <script>
                                Swal.fire({
                            title: 'SUCCESS',
                            text: '{{ $sukses_registrasi}}',
                            icon: 'success'
                            })
                            </script>

                            @elseif ($sukses_di_ubah = Session::get('sukses_di_ubah'))
                            <script>
                                Swal.fire({
                                title: 'SUCCESS',
                                text: '{{ $sukses_di_ubah }}',
                                icon: 'success'
                            })
                            </script>

                            @elseif ($username_tidak_valid = Session::get('username_tidak_valid'))
                            <script>
                                Swal.fire({
                                title: 'ERROR',
                                text: '{{ $username_tidak_valid }}',
                                icon: 'error'
                            })
                            </script>

                            @elseif ($password_tidak_valid = Session::get('password_tidak_valid'))
                            <script>
                                Swal.fire({
                                title: 'ERROR',
                                text: '{{ $password_tidak_valid }}',
                                icon: 'error'
                            })
                            </script>

                            @elseif ($logout = Session::get('logout'))
                            <script>
                                Swal.fire({
                                title: 'SUCCESS',
                                text: '{{ $logout }}',
                                icon: 'success'
                            })
                            </script>

                            @endif

                            <!-- Username -->
                            <div class="mb-4">
                                <label class="form-label" for="username">Username</label>
                                <input type="text" id="username" class="form-control" name="username"
                                    value="{{ old('username')}}" maxlength="20" autocomplete="off" required />
                            </div>
                            <!-- </Akhir username -->

                            <!-- Password -->
                            <div class="mb-4">
                                <label class="form-label" for="password">Password</label>
                                <input type="password" id="password" class="form-control" name="password"
                                    value="{{ old('password')}}" required />
                            </div>
                            <!-- </Akhir password -->

                            <!-- Checkbox -->
                            <div class="form-check d-flex justify-content-start mb-4">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" />
                                <label class="form-check-label ms-2" for="remember"> Remember password </label>
                            </div>
                            <!-- </Akhir checkbox -->

                            <!-- Lupa password -->
                            <div class="mb-3">
                                <a href="{{url('lupa_password')}}">Lupa Password?</a>
                            </div>
                            <!-- </Akhir lupa password -->

                            <!-- Tombol login -->
                            <div class="text-center">
                                <button class="btn btn-dark w-75 text-center rounded-pill" type="submit">Login</button>
                            </div>
                            <!-- </Akhir tombol login -->

                        </form>
                        <!-- </Akhir form -->

                        <!-- Garis -->
                        <hr class="my-4">
                        <!-- </Akhir garis -->

                        <!-- Belum registrasi -->
                        <div class="text-center">
                            <a href="{{url('registrasi')}}">Belum Registrasi?</a>
                        </div>
                        <!-- </Akhir belum registrasi -->

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