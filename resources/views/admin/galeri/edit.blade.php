@extends('layouts.adminlayout')
@section('content')
<div class="container">
  <div class="page-inner" style="padding-top: 4rem;">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <div class="card-title">Edit Galeri </div>
          </div>
          <form action="{{ route('UpdateGaleri',['galeri' => $galeris->id]) }}" method="POST" enctype="multipart/form-data">
            @method('PATCH')
            @csrf
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                    <!-- Menampilkan gambar terlebih dahulu -->
                    <img src="{{ asset('assets/user/img/galeri/' . $galeris->gambar) }}" alt="tidak ada gambar" width="300" class="mb-3">
                    <br>
                    
                    <!-- Label untuk gambar -->
                    <label for="gambar">{{ old('gambar') ?? $galeris->gambar }}</label>
                    
                    <!-- Input untuk memilih file -->
                    <input
                        type="file"
                        class="form-control-file @error('gambar') is-invalid @enderror"
                        id="gambar"
                        name="gambar"
                        value="{{ old('gambar') ?? $galeris->gambar }}"
                    />
                </div>
                <div class="form-group">
                  <label for="nama_galeri">Judul Galeri</label>
                  <input
                    type="text"
                    class="form-control @error('nama_galeri') is-invalid @enderror"
                    id="nama_galeri"
                    name="nama_galeri"
                    value="{{ old('nama_galeri') ?? $galeris->nama_galeri }}"
                    placeholder="Masukkan Judul Galeri"
                  />
                </div>
                  <button type="submit" class="btn btn-success">Update</button>
                  <a href="{{ route('admin') }}" class="btn btn-danger">Cancel</a>
                </form>
              </div>
            </div>
          </div>

@endsection