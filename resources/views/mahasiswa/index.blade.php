@extends('layout.template')
<!-- START DATA -->
@section('konten')   

@include('mahasiswa.layouts.navbar')

<div class="container-fluid">
    <div class="row">
      @include('mahasiswa.layouts.sidebar')
  
      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Mahasiswa</h1>
        </div>

        <div class="my-3 p-3 bg-body rounded shadow-sm">
    <!-- FORM PENCARIAN -->
    <div class="pb-3">
        <form class="d-flex" action="{{ url('mahasiswa') }}" method="get">
            <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci" aria-label="Search">
            <button class="btn btn-secondary" type="submit">Cari</button>
        </form>
    </div>
    
    <!-- TOMBOL TAMBAH DATA -->
    <div class="pb-3">
        <a href='{{ url('mahasiswa/create') }}' class="btn btn-primary">+ Tambah Data</a>
    </div>

    <table class="table table-striped">
        <thead>
        <tr class="text-center">
            <th>No</th>
                <!-- <th>Foto</th> -->
                <th>NIM</th>
                <th>Nama Lengkap</th>
                <th>Kelamin</th>
                <th>Program Studi</th>
                <th>Gambar</th>
                <th>Kelas</th>
                <th>Status</th>
                <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
            <?php $i = $data->firstItem() ?>
            @foreach ($data as $item)
            <tr>
                <td>{{ $i }}</td>
                <!-- <td>
                    @if ($item->foto)
                    <img style="max: width 50px; src="{{ url('foto').'/'.$item->foto}}"/>
                    @endif
                </td> -->
                <td>{{ $item->nim }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->kelamin }}</td>
                <td>{{ $item->jurusan }}</td>
                <td>{{ $item->gambar}}</td>
                <td>{{ $item->kelas }}</td>
                <td>{{ $item->status }}</td>

                

                <td>
                    <a href='{{ url('mahasiswa/'.$item->nim.'/edit') }}' class="btn btn-warning btn-sm">Edit</a>
                    <form onsubmit="return confirm('Yakin akan menghapus data?')" class='d-inline' action="{{ url('mahasiswa/'.$item->nim) }}" method="post">
                        @csrf 
                        @method('DELETE')
                        <button type="submit" name="submit" class="btn btn-danger btn-sm">Del</button>
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
