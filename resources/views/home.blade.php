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
        <div class="flex-column text-secondary font-u">
            <h1 class="text-bold ">MAMAK</h1>
            <p class="text-bold text-capitalize">Selamat Datang di Manajemen Mahasiswa dan Kelas (MAMAK)</p>
        </div>
        <img alt="orang belajar" src="{{ asset('img/belajar.svg') }}" width="500">
    </div>

    <section class="container py-5 text-center">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">Visi Dan Misi</h1>
                <h2>Visi</h2>
                <p> ”Menjadi universitas yang unggul dalam pengembangan iptek, seni dan sumber daya manusia untuk pemberdayaan masyarakat berdasarkan nilai-nilai ke Islaman”</p>
                <h2>Misi</h2>
                <p> Untuk mewujudkan visi di atas, maka Universitas Muhammadiyah Pontianak merumuskan misinya sebagai berikut.</p>
                <p>Menyelenggarakan pendidikan dan pengajaran, penelitian serta pengabdian kepada masyarkat secara profesional sesuai nilai-nilai keislaman.</p>
                <p> Memajukan dan mengembangkan iptek dan seni sesuai tuntutan perubahan atau perkembangan zaman.</p>
                <p>Mengembangkan dan meningkatkan kualitas sumberdaya manusia, dosen dan karyawan, untuk menghasilkan lulusan yang mempunyai jiwa kemandirian dalam berbagai ilmu pengetahuan, keahlian, teknologi dan seni.</p>
                <p>Membangun pusat-pusat keunggulan (centre of excellence) sesuai kompetensi yang dimiliki dan unggulan strategis daerah.</p>
                <p> Menjalin kerjasama yang berkelanjutan dengan stakeholders di tingkat daerah dan pusat, masyarakat, industri dan dunia usaha baik lokal, regional, nasional maupun internasional.</p>
            </div>
        </div>
    </section>

    <section class="container py-5 text-center">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">Album Perkuliahan</h1>
            </div>
        </div>
    </section>


    <div class="album bg-body-tertiary py-5">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <div class="col">
                    <div class="card shadow-sm">
                        <img alt="perpus" src="{{ asset('img/lulus_kuliah.jpg') }}">
                        <div class="card-body">
                            <p class="card-text">Lulus kuliah adalah salah satu impian dan tujuan banyak orang. Setelah
                                bertahun-tahun belajar, berjuang, dan berkembang, akhirnya mereka bisa meraih gelar
                                sarjana yang diidam-idamkan.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <img alt="perpus" src="{{ asset('img/perpustakaan.jpg') }}">
                        <div class="card-body">
                            <p class="card-text">Perpustakaan adalah tempat arsip buku dari ilmu-ilmu yang ada di dunia,
                                perpustakaan juga tempat paling tenang untuk belajar</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <img alt="panjang umur pertemanan" src="{{ asset('img/berteman.jpg') }}">
                        <div class="card-body">
                            <p class="card-text">Pertemanan merupakan hal yang paling dibutuhkan di dunia ini karena
                                dengan teman kita bisa berbagi pikiran, perasaan bahkan apapun dengan pertemanan kita
                                jadi tahu bahwa manusia itu beragam</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="album bg-body-tertiary py-5">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <div class="col">
                <div class="contact d-flex justify-content-between">
                    <a href="https://www.bing.com/maps?osid=a00048b0-7252-472d-8f5e-f1c156ca35de&cp=-0.0593~109.347902&lvl=17&imgid=7f7b1f8e-229e-4906-9613-2c6d0a2a7051&v=2&sV=2&form=S00027">
                    <section class="Alamat">
                        <h3>Alamat</h3>
                        <p>Jl. Ahmad Yani No. 111 , Pontianak, Kalimantan Barat<br></p>
                    </section>
                    </a>
                    <a href="https://instagram.com/umpontianak.official?igshid=MzRlODBiNWFlZA==">
                    <section class="Alamat">
                        <h3>Instagram</h3>
                        <p>umpontianak.official<br></p>
                    </section>
                    </a>
                </div>
                </div>
            <div>
        </div>
    </div>
</body>

</html>
