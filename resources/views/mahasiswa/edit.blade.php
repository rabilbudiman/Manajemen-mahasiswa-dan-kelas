@extends('layout.template')
<!-- START FORM -->
@section('konten') 

@include('admin.layouts.navbar')

<div class="container-fluid">
    <div class="row">
      @include('admin.layouts.sidebar')
  
      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Dashboard</h1>
        </div>

<form action='{{ url('mahasiswa/'.$data->nim) }}' method='post'>
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
            <input type="text" class="form-control" name='nama' value="{{ $data->nama }}" id="nama">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name='jurusan' value="{{ $data->jurusan }}" id="jurusan">
        </div>
    </div>
    <div class="mb-3 row">
        <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
    </div>
</div>
<a href='{{ url('mahasiswa') }}' class="btn btn-secondary"><< kembali</a>
</form>
<!-- AKHIR FORM -->
@endsection

</div>
</div>