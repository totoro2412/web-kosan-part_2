<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Dashboard</title>
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
            <li><a href="#hero" class="active">Dashboard</a></li>
            <li><a href="" class="active">Room</a></li>
            <li><a class="nav-link" href="{{ route('profile.show') }}">Profil Saya</a></li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
        <a href="#" class="btn-login" id="logintBtn">Logout</a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>

        <script>
            document.getElementById('logintBtn').addEventListener('click', function(event) {
                event.preventDefault(); // Mencegah link default

                const confirmLogout = confirm("Apakah Anda yakin ingin logout?");
                if (confirmLogout) {
                    document.getElementById('logout-form').submit();
                }
            });
</script>
      </div>

    <!-- Modal -->
   
      </div>
    </div>
  </header>

  <main class="main" style="padding-top: 70px;">
    <div class="container mt-5">
    <h1>Pilih Kamar yang Mau Disewa</h1>
    <div class="container">
        <div class="card">
            <img src="kamar01.jpg" alt="Kamar 01">
            <h2>Kamar 01</h2>
            <p class="harga">Harga: Rp 600.000/bulan</p>
            <p class="tersedia">Tersedia</p>
            <button class="pilih">Pilih</button>
        </div>
        <div class="card">
            <img src="kamar02.jpg" alt="Kamar 02">
            <h2>Kamar 02</h2>
            <p class="harga">Harga: Rp 500.000/bulan</p>
            <p class="tersedia">Tersedia</p>
            <button class="pilih">Pilih</button>
        </div>
        <div class="card">
            <img src="kamar03.jpg" alt="Kamar 03">
            <h2>Kamar 03</h2>
            <p class="harga">Harga: Rp 650.000/bulan</p>
            <p class="tersedia">Tersedia</p>
            <button class="pilih">Pilih</button>
        </div>
    </div>

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