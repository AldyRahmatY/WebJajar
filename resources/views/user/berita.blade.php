@extends('layouts.userlayout')
@section('content')

<section class="feature-area section-gap project-area" style="padding-top: 6rem;"> <!-- Tambahkan padding-top untuk memberi jarak dari navbar -->
  <div class="container">
    <div class="page-inner">
      <div class="row justify-content-center"> <!-- justify-content-center untuk membuat row di tengah -->
        <div class="col-12 mx-auto"> <!-- col-10 berada di tengah -->
          <div class="card" style="border: none; background-color: inherit;"> <!-- Card tanpa border dan menyatu dengan warna section -->
            <div class="card-post">
              <div style="display: flex; justify-content: center;">
                <img src="{{ url('assets/user/img/berita/'. $berita->gambar) }}" alt="" width="50%" height="50%" style="object-fit: cover; display: block;">
              </div><br>
              <div class="title d-flex flex-row pb-20">
                <div class="text-left"> <!-- Memastikan tanggal berada di kiri -->
                  <small>{{ $berita->created_at->format('H:i, d M Y') }}</small> <!-- Tanggal upload -->
                </div>
              </div>
              <h2>{{ $berita->judul }}</h2>
              <hr>

              <br>
              <p style="font-size: 1.1em;">{!! nl2br(e($berita->isi)) !!}</p>
            </div>
          </div>
          <div class="text-center">
            <a href="{{ route('Index') }}" class="btn btn-outline-dark">Kembali Ke Halaman Utama</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>





@endsection
