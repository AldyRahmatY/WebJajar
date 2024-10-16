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
          <form action="{{ route('SimpanBerita') }}" method="POST" enctype="multipart/form-data">
            @csrf
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <div 
                class="form-group">
                  <label for="gambar"
                    >Pilih Gambar Untuk Cover Berita</label>
                  <input
                    type="file"
                    class="form-control-file @error('gambar') is-invalid @enderror"
                    id="gambar"
                    name="gambar"
                    value="{{ old('gambar') }}">

                </div>
                <div class="form-group">
                  <label for="judul">Judul Berita</label>
                  <input
                    type="text"
                    class="form-control @error('judul') is-invalid @enderror"
                    id="judul"
                    name="judul"
                    value="{{ old('judul') }}"
                    placeholder="Masukkan Judul Berita"
                  />
                </div>
                <div class="form-group">
                  <label for="isi">Isi Berita</label>
                  <textarea class="form-control" 
                  id="isi" 
                  name="isi"
                  rows="15">{{ old('isi') }}</textarea>
                </div>                
                  <button type="submit" class="btn btn-success">Submit</button>
                  <a href="{{ route('admin') }}" class="btn btn-danger">Cancel</a>
                </form>
              </div>
            </div>
          </div>

@endsection