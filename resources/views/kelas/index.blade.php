<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">
    <title>Data Kelas</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link crossorigin href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">
</head>

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
                    <h1 class="h2">Data kelas</h1>
                </div>

                <div class="bg-body my-3 rounded p-3 shadow-sm">
                    <!-- FORM PENCARIAN -->
                    <div class="pb-3">
                        <form action="{{ url('mahasiswa') }}" class="d-flex" method="get">
                            <input aria-label="Search" class="form-control me-1" name="katakunci"
                                placeholder="Masukkan kata kunci" type="search" value="{{ Request::get('katakunci') }}">
                            <button class="btn btn-secondary" type="submit">Cari</button>
                        </form>
                    </div>
                    <br>

                    <!-- TOMBOL DATA KELAS-->

                    <div class="container-fluid">
                        <div class="row">

                            <div class="col">

                                <a href="#Kelas15" value="kelas15" class="btn btn-primary">Kelas 15</a>
                            </div>

                            <div class="col">

                                <a href="#Kelas16" value="kelas16" class="btn btn-primary">Kelas 16</a>
                            </div>

                            <div class="col">

                                <a href="#Kelas17" value="kelas17" class="btn btn-primary">Kelas 17</a>
                            </div>

                            <div class="col">

                                <a href="#Kelas18" value="kelas18" class="btn btn-primary">Kelas 18</a>
                            </div>

                            <div class="col">

                                <a href="#Kelas19" value="kelas19" class="btn btn-primary">Kelas 19</a>
                            </div>

                            <div class="col">

                                <a href="#Kelas20" value="kelas20" class="btn btn-primary">Kelas 20</a>
                            </div>

                            <div class="col">

                                <a href="#Kelas21" value="kelas21" class="btn btn-primary">Kelas 21</a>
                            </div>

                            <div class="col">

                                <a href="#Kelas22" value="kelas22" class="btn btn-primary">Kelas 22</a>
                            </div>

                        </div>
                    </div>
                    <br>

                    <div class="container">

                        <!-- DATA KELAS 15 -->

                        <div class="container-fluid">

                            <table class="table-striped table">
                                <h3 id="Kelas15">Kelas 15</h3>
                                <thead>
                                    <tr>
                                        <th class="col-md-1">No</th>
                                        <th class="col-md-3">NIM</th>
                                        <th class="col-md-4">Nama</th>
                                        <th class="col-md-4">Kelamin</th>
                                        <th class="col-md-2">Jurusan</th>
                                        <th class="col-md-4">Kelas</th>
                                        <th class="col-md-2">Status</th>
                                        <th class="col-md-2">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($dataKelas[0] as $mahasiswa)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $mahasiswa->nim }}</td>
                                            <td>{{ $mahasiswa->nama }}</td>
                                            <td>{{ $mahasiswa->kelamin }}</td>
                                            <td>{{ $mahasiswa->jurusan }}</td>
                                            <td>{{ $mahasiswa->kelas }}</td>
                                            <td>{{ $mahasiswa->status }}</td>
                                            <td>
                                                <a class="btn btn-warn  ing btn-sm"
                                                    href='{{ url('kelas/' . $mahasiswa->nim . '/edit') }}'>Edit</a>
                                                <form action="{{ url('mahasiswa/' . $mahasiswa->nim) }}" class='d-inline'
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

                        <!-- AKHIR DATA -->
                        <br>
                        <!-- DATA KELAS 16 -->

                        <div class="container-fluid">
                            <table class="table-striped table">
                                <h3 id="Kelas16">Kelas 16</h3>
                                <thead>
                                    <tr>
                                        <th class="col-md-1">No</th>
                                        <th class="col-md-3">NIM</th>
                                        <th class="col-md-4">Nama</th>
                                        <th class="col-md-4">Kelamin</th>
                                        <th class="col-md-2">Jurusan</th>
                                        <th class="col-md-4">Kelas</th>
                                        <th class="col-md-2">Status</th>
                                        <th class="col-md-2">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($dataKelas[1] as $mahasiswa)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $mahasiswa->nim }}</td>
                                            <td>{{ $mahasiswa->nama }}</td>
                                            <td>{{ $mahasiswa->kelamin }}</td>
                                            <td>{{ $mahasiswa->jurusan }}</td>
                                            <td>{{ $mahasiswa->kelas }}</td>
                                            <td>{{ $mahasiswa->status }}</td>
                                            <td>
                                                <a class="btn btn-warn  ing btn-sm"
                                                    href='{{ url('kelas/' . $mahasiswa->nim . '/edit') }}'>Edit</a>
                                                <form action="{{ url('mahasiswa/' . $mahasiswa->nim) }}" class='d-inline'
                                                    method="post"
                                                    onsubmit="return confirm('Yakin akan menghapus data?')">
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

                        <!-- AKHIR DATA -->
                        <br>
                        <!-- DATA KELAS 17 -->

                        <div class="container-fluid">
                            <table class="table-striped table">
                                <h3 id="Kelas17">Kelas 17</h3>
                                <thead>
                                    <tr>
                                        <th class="col-md-1">No</th>
                                        <th class="col-md-3">NIM</th>
                                        <th class="col-md-4">Nama</th>
                                        <th class="col-md-4">Kelamin</th>
                                        <th class="col-md-2">Jurusan</th>
                                        <th class="col-md-4">Kelas</th>
                                        <th class="col-md-2">Status</th>
                                        <th class="col-md-2">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($dataKelas[2] as $mahasiswa)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $mahasiswa->nim }}</td>
                                            <td>{{ $mahasiswa->nama }}</td>
                                            <td>{{ $mahasiswa->kelamin }}</td>
                                            <td>{{ $mahasiswa->jurusan }}</td>
                                            <td>{{ $mahasiswa->kelas }}</td>
                                            <td>{{ $mahasiswa->status }}</td>
                                            <td>
                                                <a class="btn btn-warn  ing btn-sm"
                                                    href='{{ url('kelas/' . $mahasiswa->nim . '/edit') }}'>Edit</a>
                                                <form action="{{ url('mahasiswa/' . $mahasiswa->nim) }}" class='d-inline'
                                                    method="post"
                                                    onsubmit="return confirm('Yakin akan menghapus data?')">
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

                        <!-- AKHIR DATA -->
                        <br>
                        <!-- DATA KELAS 18 -->

                        <div class="container-fluid">
                            <table class="table-striped table">
                                <h3 id="Kelas18">Kelas 18</h3>
                                <thead>
                                    <tr>
                                        <th class="col-md-1">No</th>
                                        <th class="col-md-3">NIM</th>
                                        <th class="col-md-4">Nama</th>
                                        <th class="col-md-4">Kelamin</th>
                                        <th class="col-md-2">Jurusan</th>
                                        <th class="col-md-4">Kelas</th>
                                        <th class="col-md-2">Status</th>
                                        <th class="col-md-2">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($dataKelas[3] as $mahasiswa)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $mahasiswa->nim }}</td>
                                            <td>{{ $mahasiswa->nama }}</td>
                                            <td>{{ $mahasiswa->kelamin }}</td>
                                            <td>{{ $mahasiswa->jurusan }}</td>
                                            <td>{{ $mahasiswa->kelas }}</td>
                                            <td>{{ $mahasiswa->status }}</td>
                                            <td>
                                                <a class="btn btn-warn  ing btn-sm"
                                                    href='{{ url('kelas/' . $mahasiswa->nim . '/edit') }}'>Edit</a>
                                                <form action="{{ url('mahasiswa/' . $mahasiswa->nim) }}" class='d-inline'
                                                    method="post"
                                                    onsubmit="return confirm('Yakin akan menghapus data?')">
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

                        <!-- AKHIR DATA -->
                        <br>
                        <!-- DATA KELAS 19 -->

                        <div class="container-fluid">
                            <table class="table-striped table">
                                <h3 id="Kelas19">Kelas 19</h3>
                                <thead>
                                    <tr>
                                        <th class="col-md-1">No</th>
                                        <th class="col-md-3">NIM</th>
                                        <th class="col-md-4">Nama</th>
                                        <th class="col-md-4">Kelamin</th>
                                        <th class="col-md-2">Jurusan</th>
                                        <th class="col-md-4">Kelas</th>
                                        <th class="col-md-2">Status</th>
                                        <th class="col-md-2">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($dataKelas[4] as $mahasiswa)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $mahasiswa->nim }}</td>
                                            <td>{{ $mahasiswa->nama }}</td>
                                            <td>{{ $mahasiswa->kelamin }}</td>
                                            <td>{{ $mahasiswa->jurusan }}</td>
                                            <td>{{ $mahasiswa->kelas }}</td>
                                            <td>{{ $mahasiswa->status }}</td>
                                            <td>
                                                <a class="btn btn-warn  ing btn-sm"
                                                    href='{{ url('kelas/' . $mahasiswa->nim . '/edit') }}'>Edit</a>
                                                <form action="{{ url('mahasiswa/' . $mahasiswa->nim) }}" class='d-inline'
                                                    method="post"
                                                    onsubmit="return confirm('Yakin akan menghapus data?')">
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

                        <!-- AKHIR DATA -->
                        <br>
                        <!-- DATA KELAS 20 -->

                        <div class="container-fluid">
                            <table class="table-striped table">
                                <h3 id="Kelas20">Kelas 20</h3>
                                <thead>
                                    <tr>
                                        <th class="col-md-1">No</th>
                                        <th class="col-md-3">NIM</th>
                                        <th class="col-md-4">Nama</th>
                                        <th class="col-md-4">Kelamin</th>
                                        <th class="col-md-2">Jurusan</th>
                                        <th class="col-md-4">Kelas</th>
                                        <th class="col-md-2">Status</th>
                                        <th class="col-md-2">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($dataKelas[5] as $mahasiswa)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $mahasiswa->nim }}</td>
                                            <td>{{ $mahasiswa->nama }}</td>
                                            <td>{{ $mahasiswa->kelamin }}</td>
                                            <td>{{ $mahasiswa->jurusan }}</td>
                                            <td>{{ $mahasiswa->kelas }}</td>
                                            <td>{{ $mahasiswa->status }}</td>
                                            <td>
                                                <a class="btn btn-warn  ing btn-sm"
                                                    href='{{ url('kelas/' . $mahasiswa->nim . '/edit') }}'>Edit</a>
                                                <form action="{{ url('mahasiswa/' . $mahasiswa->nim) }}" class='d-inline'
                                                    method="post"
                                                    onsubmit="return confirm('Yakin akan menghapus data?')">
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

                        <!-- AKHIR DATA -->
                        <br>
                        <!-- DATA KELAS 21 -->

                        <div class="container-fluid">
                            <table class="table-striped table">
                                <h3 id="Kelas21">Kelas 21</h3>
                                <thead>
                                    <tr>
                                        <th class="col-md-1">No</th>
                                        <th class="col-md-3">NIM</th>
                                        <th class="col-md-4">Nama</th>
                                        <th class="col-md-4">Kelamin</th>
                                        <th class="col-md-2">Jurusan</th>
                                        <th class="col-md-4">Kelas</th>
                                        <th class="col-md-2">Status</th>
                                        <th class="col-md-2">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($dataKelas[6] as $mahasiswa)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $mahasiswa->nim }}</td>
                                            <td>{{ $mahasiswa->nama }}</td>
                                            <td>{{ $mahasiswa->kelamin }}</td>
                                            <td>{{ $mahasiswa->jurusan }}</td>
                                            <td>{{ $mahasiswa->kelas }}</td>
                                            <td>{{ $mahasiswa->status }}</td>
                                            <td>
                                                <a class="btn btn-warn  ing btn-sm"
                                                    href='{{ url('kelas/' . $mahasiswa->nim . '/edit') }}'>Edit</a>
                                                <form action="{{ url('mahasiswa/' . $mahasiswa->nim) }}" class='d-inline'
                                                    method="post"
                                                    onsubmit="return confirm('Yakin akan menghapus data?')">
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

                        <!-- AKHIR DATA -->
                        <br>
                        <!-- DATA KELAS 22 -->

                        <div class="container-fluid">
                            <table class="table-striped table">
                                <h3 id="Kelas22">Kelas 22</h3>
                                <thead>
                                    <tr>
                                        <th class="col-md-1">No</th>
                                        <th class="col-md-3">NIM</th>
                                        <th class="col-md-4">Nama</th>
                                        <th class="col-md-4">Kelamin</th>
                                        <th class="col-md-2">Jurusan</th>
                                        <th class="col-md-4">Kelas</th>
                                        <th class="col-md-2">Status</th>
                                        <th class="col-md-2">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($dataKelas[7] as $mahasiswa)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $mahasiswa->nim }}</td>
                                            <td>{{ $mahasiswa->nama }}</td>
                                            <td>{{ $mahasiswa->kelamin }}</td>
                                            <td>{{ $mahasiswa->jurusan }}</td>
                                            <td>{{ $mahasiswa->kelas }}</td>
                                            <td>{{ $mahasiswa->status }}</td>
                                            <td>
                                                <a class="btn btn-warn  ing btn-sm"
                                                    href='{{ url('kelas/' . $mahasiswa->nim . '/edit') }}'>Edit</a>
                                                <form action="{{ url('mahasiswa/' . $mahasiswa->nim) }}" class='d-inline'
                                                    method="post"
                                                    onsubmit="return confirm('Yakin akan menghapus data?')">
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

                        <!-- AKHIR DATA -->
                        <br>
                    </div>
                @endsection
            </div>
    </div>
