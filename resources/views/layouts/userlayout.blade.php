<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
  <!-- Mobile Specific Meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Favicon-->
  <link rel="shortcut icon" href="img/fav.png">
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
              <a class="navbar-brand" href="index.html">
                <img src="{{ url('assets/user/img/logo.png') }}" alt="">
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="text-white lnr lnr-menu"></span>
              </button>

              <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
                <ul class="navbar-nav">
                <li><a href="#home">Beranda</a></li>
                <li><a href="#about">Tentang Jajar</a></li>
                <li><a href="#portfolio">Destinasi Wisata</a></li>
                <li><a href="#berita">Berita</a></li>
                <li><a href="#galeri">Galeri</a></li>
                <li><a href="#contact">Hubungi Kami</a></li>
                <!-- Dropdown -->
                  <li class="dropdown">
                    <a class="dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                      Info Pemesanan
                    </a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="generic.html">Form pendaftaran</a>
                      <a class="dropdown-item" href="{{ route('admin') }}">Login Admin</a>
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

        <!-- start contact Area -->
        <section class="contact-area section-gap" id="contact">
          <div class="container">
            <div class="row d-flex justify-content-center">
              <div class="menu-content pb-60 col-lg-8">
                <div class="title text-center">
                  <h1 class="mb-10">Hubungi Kami Untuk Lebih Lanjut</h1>
                  <p>Who are in extremely love with eco friendly system.</p>
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
        <!-- end contact Area -->
    
        <!-- start footer Area -->
        <footer class="footer-area section-gap">
          <div class="container">
            <div class="row">
              <div class="col-lg-5 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                  <h6>About Us</h6>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.
                  </p>
                  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                  <p class="footer-text">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
                  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </div>
              </div>
              <div class="col-lg-5  col-md-6 col-sm-6">
                <div class="single-footer-widget">
                  <h6>Newsletter</h6>
                  <p>Stay update with our latest</p>
                  <div class="" id="mc_embed_signup">
    
                      <form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">
    
                      <div class="d-flex flex-row">
    
                        <input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">
    
    
                                        <button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
                                        <div style="position: absolute; left: -5000px;">
                            <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                          </div>
    
                        <!-- <div class="col-lg-4 col-md-4">
                          <button class="bb-btn btn"><span class="lnr lnr-arrow-right"></span></button>
                        </div>  -->
                      </div>
                      <div class="info"></div>
                      </form>
                  </div>
                  </div>
              </div>
              <div class="col-lg-2 col-md-6 col-sm-6 social-widget">
                <div class="single-footer-widget">
                  <h6>Follow Us</h6>
                  <p>Let us be social</p>
                  <div class="footer-social d-flex align-items-center">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                  </div>
                </div>
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
    