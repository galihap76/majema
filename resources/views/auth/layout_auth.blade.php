<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        body {
            background-color: white;
        }

        a {
            text-decoration: none;
        }
    </style>
</head>

<body>
    <!-- As a heading -->
    <nav class="navbar bg-dark">
        <div class="container-fluid">
            @if (Request::path() == 'auth')
            <span class="navbar-brand mb-0 h1 text-white"><i class="bi bi-person-badge-fill"></i> Login</span>
            @elseif (Request::path() == 'registrasi')
            <span class="navbar-brand mb-0 h1 text-white"><i class="bi bi-person-badge-fill"></i> Registrasi
            </span>
            @elseif (Request::path() == 'lupa_password')
            <span class="navbar-brand mb-0 h1 text-white"><i class="bi bi-person-badge-fill"></i> Lupa Password</span>
            @endif
        </div>
    </nav>

    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>