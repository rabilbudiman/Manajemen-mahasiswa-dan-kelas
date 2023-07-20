@extends('layouts.template')
<!-- START FORM -->
@section('konten') 

@include('layouts.navbar')

<div class="container-fluid">
    <div class="row">
      @include('kelas.layouts.sidebar')
  
      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Tambah Data kelas</h1>
    </div>

<form action='{{ url('kelas/'.$data->nim) }}' method='post'>
@csrf 
@method('PUT')
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
        <input type="number" class="form-control" name='nim' value="{{ Session::get('nim') }}" id="nim">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
        <div class="col-sm-10">
        <select type="selection" class="form-select" name='jurusan' value="{{ Session::get('jurusan') }}" id="jurusan" aria-label="Default select example">
                <option selected>Pilih Opsi</option>
                <option value="Teknik Sipil">Teknik Sipil</option>
                <option value="Teknik Lingkungan">Teknik Lingkungan</option>
                <option value="Teknik Informatika">Teknik Informatika</option>
                <option value="Teknik Komputer">Teknik Komputer</option>
                <option value="Teknik Komputer">Teknik Mesin</option>
            </select>
        </div>
    </div>

    <div class="mb-3 row">
        <label for="kelas" class="col-sm-2 col-form-label">Kelas</label>
        <div class="col-sm-10">
            <select type="selection" class="form-select" name='kelas' value="{{ Session::get('kelas') }}" id="kelas" aria-label="Default select example">
                <option selected>Pilih Opsi</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
            </select>

        </div>
    </div>

    <div class="mb-3 row">
        <label for="status" class="col-sm-2 col-form-label">Status</label>
        <div class="col-sm-10">
            <select type="selection" class="form-select" name='status' value="{{ Session::get('status') }}" id="status" aria-label="Default select example">
                <option selected>Pilih Opsi</option>
                <option value="Pria">Aktif</option>
                <option value="Wanita">Non Aktif</option>
            </select>

        </div>
    </div>

    <div class="mb-3 row">
        <label for="jurusan" class="col-sm-2 col-form-label"></label>
        <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
    </div>
</div>
<a href='{{ url('kelas') }}' class="btn btn-secondary"><< kembali</a>
</form>
<!-- AKHIR FORM -->
@endsection
</div>
</div>