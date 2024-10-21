<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Login Admin</title>
    <meta
      content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
      name="viewport"
    />
    <link
      rel="icon"
      href="{{ url('assets/user/img/logoatas.png') }}"
      type="image/x-icon"
    />

    <!-- Fonts and icons -->
    <script src="{{ url('assets/admin/js/plugin/webfont/webfont.min.js') }}"></script>
    <script>
      WebFont.load({
        google: { families: ["Public Sans:300,400,500,600,700"] },
        custom: {
          families: [
            "Font Awesome 5 Solid",
            "Font Awesome 5 Regular",
            "Font Awesome 5 Brands",
            "simple-line-icons",
          ],
          urls: ["assets/admin/css/fonts.min.css"],
        },
        active: function () {
          sessionStorage.fonts = true;
        },
      });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ url('assets/admin/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ url('assets/admin/css/plugins.min.css') }}" />
    <link rel="stylesheet" href="{{ url('assets/admin/css/kaiadmin.min.css') }}" />

  </head>
  <body>

    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
      <div class="page-inner">
          <div class="row">
              <div class="col-md-12">
                  <div class="card">
                      <div class="card-header">
                          @if(session()->has('LoginError'))
                              <div class="alert alert-danger">
                                  {{ session('LoginError') }}
                              </div>
                          @endif
                          <div class="card-title text-center">Login Admin Jajar</div>
                      </div>
                      <form action="{{ route('Authenticate') }}" method="POST">
                          @csrf
                          <div class="card-body ps-5 pe-5">
                              <div class="row">
                                  <div class="col-md-12">
                                      <div class="form-group">
                                          <label for="email">Email</label>
                                          <input type="email" name="email" class="form-control" id="email" placeholder="Masukkan Email" required />
                                          <small id="emailHelp2" class="form-text text-muted">Kami tidak akan membagikan email Anda kepada siapa pun.</small>
                                      </div>
                                      <div class="form-group">
                                          <label for="password">Password</label>
                                          <input type="password" name="password" class="form-control" id="password" placeholder="Password" required />
                                      </div>
                                      <div class="d-flex justify-content-center">
                                          <button class="btn btn-success me-2" type="submit">Submit</button>
                                          <a href="{{ route('Index') }}" class="btn btn-primary">Kembali</a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
  


    
   <!--   Core JS Files   -->
   <script src="{{ url('assets/admin/js/core/jquery-3.7.1.min.js') }}"></script>
   <script src="{{ url('assets/admin/js/core/popper.min.js') }}"></script>
   <script src="{{ url('assets/admin/js/core/bootstrap.min.js') }}"></script>

   <!-- jQuery Scrollbar -->
   <script src="{{ url('assets/admin/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>

   <!-- Chart JS -->
   <script src="{{ url('assets/admin/js/plugin/chart.js/chart.min.js') }}"></script>

   <!-- jQuery Sparkline -->
   <script src="{{ url('assets/admin/js/plugin/jquery.sparkline/jquery.sparkline.min.js') }}"></script>

   <!-- Chart Circle -->
   <script src="{{ url('assets/admin/js/plugin/chart-circle/circles.min.js') }}"></script>

   <!-- Datatables -->
   <script src="{{ url('assets/admin/js/plugin/datatables/datatables.min.js') }}"></script>

   <!-- jQuery Vector Maps -->
   <script src="{{ url('assets/admin/js/plugin/jsvectormap/jsvectormap.min.js') }}"></script>
   <script src="{{ url('assets/admin/js/plugin/jsvectormap/world.js') }}"></script>

   <!-- Sweet Alert -->
   <script src="{{ url('assets/admin/js/plugin/sweetalert/sweetalert.min.js') }}"></script>

   <!-- Kaiadmin JS -->
   <script src="{{ url('assets/admin/js/kaiadmin.min.js') }}"></script>
   
   <script src="{{ url('assets/admin/js/demo.js') }}"></script>