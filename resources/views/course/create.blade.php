@extends('layouts.template')
<!-- START FORM -->
@section('konten') 


@include('mahasiswa.layouts.navbar')

<div class="container-fluid">
    <div class="row">
      @include('mahasiswa.layouts.sidebar')
  
      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Tambah Data Mahasiswa</h1>
        </div>

        <section class="row justify-content-center" style="padding-top: 100px ; min-height:100vh">
            <div class="col-6">
            <form action="/matakuliah/tambah" method="post">
                @csrf

            <div class="form-floating">
            <input name="nim" type="text" class="form-control" id="floatingInput" placeholder="Nim">
            <label for="floatingInput">NIM</label>
            </div>
            <div class="form-floating">
            <input name="nama_mata_kuliah" type="text" class="form-control" id="floatingInput" placeholder="Nama Mata Kuliah">
            <label for="floatingInput">Nama Mata Kuliah</label>
            </div>
            <div class="form-floating">
            <input name="sks" type="text" class="form-control" id="floatingInput" placeholder="SKS">
            <label for="floatingInput">SKS</label>
            </div>
            <div class="form-floating">
            <input name="semester" type="number" class="form-control" id="floatingInput" placeholder="SEMESTER">
            <label for="floatingInput">Semester</label>
            </div>
            <div class="checkbox mb-3">
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Tambah Data Mahasiswa</button>
        </div>
        </form>
        </section>

@endsection
</div>
</div>