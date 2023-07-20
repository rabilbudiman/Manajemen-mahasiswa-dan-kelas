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
                        <h1 class="h2">Mahasiswa</h1>
                    </div>

                    <div class="bg-body my-3 rounded p-3 shadow-sm">
                        <!-- FORM PENCARIAN -->
                        <div class="pb-3">
                            <form action="{{ url('mahasiswa') }}" class="d-flex" method="get">
                                <input aria-label="Search" class="form-control me-1" name="katakunci"
                                    placeholder="Masukkan kata kunci" type="search"
                                    value="{{ Request::get('katakunci') }}">
                                <button class="btn btn-secondary" type="submit">Cari</button>
                            </form>
                        </div>

                        <!-- TOMBOL TAMBAH DATA -->
                        <div class="pb-3">
                            <a class="btn btn-primary" href='{{ url('mahasiswa/create') }}'>+ Tambah Data</a>
                        </div>

                        <table class="table-striped table">
                            <thead>
                                <tr class="text-center">
                                    <th>No</th>
                                    <!-- <th>Foto</th> -->
                                    <th>NIM</th>
                                    <th>Nama Lengkap</th>
                                    <th>Kelamin</th>
                                    <th>Program Studi</th>
                                    <th>Kelas</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = $data->firstItem(); ?>
                                @foreach ($data as $item)
                                    <tr class="text-center">
                                        <td>{{ $i }}</td>
                                        <td>{{ $item->nim }}</td>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->kelamin }}</td>
                                        <td>{{ $item->jurusan }}</td>
                                        <td>{{ $item->kelas }}</td>
                                        <td>{{ $item->status }}</td>



                                        <td>
                                            <a class="btn btn-warning btn-sm"
                                                href='{{ url('mahasiswa/' . $item->nim . '/edit') }}'>Edit</a>
                                            <form action="{{ url('mahasiswa/' . $item->nim) }}" class='d-inline'
                                                method="post" onsubmit="return confirm('Yakin akan menghapus data?')">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger btn-sm" name="submit"
                                                    type="submit">Del</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
            </div>
            <!-- AKHIR DATA -->
        @endsection
