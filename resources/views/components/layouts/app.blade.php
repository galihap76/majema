<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>{{ env('APP_NAME') }}</title>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    @livewireStyles
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand ps-3" href="#"><i class="bi bi-person-vcard-fill"></i> {{ env('APP_NAME') }}</a>
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-5 mx-lg-0" id="sidebarToggle" href="#!"><i
                class="fas fa-bars"></i></button>
        <ul class="navbar-nav ms-auto me-3">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    @if ($username_ID = Session::get('username_ID'))
                    <li><a class="dropdown-item" href="#!">{{ $username_ID }}</a></li>
                    @endif
                </ul>
            </li>
        </ul>
    </nav>

    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Dashboard App</div>
                        <a class="nav-link {{ Request::path() == 'dashboard' ? 'active' : '' }}"
                            href="{{url('dashboard')}}">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <div class="sb-sidenav-menu-heading">Data Mahasiswa</div>

                        <a class="nav-link {{ Request::path() == 'semua_mahasiswa' ? 'active' : '' }}"
                            href="{{url('semua_mahasiswa')}}">
                            <div class="sb-nav-link-icon"><i class="bi bi-people-fill"></i></div>
                            Semua Mahasiswa
                        </a>
                        <a class="nav-link {{ Request::path() == 'mahasiswa_aktif' ? 'active' : '' }}"
                            href="{{url('mahasiswa_aktif')}}">
                            <div class="sb-nav-link-icon"><i class="bi bi-person-check-fill"></i></div>
                            Mahasiswa Aktif
                        </a>
                        <a class="nav-link {{ Request::path() == 'mahasiswa_tidak_aktif' ? 'active' : '' }}"
                            href="{{url('mahasiswa_tidak_aktif')}}">
                            <div class="sb-nav-link-icon"><i class="bi bi-person-dash-fill"></i></div>
                            Mahasiswa Tidak Aktif
                        </a>

                        <div class="sb-sidenav-menu-heading">Auth</div>
                        <a class="nav-link" href="{{url('logout')}}">
                            <div class="sb-nav-link-icon"><i class="bi bi-box-arrow-left"></i></div>
                            Log Out
                        </a>
                    </div>
                </div>
            </nav>
        </div>
        {{ $slot }}
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/scripts.js')}}"></script>
    @stack('scripts')
    @livewireScripts
</body>

</html>