@extends('layouts.main')
@section('container')
<div class="p-4 p-md-5 mb-4 text-white rounded bg-dark mt-5 shadow-sm">
    <div class="row">
        <div class="col-md-6 px-0">
            <h1 class="display-4 fst-italic">ASPIRASI SEKOLAH SMK TELKOM JAKARTA</h1>
            <p class="lead my-3">Sampaikan aspirasi anda langsung ke yayasan pendidikan telkom</p>
            <a href="/aspirasi" class="btn btn-secondary btn-lg">Tulis</a>
        </div>
        <div class="col-md-6 d-flex justify-content-end">
            <img src="/img/aspirasi.png" style="max-width: 300px">
        </div>
    </div>
</div>

<div class="row mb-2">
    <div class="col-md-6">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static bg-white">
                <strong class="d-inline-block mb-2 text-primary">Profile</strong>
                <h3 class="mb-0">Perbaikan ac kelas</h3>
                <div class="mb-1 text-muted">Nov 12</div>
                <p class="card-text mb-auto">Menindak lanjuti adanya ac yang rusak, yayasan langsung memperbaikinya</p>
                <a href="/profile" class="stretched-link">Lihat</a>
            </div>
            <div class="col-auto d-none d-lg-block">
                <img src="https://source.unsplash.com/200x250?government" >
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static bg-white">
                <strong class="d-inline-block mb-2 text-success">Sistem</strong>
                <h3 class="mb-0">Perbaikan Fitur</h3>
                <div class="mb-1 text-muted">Nov 11</div>
                <p class="mb-auto">Tim IT sudah memperbaiki fitur formulir yang telah di laporkan oleh user.</p>
                <a href="#form" class="stretched-link">Cek</a>
            </div>
            <div class="col-auto d-none d-lg-block">
                <img src="https://source.unsplash.com/200x250?form" >
            </div>
        </div>
    </div>
</div>

<div class="row g-5 mb-3">

    <div class="col-md-3">
        <div class="position-sticky" style="top: 2rem;">
            <div class="p-4 mb-3 rounded bg-white shadow-sm">
                <h4 class="fst-italic">Search</h4>
                <div class="d-flex mt-3">
                    {{-- <input class="form-control me-2" type="search" placeholder="" aria-label="Search"> --}}
                    <a href="/search" class="btn btn-outline-success btn-block" style="width: 100%">Tekan saya</a>
                </div>
            </div>
            

            @if (session()->has('success'))
                <div class="mt-5">
                    <div class="alert alert-success mx-auto mt-4" role="alert">
                        Berhasil memasukan aspirasi
                    </div>
                </div>
            @endif

        </div>
    </div>

    <div class="col-md-9">
        <article class="blog-post">
            <h2 class="blog-post-title">Layanan baru oleh YAYASAN PENDIDIDKAN TELKOM</h2>
            <p class="blog-post-meta">1 Januari 2021 oleh <strong>YAYASAN PENDIDIKAN TELKOM</strong></p>

            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab facilis in est optio fugiat recusandae illum quasi vel reprehenderit, esse atque odio nostrum minima voluptatibus molestias nam id velit debitis praesentium eveniet eaque laboriosam. t vero qui soluta doloremque vitae animi consequuntur nulla, molestiae fugit nemo dolorum non voluptas.

            </p>
            <hr>
        </article>
<div class="col-12 mb-10">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" style="padding: 10px">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{ asset('img/1.jpg') }}" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{ asset('img/9.jpg') }}" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{ asset('img/maxresdefault.jpg') }}" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    <div class="col-12">
            <Article>
                <h1 class="fw-bold mb-2">Layanan Pengaduan Siswa</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab facilis in est optio fugiat recusandae illum quasi vel reprehenderit, esse atque odio nostrum minima voluptatibus molestias nam id velit debitis praesentium eveniet eaque laboriosam. t vero qui soluta doloremque vitae animi consequuntur nulla, molestiae fugit nemo dolorum non voluptas.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam cum earum quidem? Ullam quibusdam sequi cupiditate laudantium hic natus atque et nulla id, illo necessitatibus? Porro minima sapiente aliquam quam quod accusamus ad nisi, qui maiores nobis molestiae provident nesciunt natus veniam nisi quae quam fugit esse est animi. Ullam, aperiam rem animi blanditiis nobis optio, adipisci soluta ducimus aut labore ratione, quae dolores suscipit sint ipsum provident.</p>
            </Article>
      
    </div>
    <div class="col-12">
        <a href="/aspirasi" class="btn btn-primary fw-bold">Yuk Ajukan Aspirasi</a>
    </div>
</div>
@endsection
