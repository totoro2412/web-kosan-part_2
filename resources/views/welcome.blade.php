<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>index</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <!-- Favicons -->
  <link href="{{ asset('iLanding/assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('iLanding/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('iLanding/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('iLanding/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('iLanding/assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('iLanding/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('iLanding/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{ asset('iLanding/assets/css/main.css') }}" rel="stylesheet">

</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

        <a href="#hero" class="logo d-flex align-items-center me-auto me-xl-0">
          <img src="{{ asset('iLanding/assets/img/logo.png') }}" alt="">
          <h1 class="sitename">KosBanda</h1>
        </a>

        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="#hero" class="active">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#features">Features</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        <a class="btn-login" id="loginBtn">Login</a>
      </div>

    <!-- Modal -->
      <div id="loginModal" class="modal">
        <div class="modal-content">
          <span class="close">&times;</span>
          <h3>Log in to KosBanda</h3>
          <div class="login-options">
            <a class="btn-login tenant" href="{{ route('login') }}">
                <i class="fas fa-user icon"></i> Tenant Kos
            </a>
            <a class="btn-login admin" href="{{ route('admin.login') }}">
                <i class="fas fa-cog icon"></i> Admin Kos
            </a>
        </div>
        </div>
      </div>
    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="hero-content" data-aos="fade-up" data-aos-delay="200">
              <h1 class="mb-4">
                Hy👋, Selamat Datang di  <br>
                <span class="accent-text">Kosan Banda Putri Nabila </span>
              </h1>

              <p class="mb-4 mb-md-5">
                Untuk menyewa kamar, Anda harus mendaftar dan masuk terlebih dahulu.

              <div class="hero-buttons">
                <a href="{{ route('register') }}" class="btn btn-primary me-0 me-sm-2 mx-1">Get In Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="hero-image" data-aos="zoom-out" data-aos-delay="300">
              <img src="{{ asset('iLanding/assets/img/illustration-1.png') }}" alt="Hero Image" class="img-fluid">

              <div class="customers-badge">
                <div class="customer-avatars">
                  <img src="{{ asset('iLanding/assets/img/avatar1.jpg') }}" alt="Customer 1" class="avatar">
                  <img src="{{ asset('iLanding/assets/img/avatar2.jpg') }}" alt="Customer 2" class="avatar">
                  <img src="{{ asset('iLanding/assets/img/avatar3.jpg') }}" alt="Customer 3" class="avatar">
                  <img src="{{ asset('iLanding/assets/img/avatar4.jpg') }}" alt="Customer 4" class="avatar">
                  <img src="{{ asset('iLanding/assets/img/avatar5.jpg') }}" alt="Customer 5" class="avatar">
                  <span class="avatar more">12+</span>
                </div>
                <p class="mb-0 mt-2">Ratusan orang telah mencoba</p>
              </div>
            </div>
          </div>
        </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">
        <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>ABOUT</h2>
      </div><!-- End Section Title -->
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 align-items-center justify-content-between">

          <div class="col-xl-5" data-aos="fade-up" data-aos-delay="200">
            <h2 class="about-title">KOSAN BANDA PUTRI NABILA</h2>
            <p class="about-description">Kosan Kami berdiri sejak tahun 2012 dan telah melayani para penyewa dengan nyaman dan aman. Dengan pengalaman bertahun-tahun, kami berkomitmen menyediakan lingkungan terbaik bagi mahasiswa, pekerja, dan keluarga kecil.</p>

            <div class="row feature-list-wrapper">
              <div class="col-md-6">
                <ul class="feature-list">
                  <li><i class="bi bi-check-circle-fill"></i> Kosan untuk UMUM</li>
                  <li><i class="bi bi-check-circle-fill"></i> Terdiri dari 2 Lantai dan 34 kamar</li>
                  <li><i class="bi bi-check-circle-fill"></i> Memiliki lokasi Strategis</li>
                </ul>
              </div>
              <div class="col-md-6">
                
              </div>
            </div>

            
          </div>

          <div class="col-xl-6" data-aos="fade-up" data-aos-delay="300">
            <div class="image-wrapper">
              <div class="images position-relative" data-aos="zoom-out" data-aos-delay="400">
                <img src="{{ asset('iLanding/assets/img/gambar1.jpg') }}" alt="Business Meeting" class="img-fluid main-image rounded-4">
                <img src="{{ asset('iLanding/assets/img/gambar2.jpg') }}" alt="Team Discussion" class="img-fluid small-image rounded-4">
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Features Section -->
    <section id="features" class="features section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>FEATURES</h2>
        <p>Berikut Beberapa Fasilitas yang Kami Tawarkan kepada Anda dan Kami Bedakan dalam Kategori harga yang Telah Kami Tatapkan.</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="d-flex justify-content-center">

          <ul class="nav nav-tabs" data-aos="fade-up" data-aos-delay="100">

            <li class="nav-item">
              <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#features-tab-1">
                <h4>600 K</h4>
              </a>
            </li><!-- End tab nav item -->

            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-2">
                <h4>650 K</h4>
              </a><!-- End tab nav item -->

            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-3">
                <h4>700 K</h4>
              </a>
            </li><!-- End tab nav item -->

          </ul>

        </div>

        <div class="tab-content" data-aos="fade-up" data-aos-delay="200">

                <div class="tab-pane fade active show" id="features-tab-1">
            <div class="row">
                <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                    <h3>Kamar Nyaman dengan Harga Rp 600.000</h3>
                    <p class="fst-italic">
                        Kamar ini dirancang untuk memberikan kenyamanan dan kemudahan bagi penghuni, dengan berbagai fasilitas yang mendukung.
                    </p>
                    <ul>
                        <li><i class="bi bi-check2-all"></i> <span>WiFi Gratis untuk akses internet tanpa batas.</span></li>
                        <li><i class="bi bi-check2-all"></i> <span>Kamar mandi dalam dengan perlengkapan mandi lengkap.</span></li>
                        <li><i class="bi bi-check2-all"></i> <span>kuran Kamar 3 X 3,5 meter.</span></li>
                        <li><i class="bi bi-check2-all"></i> <span>Tersedia satu tempat tidur.</span></li>
                        <li><i class="bi bi-check2-all"></i> <span>Dapur bersama untuk kebutuhan memasak.</span></li>
                        <li><i class="bi bi-check2-all"></i> <span>Keamanan 24 jam untuk kenyamanan dan keselamatan.</span></li>
                    </ul>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 text-center">
                    <div class="image-container">
                        <img src="{{ asset('iLanding/assets/img/KAMAR600.jpeg') }}" alt="Kamar Nyaman" class="img-fluid rounded shadow">
                    </div>
                </div>
            </div>
        </div><!-- End tab content item -->

          <div class="tab-pane fade" id="features-tab-2">
            <div class="row">
            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                    <h3>Kamar Nyaman dengan Harga Rp 650.000</h3>
                    <ul>
                        <li><i class="bi bi-check2-all"></i> <span>WiFi Gratis untuk akses internet tanpa batas.</span></li>
                        <li><i class="bi bi-check2-all"></i> <span>Kamar mandi dalam dengan perlengkapan mandi lengkap.</span></li>
                        <li><i class="bi bi-check2-all"></i> <span>kuran Kamar 3 X 4 meter.</span></li>
                        <li><i class="bi bi-check2-all"></i> <span>Tersedia satu tempat tidur.</span></li>
                        <li><i class="bi bi-check2-all"></i> <span>Dapur bersama untuk kebutuhan memasak.</span></li>
                        <li><i class="bi bi-check2-all"></i> <span>Keamanan 24 jam untuk kenyamanan dan keselamatan.</span></li>
                    </ul>
                    <p class="fst-italic">
                        Kamar ini dirancang untuk memberikan kenyamanan dan kemudahan bagi penghuni, dengan berbagai fasilitas yang mendukung.
                    </p>
                </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
              <div class="image-container">
                <img src="{{ asset('iLanding/assets/img/KAMAR650.jpeg') }}" alt="" class="img-fluid">
              </div>
              </div>
            </div>
          </div><!-- End tab content item -->

          <div class="tab-pane fade" id="features-tab-3">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                <h3>Kamar Nyaman dengan Harga Rp 700.000</h3>
                <ul>
                        <li><i class="bi bi-check2-all"></i> <span>WiFi Gratis untuk akses internet tanpa batas.</span></li>
                        <li><i class="bi bi-check2-all"></i> <span>Kamar mandi dalam dengan perlengkapan mandi lengkap.</span></li>
                        <li><i class="bi bi-check2-all"></i> <span>kuran Kamar 3 X 5 meter.</span></li>
                        <li><i class="bi bi-check2-all"></i> <span>Tersedia satu tempat tidur.</span></li>
                        <li><i class="bi bi-check2-all"></i> <span>Dapur bersama untuk kebutuhan memasak.</span></li>
                        <li><i class="bi bi-check2-all"></i> <span>Keamanan 24 jam untuk kenyamanan dan keselamatan.</span></li>
                    </ul>
                <p class="fst-italic">
                    Kamar ini dirancang untuk memberikan kenyamanan dan kemudahan bagi penghuni, dengan berbagai fasilitas yang mendukung.
                </p>
            </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
              <div class="image-container">
                <img src="{{ asset('iLanding/assets/img/KAMAR700.jpeg') }}" alt="" class="img-fluid">
              </div>
              </div>
            </div>
          </div><!-- End tab content item -->

        </div>

      </div>

    </section><!-- /Features Section -->

      <section id="features-cards" class="features-cards section">
    <div class="container">
      <div id="carouselExample" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">

          <div class="carousel-item active" data-aos="zoom-in" data-aos-delay="100">
            <img src="{{ asset('iLanding/assets/img/gambar1.jpg') }}" class="d-block w-100 zoom-image" alt="Kosan 1">
            <div class="carousel-caption d-none d-md-block">
              <h5>Gambar 1</h5>
              <p>Menampilkan Kosan Tampak Depan</p>
            </div>
          </div>

          <div class="carousel-item" data-aos="zoom-in" data-aos-delay="200">
            <img src="{{ asset('iLanding/assets/img/gamabar3.jpg') }}" class="d-block w-100 zoom-image" alt="Kosan 2">
            <div class="carousel-caption d-none d-md-block">
              <h5>Gambar 2</h5>
              <p>Menunjukkan Tampak Samping Kosan</p>
            </div>
          </div>

          <div class="carousel-item" data-aos="zoom-in" data-aos-delay="300">
            <img src="{{ asset('iLanding/assets/img/gambar2.jpg') }}" class="d-block w-100 zoom-image" alt="Kosan 3">
            <div class="carousel-caption d-none d-md-block">
              <h5>Gambar 3</h5>
              <p>Menampilkan daerah dalam Kosan</p>
            </div>
          </div>

          <div class="carousel-item" data-aos="zoom-in" data-aos-delay="400">
            <img src="{{ asset('iLanding/assets/img/gambar4.jpg') }}" class="d-block w-100 zoom-image" alt="Kosan 4">
            <div class="carousel-caption d-none d-md-block">
              <h5>Gambar 4</h5>
              <p>Menampilkan Tempat Masak Bersama</p>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </section>
   

    <!-- Contact Section -->
    <section id="contact" class="contact section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>CONTACT</h2>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-4 g-lg-5">
        <div class="col-lg-5">
            <div class="info-box" data-aos="fade-up" data-aos-delay="200">
              <h3>Contact Info</h3>
              <p>Nikmati Kunjungan Anda dengan Kontak kami, juga Alamat Kosan kami Di bawah ini. </p>

              <div class="info-item" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box">
                  <i class="bi bi-geo-alt"></i>
                </div>
                <div class="content">
                  <h4>Our Location</h4>
                  <p>868F+QVV, Kota, Batu Merah, Kec. Sirimau, Kota Ambon, Maluku, Indonesia</p>
                </div>
              </div>

              <div class="info-item" data-aos="fade-up" data-aos-delay="400">
                <div class="icon-box">
                  <i class="bi bi-telephone"></i>
                </div>
                <div class="content">
                  <h4>Phone Number</h4>
                  <p>+62 852-1622-8184</p>
                  <p>+62 812-1693-2765</p>
                </div>
              </div>

              <div class="info-item" data-aos="fade-up" data-aos-delay="500">
                <div class="icon-box">
                  <i class="bi bi-whatsapp"></i> <!-- Ikon WhatsApp -->
                </div>
                <div class="content">
                  <h4>WhatsApp Number</h4>
                  <p>+62 852-1622-8184</p> <!-- Ganti dengan nomor WhatsApp yang sesuai -->
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-7">
          <div class="contact-form" data-aos="fade-up" data-aos-delay="300">
            <h3>Lokasi Kosan Kami</h3>
            <p>Kosan kami terletak di lokasi strategis dan mudah diakses. Anda dapat melihat lokasi kami di peta berikut:</p>

            <div class="map-container" data-aos="fade-up" data-aos-delay="200">
              <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.5781731918723!2d128.2220895742193!3d-3.6830136429413716!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d6ce9577416a703%3A0x7409b857cd24af21!2sKos%20Banda%20Putri%20Nadila!5e0!3m2!1sen!2sus!4v1736610640385!5m2!1sen!2sus" 
                width="100%" 
                height="350" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <div class="info-item" data-aos="fade-up" data-aos-delay="300">
              <h4>Alamat:</h4>
              <p>Kos Banda Putri Nadila</p>
              <p>868F+QVV, Kota, Batu Merah, Kec. Sirimau, Kota Ambon, Maluku, Indonesia</p>
              <p><a href="https://www.google.com/maps?q=Kos+Banda+Putri+Nadila" target="_blank">Lihat di Google Maps</a></p>
            </div>
          </div>
        </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer">

    
    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">2024</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a>Team 1</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('iLanding/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('iLanding/assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('iLanding/assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('iLanding/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('iLanding/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('iLanding/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>

  <!-- Main JS File -->
  <script src="{{ asset('iLanding/assets/js/main.js') }}"></script>

</body>

</html>