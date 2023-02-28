@extends('layouts.main')
@section('container')
<section id="input" style="height: 100vh;">
    <div class="row d-flex  justify-content-center">
        <div class="col-sm-12 col-md-8 col-lg-6">
            @if (request('id') != null)
            <div class="alert mt-3 alert-warning alert-dismissible fade show" role="alert">
                <strong>Terimakasih Telah Melakukan Pengaduan <br>
                    Nomor Pengaduan : {{ request('id') }}</strong><br>
                <small class="">Silahkan Di Ingat Nomor pengaduannya!!</small>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
          
            @endif
            @if (request('nis') != null)
            <div class="alert mt-3 alert-danger alert-dismissible fade show" role="alert">
               <strong> NIS Anda Belum Terdaftar!! </strong><br>
               <small>Silahkan Isi Datanya Kembali Dengan Benar</small>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              
            @endif
            <a onclick="goBack()"><img src="{{ asset('img/back-logo.jpg') }}" style="height: 40px"></a><br><br>
<script>
    function goBack() {
        window.history.back();
    }
</script>
            <div class="card">
                <div class="card-body p-5">
                    <form action="/aspirasi/store" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label fw-bold">ID Pelapor</label>
                            <input type="text" name="id" class="form-control bg-primary text-light fw-bold" readonly
                                value="{{ $no }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Nomor Induk Siswa</label>
                            <input type="number" name="nis" value="{{ old('nis') }}"
                                class="form-control @error('nis') is-invalid @enderror">
                            @error('nis')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Kategori</label>
                            <div class=" container row d-flex justify-content-center">
                                <div class="col-12 bg-warning rounded-4 bg-gradient p-3">
                                    <div class="row ">
                                        @foreach ($kategori as $kat)
                                        <div class="col-sm-12 col-lg-4 col-md-12 ">
                                            <input class="form-check-input" value="{{ $kat->id }}" type="radio"
                                                name="id_kategori" id="id_kategori1">
                                            <label class="form-check-label" for="id_kategori1">
                                                {{ $kat->ket_kategori }}
                                            </label>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Lokasi</label>
                            <input type="text" name="lokasi" value="{{ old('lokasi') }}"
                                class="form-control  @error('lokasi') is-invalid @enderror">
                            @error('lokasi')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Keterangan</label>
                            <textarea name="ket" id="" value="{{ old('ket') }}"
                                class="form-control @error('ket') is-invalid @enderror" rows="2"></textarea>
                            @error('ket')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="image">Bukti Foto</label>
                            <input type="file" id="image" class="form-control @error('image') is-invalid @enderror" name="image">
                            @error('image')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
          
            </div>
        </div>
    </div>
</section>


@endsection