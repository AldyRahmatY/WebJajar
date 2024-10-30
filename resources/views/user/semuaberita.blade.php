@extends('layouts.userlayout')
@section('content')

    <!-- Start feature Area -->
    <section class="feature-area section-gap project-area" id="berita">
      <div class="container col-lg-10">
        <div class="row d-flex justify-content-center">
          <div class="menu-content pb-60 col-lg-8">
            <div class="title text-center">
              <h1 class="mb-10">Berita Desa</h1>
              <p>Simak berita terbaru dan perkembangan terkini seputar Desa Jajar di sini.</p>
            </div>
          </div>
        </div>
        <div class="row">

          @forelse ($semuaberitas as $berita) <!-- Membatasi hanya 6 berita -->
          <div class="col-lg-4 col-md-4">
            <a href="{{ route('BeritaLengkap', ['berita' => $berita->id]) }}" style="text-decoration: none; color: inherit;">
        
              <div class="single-feature mb-30">
                <div style="display: flex; justify-content: center;">
                  <img src="{{ url('assets/user/img/berita/'. $berita->gambar) }}" alt="" width="109%" height="300" style="object-fit: cover; display: block;">
                </div><br>
                <div class="title d-flex flex-row pb-20">
                  <div class="text-left"> <!-- Memastikan tanggal berada di kiri -->
                    <small>{{ $berita->created_at->format('H:i, d M Y') }}</small> <!-- Tanggal upload -->
                  </div>
                </div>
                <hr>
                <h4><a href="{{ route('BeritaLengkap', ['berita' => $berita->id]) }}">{{ $berita->judul }}</a></h4>
                <p>{{ Str::limit($berita->isi, 250, '...') }}</p>
                <div class="text-center">
                  <a href="{{ route('BeritaLengkap', ['berita' => $berita->id]) }}" class="btn btn-outline-dark">Selengkapnya</a>
                </div>
              </div>
            </a>
          </div>
        @empty
          <p>Tidak ada berita yang ditemukan.</p>
        @endforelse
      </div>
    </section>
    <!-- End feature Area -->


@endsection
