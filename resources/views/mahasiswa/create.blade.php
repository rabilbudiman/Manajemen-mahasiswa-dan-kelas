@extends('layout.template')
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

<form method="post" action="/mahasiswa" enctype="multipart/from-data">
@csrf 
<div class="my-3 p-3 bg-body rounded shadow-sm">
    
    <div class="mb-3 row">
        <label for="nim" class="col-sm-2 col-form-label">NIM</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" name='nim' value="{{ Session::get('nim') }}" id="nim">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name='nama' value="{{ Session::get('nama') }}" id="nama">
        </div>
    </div>

    <!--div class="mb-3 row">
        <label for="kelamin" class="col-sm-2 col-form-label">Kelamin</label>
        <div class="col-sm-10">
            <select type="selection" class="form-select" name='kelamin' value="{{ Session::get('kelamin') }}" id="kelamin" aria-label="Default select example">
                <option selected>Pilih Opsi</option>
                <option value="pria">Pria</option>
                <option value="wanita">Wanita</option>
            </select>

        </div>
    </div-->

    <div class="mb-3 row">
        <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
        <div class="col-sm-10">
            <select type="selection" class="form-select" name='jurusan' value="{{ Session::get('jurusan') }}" id="jurusan" aria-label="Default select example">
                <option selected>Pilih Opsi</option>
                <option value="Teknik Sipil">Teknik Sipil</option>
                <option value="Teknik Lingkungan">Teknik Lingkungan</option>
                <option value="Teknik Informatika">Teknik Informatika</option>
                <option value="Teknik Komputer">Teknik Komputer</option>
            </select>
        </div>
    </div>

    <!-- <div class="mb-3 row">
        <label for="foto" class="col-sm-2 col-form-label">Foto</label>
        <div class="col-sm-10">
            <input type="file" class="form-control" name='foto' id="foto">
        </div>
    </div> -->

    <div class="mb-3 row">
        <label for="jurusan" class="col-sm-2 col-form-label"></label>
        <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
    </div>
</div>

</form>
<!-- AKHIR FORM -->

        <!-- //Button kembali//-->
        <a href='{{ url('mahasiswa') }}' class="btn btn-secondary"><< kembali</a>

@endsection
</div>
</div>