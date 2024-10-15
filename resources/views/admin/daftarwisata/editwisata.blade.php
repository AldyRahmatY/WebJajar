@extends('layouts.adminlayout')
@section('content')
<div class="container">
  <div class="page-inner" style="padding-top: 4rem;">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <div class="card-title">Edit Data Wisata </div>
          </div>
          <form action="{{ route('EditDaftarWisata',['daftarwisata' => $daftarwisatas->id]) }}" method="POST" enctype="multipart/form-data">
            @method('PATCH')
            @csrf
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <div 
                class="form-group">
                  <label for="gambar"
                    >Pilih Gambar</label
                  >
                  <input
                    type="file"
                    class="form-control-file @error('gambar') is-invalid @enderror"
                    id="gambar"
                    name="gambar"
                    value="{{ old('gambar') ?? $daftarwisatas->gambar }}"

                  />
                </div>
                <div class="form-group">
                  <label for="nama_wisata">Nama Destinasi Wisata</label>
                  <input
                    type="text"
                    class="form-control @error('nama_wisata') is-invalid @enderror"
                    id="nama_wisata"
                    name="nama_wisata"
                    value="{{ old('nama_wisata') ?? $daftarwisatas->nama_wisata }}"
                    placeholder="Masukkan Nama Destinasi Wisata"
                  />
                </div>
                <div class="form-group">
                  <label for="kategori"
                    >Kategori Wisata</label
                  >
                  <select
                    class="form-select @error('kategori') is-invalid @enderror"
                    id="kategori"
                    name="kategori"
                    value="{{ old('kategori') ?? $daftarwisatas->kategori }}"
                  >
                    <option>Wisata Edukasi</option>
                    <option>Wisata Alam</option>
                    <option>Wisata Kuliner</option>
                    <option>Homestay</option>
                    <option>Coming Soon</option>
                  </select>
                </div>
                  <button type="submit" class="btn btn-success">Update</button>
                  <a href="{{ route('admin') }}" class="btn btn-danger">Cancel</a>
                </form>
              </div>
            </div>
          </div>

@endsection