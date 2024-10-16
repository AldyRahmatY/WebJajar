@extends('layouts.adminlayout')
@section('content')
<div class="container">
  <div class="page-inner" style="padding-top: 4rem;">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <div class="card-title">Edit Berita </div>
          </div>
          <form action="{{ route('UpdateBerita',['berita' => $beritas->id]) }}" method="POST" enctype="multipart/form-data">
            @method('PATCH')
            @csrf
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                    <!-- Menampilkan gambar terlebih dahulu -->
                    <img src="{{ asset('assets/user/img/berita/' . $beritas->gambar) }}" alt="tidak ada gambar" width="300" class="mb-3">
                    <br>
                    
                    <!-- Label untuk gambar -->
                    <label for="gambar">{{ old('gambar') ?? $beritas->gambar }}</label>
                    
                    <!-- Input untuk memilih file -->
                    <input
                        type="file"
                        class="form-control-file @error('gambar') is-invalid @enderror"
                        id="gambar"
                        name="gambar"
                        value="{{ old('gambar') ?? $beritas->gambar }}"
                    />
                </div>
                <div class="form-group">
                  <label for="judul">Judul Berita</label>
                  <input
                    type="text"
                    class="form-control @error('judul') is-invalid @enderror"
                    id="judul"
                    name="judul"
                    value="{{ old('judul') ?? $beritas->judul }}"
                    placeholder="Masukkan Nama Destinasi Wisata"
                  />
                </div>
                <div class="form-group">
                  <label for="isi">Isi Berita</label>
                  <textarea class="form-control" 
                  id="isi" 
                  name="isi"
                  rows="15">{{ old('isi') ?? $beritas->isi }}</textarea>
                </div>
                
                  <button type="submit" class="btn btn-success">Update</button>
                  <a href="{{ route('admin') }}" class="btn btn-danger">Cancel</a>
                </form>
              </div>
            </div>
          </div>

@endsection