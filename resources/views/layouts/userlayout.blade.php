<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
  <!-- Mobile Specific Meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Favicon-->
  <link rel="shortcut icon" href="{{ asset('assets/user/img/iconlogo.png') }}">
  <!-- Author Meta -->
  <meta name="author" content="colorlib">
  <!-- Meta Description -->
  <meta name="description" content="">
  <!-- Meta Keyword -->
  <meta name="keywords" content="">
  <!-- meta character set -->
  <meta charset="UTF-8">
  <!-- Site Title -->
  <title>Jajar Gumregah</title>

  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <!--
    CSS
    ============================================= -->
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link rel="stylesheet" href="{{ url('assets/user/css/linearicons.css') }}">
    <link rel="stylesheet" href="{{ url('assets/user/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/user/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ url('assets/user/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ url('assets/user/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/user/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ url('assets/user/css/main.css') }}">
  </head>
  <body>
    <!-- Loader -->
    <div class="preloader">
      <div class="loader">
        <span class="lnr lnr-hourglass"></span>      
      </div>
    </div>
    <!-- start banner Area -->
    <section class="banner-area" id="home">
      <!-- Start Header Area -->
      <header class="default-header">
        <nav class="navbar navbar-expand-lg  navbar-light">
          <div class="container">
              <a class="navbar-brand" href="{{ url('') }}">
                <img src="{{ url('assets/user/img/logo.png') }}" alt="" height="65">
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="text-white lnr lnr-menu"></span>
              </button>

              <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
                <ul class="navbar-nav">
                  <li><a href="{{ url('/#home') }}">BERANDA</a></li>
                  <li><a href="{{ url('/#about') }}">TENTANG JAJAR</a></li>
                  <li><a href="{{ url('/#portfolio') }}">LAYANAN WISATA</a></li>
                  <li><a href="{{ url('/#berita') }}">BERITA</a></li>
                  <li><a href="{{ url('/#galeri') }}">GALERI</a></li>
                  <li><a href="https://forms.gle/xAx52tMegwhmGk7BA" target="_blank">PEMESANAN</a></li>
                  @if (!Auth::check())
                  <li><a href="{{ route('Login') }}">LOGIN ADMIN</a></li>
                  @endif
                  @if (Auth::check())
                <!-- Dropdown -->
                  <li class="dropdown">
                    <a class="dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                      ADMIN WEB
                    </a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="{{ route('admin') }}">Halaman Admin</a>
                      <a class="dropdown-item" href="{{ route('Logout') }}">Logout</a>
                      @endif
                    </div>
                  </li>
                </ul>
              </div>
          </div>
        </nav>
      </header>
      <!-- End Header Area -->
    </section>

    @yield('content')

        {{-- <!-- start contact Area -->
        <section class="contact-area section-gap" id="contact">
          <div class="container">
            <div class="row d-flex justify-content-center">
              <div class="menu-content pb-60 col-lg-8">
                <div class="title text-center">
                  <h1 class="mb-10">Hubungi Kami Untuk Lebih Lanjut</h1>
                </div>
              </div>
            </div>
            <div>
    
          </div>
            <form class="form-area " id="myForm" action="mail.php" method="post" class="contact-form text-right">
              <div class="row">
              <div class="col-lg-6 form-group">
                <input name="name" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="common-input mb-20 form-control" required="" type="text">
    
                <input name="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" required="" type="email">
    
                <input name="subject" placeholder="Enter your subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your subject'" class="common-input mb-20 form-control" required="" type="text">
              </div>
              <div class="col-lg-6 form-group">
                <textarea class="common-textarea mt-10 form-control" name="message" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
                <button class="primary-btn mt-20">Send Message<span class="lnr lnr-arrow-right"></span></button>
                <div class="alert-msg">
              </div>
              </div></div>
            </form>
    
          </div>
        </section>
        <!-- end contact Area --> --}}
    
        <!-- start footer Area -->
        <footer class="footer-area section-half">
          <div class="container">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                  <a class="navbar-brand" href="{{ url('') }}">
                    <img src="{{ url('assets/user/img/logo.png') }}" alt="" height="65">
                  </a>
                  <h6>
                    "JAJAR GUMREGAH TIJI TIBEH" - Mukti Siji Mukti Kabeh
                  </h6>
                  <p>Desa Jajar, Keca. Gandusari, Kabupaten Trenggalek, Jawa Timur 66372
                  </p>
                </div>
              </div>

              
              
              <div class="col-lg-3 col-md-3 col-sm-3 social-widget">
                <div class="single-footer-widget">
                  <h6>Media Sosial Kami</h6>
                  <div class="footer-social d-flex align-items-center">
                    <a href="https://web.facebook.com/kantor.membangun.3?_rdc=1&_rdr" target="_blank"><i class="fa fa-facebook" style="font-size: 24px;"></i></a>
                    <a href="https://www.youtube.com/@JAJARGUMREGAH/featured" target="_blank"><i class="fa fa-youtube" style="font-size: 24px;"></i></a>
                    <a href="https://www.instagram.com/desawisatajajargumregah/" target="_blank"><i class="fa fa-instagram" style="font-size: 24px;"></i></a>
                  </div>                  
                </div>
              </div>

              <div class="col-lg-3 col-md-6 single-footer-widget">
                <h6>Kontak Kami</h6>
                <div style="display: flex; align-items: center;">
                  <i class="fa fa-phone" style="font-size: 20px; margin-right: 10px;"></i> 
                  <p style="font-size: 16px; margin: 0;"> - 082235084215</p>
                </div>
                <div style="display: flex; align-items: center;"class="mt-2">
                  <i class="fa fa-envelope" style="font-size: 20px; margin-right: 10px;"></i> 
                  <p style="font-size: 16px; margin: 0;"> - dewijargum@gmail.com</p>
                </div>
                  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                  <p class="footer-text">Copyright &copy;<script>document.write(new Date().getFullYear());</script> | Made By KKN UM 2024 </a></p>
              </div>
            </div>
          </div>
        </footer>
        <!-- End footer Area -->
    
        <script src="{{ url('assets/user/js/vendor/jquery-2.2.4.min.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="{{ url('assets/user/js/vendor/bootstrap.min.js') }}"></script>
        <script src="{{ url('assets/user/js/jquery.ajaxchimp.min.js') }}"></script>
        <script src="{{ url('assets/user/js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ url('assets/user/js/owl.carousel.min.js') }}"></script>
        <script src="{{ url('assets/user/js/jquery.sticky.js') }}"></script>
        <script src="{{ url('assets/user/js/slick.js') }}"></script>
        <script src="{{ url('assets/user/js/jquery.counterup.min.js') }}"></script>
        <script src="{{ url('assets/user/js/waypoints.min.js') }}"></script>
        <script src="{{ url('assets/user/js/main.js') }}"></script>
      </body>
    </html>
    