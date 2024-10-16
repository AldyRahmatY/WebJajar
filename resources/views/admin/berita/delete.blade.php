@extends('layouts.adminlayout')
@section('content')
<div class="container">
  <div class="page-inner" style="padding-top: 4rem;">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <div class="card-title">Hapus Berita </div>
          </div>
          <form action="{{ route('DestroyBerita',['berita' => $beritas->id]) }}" method="POST">
          @csrf
          @method('DELETE')
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <div 
                class="form-group">
                    <!-- Menampilkan gambar terlebih dahulu -->
                    <img src="{{ asset('assets/user/img/berita/' . $beritas->gambar) }}" alt="tidak ada gambar" width="300" class="mb-3">
                    <br>
                    
                    <!-- Label untuk gambar -->
                    <label for="gambar">{{ old('gambar') ?? $beritas->gambar }}</label>
                    
                </div>
                <div class="form-group">
                  <label for="judul">Judul Berita</label>
                  <input
                      type="text"
                      class="form-control @error('judul') is-invalid @enderror"
                      id="judul"
                      name="judul"
                      value="{{ old('judul') ?? $beritas->judul }}"
                      placeholder="Masukkan Judul Berita"
                      readonly
                  />
              </div>
              
              <div class="form-group">
                <label for="isi">Isi Berita</label>
                <textarea class="form-control" 
                id="isi" 
                name="isi"
                rows="15"
                disabled>{{ old('isi') ?? $beritas->isi }}</textarea>
              </div>
              
              
                  <button type="submit" class="btn btn-danger">Hapus</button>
                  <a href="{{ route('admin') }}" class="btn btn-warning">Cancel</a>
                </div>
              </form>
            </div>
          </div>

@endsection