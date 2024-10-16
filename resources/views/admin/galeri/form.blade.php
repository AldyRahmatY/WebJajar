@extends('layouts.adminlayout')
@section('content')
<div class="container">
  <div class="page-inner" style="padding-top: 4rem;">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <div class="card-title">Isi Berita Baru</div>
          </div>
          <form action="{{ route('SimpanGaleri') }}" method="POST" enctype="multipart/form-data">
            @csrf
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <div 
                class="form-group">
                  <label for="gambar"
                    >Pilih Gambar Untuk Diunggah Ke Galeri</label
                  >
                  <input
                    type="file"
                    class="form-control-file @error('gambar') is-invalid @enderror"
                    id="gambar"
                    name="gambar"
                    value="{{ old('gambar') }}">

                  />
                </div>
                <div class="form-group">
                  <label for="nama_galeri">Judul Galeri</label>
                  <input
                    type="text"
                    class="form-control @error('nama_galeri') is-invalid @enderror"
                    id="nama_galeri"
                    name="nama_galeri"
                    value="{{ old('nama_galeri') }}"
                    placeholder="Masukkan Judul Galeri"
                  />
                </div>
                  <button type="submit" class="btn btn-success">Submit</button>
                  <a href="{{ route('admin') }}" class="btn btn-danger">Cancel</a>
                </form>
              </div>
            </div>
          </div>

@endsection