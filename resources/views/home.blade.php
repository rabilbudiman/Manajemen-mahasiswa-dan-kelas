<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">
    <title>Home | MAMAK</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link crossorigin href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">
</head>
</head>

<body>
    <nav class="navbar navbar-dark bg-info">
        <div class="container mt-3">
            <span class="navbar-brand h1 mb-3">MAMAK</span>
            <div class="col-md-3 text-end">
                <a class="btn btn-outline-warning me-2" href="login">Login</a>
            </div>
        </div>
    </nav>

    <div class="d-flex justify-content-center mt-5">
        <img alt="orang belajar" src="{{ asset('img/belajar.svg') }}" width="500">
        <div class="flex-column text-secondary font-u">
            <h1 class="text-bold">MAMAK</h1>
            <p class="text-bold text-capitalize">Selamat Datang di Manajemen Mahasiswa dan Kelas (MAMAK)</p>
        </div>
    </div>

</body>

</html>
