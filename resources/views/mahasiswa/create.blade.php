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

    <div class="mb-3 row">
        <label for="kelamin" class="col-sm-2 col-form-label">Kelamin</label>
        <div class="col-sm-10">
            <select type="selection" class="form-select" name='kelamin' value="{{ Session::get('kelamin') }}" id="kelamin" aria-label="Default select example">
                <option selected>Pilih Opsi</option>
                <option value="Pria">Pria</option>
                <option value="Wanita">Wanita</option>
            </select>

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
                <option value="kelas15">15</option>
                <option value="kelas16">16</option>
                <option value="kelas17">17</option>
                <option value="kelas18">18</option>
                <option value="kelas19">19</option>
                <option value="kelas20">20</option>
                <option value="kelas21">21</option>
                <option value="kelas22">22</option>
            </select>

        </div>
    </div>

    <div class="mb-3 row">
        <label for="status" class="col-sm-2 col-form-label">Status</label>
        <div class="col-sm-10">
            <select type="selection" class="form-select" name='status' value="{{ Session::get('status') }}" id="status" aria-label="Default select example">
                <option selected>Pilih Opsi</option>
                <option value="Aktif">Aktif</option>
                <option value="Non Aktif">Non Aktif</option>
            </select>

        </div>
    </div>

    <div class="mb-3 row">
        <label for="jurusan" class="col-sm-2 col-form-label"></label>
        <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
    </div>
</div>

</form>
<!-- AKHIR FORM -->

        <!-- //Button kembali//-->
        <a href='{{ url('mahasiswa') }}' class="btn btn-secondary"><< KEMBALI</a>

@endsection
</div>
</div>