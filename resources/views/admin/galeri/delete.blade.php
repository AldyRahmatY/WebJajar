@extends('layouts.adminlayout')
@section('content')
<div class="container">
  <div class="page-inner" style="padding-top: 4rem;">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <div class="card-title">Hapus Galeri </div>
          </div>
          <form action="{{ route('DestroyGaleri',['galeri' => $galeris->id]) }}" method="POST">
          @csrf
          @method('DELETE')
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <div 
                class="form-group">
                    <!-- Menampilkan gambar terlebih dahulu -->
                    <img src="{{ asset('assets/user/img/galeri/' . $galeris->gambar) }}" alt="tidak ada gambar" width="300" class="mb-3">
                    <br>
                    
                    <!-- Label untuk gambar -->
                    <label for="gambar">{{ old('gambar') ?? $galeris->gambar }}</label>
                    
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
                      readonly
                  />
              </div>
              
              <div class="form-group">
                <label for="isi">Isi galeri</label>
                <textarea class="form-control" 
                id="isi" 
                name="isi"
                rows="5"
                disabledvalue="{{ old('isi') ?? $galeris->isi }}">
                </textarea>
              </div>
              
                  <button type="submit" class="btn btn-danger">Hapus</button>
                  <a href="{{ route('admin') }}" class="btn btn-warning">Cancel</a>
                </div>
              </form>
            </div>
          </div>

@endsection