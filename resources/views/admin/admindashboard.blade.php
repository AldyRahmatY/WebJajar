
@extends('layouts.adminlayout')
@section('content')

    
<div class="container">
    <div class="page-inner" style="padding-top: 4rem;">
        <div class="col-md-12">

          <section id="layanan">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h4 class="card-title">Layanan Wisata</h4>
                        <a class="btn btn-primary btn-round ms-auto" href="{{ route('BuatDaftarWisata') }}">
                            <i class="fa fa-plus"></i> Tambah Layanan Wisata
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="add-row-1" class="display table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>GAMBAR</th>
                                    <th>NAMA WISATA</th>
                                    <th>KATEGORI</th>
                                    <th style="width: 10%">ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($daftarwisatas as $wisata)
                                    <tr>
                                        <td>
                                            <img src="{{ asset('assets/user/img/daftarwisata/' . $wisata->gambar) }}" 
                                                 alt="tidak ada gambar" width="100" class="mb-3">
                                        </td>
                                        <td>{{ $wisata->nama_wisata }}</td>
                                        <td>{{ $wisata->kategori }}</td>
                                        <td>
                                            <div class="form-button-action">
                                                <a href="{{ route('EditDaftarWisata', ['daftarwisata' => $wisata->id]) }}"
                                                   class="btn btn-link btn-primary btn-lg"
                                                   data-bs-toggle="tooltip" data-original-title="Edit Task">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="{{ route('DeleteDaftarWisata', ['daftarwisata' => $wisata->id]) }}"
                                                   class="btn btn-link btn-danger"
                                                   data-bs-toggle="tooltip" data-original-title="Remove">
                                                    <i class="fa fa-times"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="text-center">Tidak Ada Data</td>
                                    </tr>
                                @endforelse
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>GAMBAR</th>
                                    <th>NAMA WISATA</th>
                                    <th>KATEGORI</th>
                                    <th>ACTION</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
          </section>

          <section id="berita">
            <div class="card">
              <div class="card-header">
                  <div class="d-flex align-items-center">
                      <h4 class="card-title">Berita Jajar</h4>
                      <a class="btn btn-primary btn-round ms-auto" href="{{ route('BuatBerita') }}">
                          <i class="fa fa-plus"></i> Tambah Berita
                      </a>
                  </div>
              </div>
              <div class="card-body">
                  <div class="table-responsive">
                      <table id="add-row-2" class="display table table-striped table-hover">
                          <thead>
                              <tr>
                                  <th>GAMBAR</th>
                                  <th>JUDUL</th>
                                  <th>ISI</th>
                                  <th style="width: 10%">ACTION</th>
                              </tr>
                          </thead>
                          <tbody>
                              @forelse ($beritas as $berita)
                                  <tr>
                                      <td>
                                          <img src="{{ asset('assets/user/img/berita/' . $berita->gambar) }}" 
                                               alt="tidak ada gambar" width="100" class="mb-3">
                                      </td>
                                      <td>{{ $berita->judul }}</td>
                                      <td>{{ $berita->isi }}</td>
                                      <td>
                                          <div class="form-button-action">
                                              <a href="{{ route('EditBerita', ['berita' => $berita->id]) }}"
                                                 class="btn btn-link btn-primary btn-lg"
                                                 data-bs-toggle="tooltip" data-original-title="Edit Task">
                                                  <i class="fa fa-edit"></i>
                                              </a>
                                              <a href="{{ route('DeleteBerita', ['berita' => $berita->id]) }}"
                                                 class="btn btn-link btn-danger"
                                                 data-bs-toggle="tooltip" data-original-title="Remove">
                                                  <i class="fa fa-times"></i>
                                              </a>
                                          </div>
                                      </td>
                                  </tr>
                              @empty
                                  <tr>
                                      <td colspan="4" class="text-center">Tidak Ada Data</td>
                                  </tr>
                              @endforelse
                          </tbody>
                          <tfoot>
                              <tr>
                                  <th>GAMBAR</th>
                                  <th>JUDUL</th>
                                  <th>ISI</th>
                                  <th>ACTION</th>
                              </tr>
                          </tfoot>
                      </table>
                  </div>
              </div>
          </div>
        </section>

        <section id="berita">
          <div class="card">
            <div class="card-header">
                <div class="d-flex align-items-center">
                    <h4 class="card-title">Galeri Jajar</h4>
                    <a class="btn btn-primary btn-round ms-auto" href="{{ route('BuatGaleri') }}">
                        <i class="fa fa-plus"></i> Tambah Galeri
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="add-row-3" class="display table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>GAMBAR</th>
                                <th>NAMA</th>
                                <th>DIBUAT</th>
                                <th style="width: 10%">ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($galeris as $galeri)
                                <tr>
                                    <td>
                                        <img src="{{ asset('assets/user/img/galeri/' . $galeri->gambar) }}" 
                                             alt="tidak ada gambar" width="100" class="mb-3">
                                    </td>
                                    <td>{{ $galeri->nama_galeri }}</td>
                                    <td>{{ $galeri->created_at }}</td>
                                    <td>
                                        <div class="form-button-action">
                                            <a href="{{ route('EditGaleri', ['galeri' => $galeri->id]) }}"
                                               class="btn btn-link btn-primary btn-lg"
                                               data-bs-toggle="tooltip" data-original-title="Edit Task">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="{{ route('DeleteGaleri', ['galeri' => $galeri->id]) }}"
                                               class="btn btn-link btn-danger"
                                               data-bs-toggle="tooltip" data-original-title="Remove">
                                                <i class="fa fa-times"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="text-center">Tidak Ada Data</td>
                                </tr>
                            @endforelse
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>GAMBAR</th>
                                <th>NAMA</th>
                                <th>DIBUAT</th>
                                <th>ACTION</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
      </section>
          
        </div>
    </div>
</div>

  
@endsection
