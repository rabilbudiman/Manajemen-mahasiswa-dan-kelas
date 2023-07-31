<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">
    <title>Data Mahasiswa</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link crossorigin href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">
</head>

<body>
    @extends('layouts.template')
    <!-- START DATA -->
    @section('konten')
        @include('layouts.navbar')

        <div class="container-fluid">
            <div class="row">
                @include('layouts.sidebar')

                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                    <div
                        class="d-flex justify-content-between flex-md-nowrap align-items-center border-bottom mb-3 flex-wrap pb-2 pt-3">
                        <h1 class="h2">Mata Kuliah</h1>
                    </div>

                    <section class="content-section bg-light" id="dosen">
                        <div class="container px-4 px-lg-5 text-left">
                            <div class="row gx-4 gx-lg-5 justify-content-left">
                                <div class="col-lg-10">
                                    <h2>Manajemen Matakuliah</h2>
                                    <p class="lead mb-2 mt-4">
                                    <a class="btn btn-primary btn-l" href="/matakuliah/tambahFormMatakuliah">Tambah Data Matakuliah</a>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                            <th scope="col">NIM</th>
                                            <th scope="col">Nama Matakuliah</th>
                                            <th scope="col">SKS</th>
                                            <th scope="col">Semester</th>
                                            <th scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($dataMataKuliah as $matakuliah)
                                            <tr>
                                            <td>{{$matakuliah->nim}}</td>
                                            <td>{{$matakuliah->nama_mata_kuliah}}</td>
                                            <td>{{$matakuliah->sks}}</td>
                                            <td>{{$matakuliah->semester}}</td>
                                            <td>
                                                <form onsubmit="return confirm('Data Matakuliah Akan Dihapus?')" action="/matakuliah/hapus/{{$matakuliah->id}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger">
                                                    Hapus
                                                </button>
                                                </form></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                      </table>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </section>
            <!-- AKHIR DATA -->
        @endsection
