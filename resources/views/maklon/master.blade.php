<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Platform Kreator</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
  <style>
    body {
      font-family: Arial, sans-serif;
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }
    .navbar {
      background: #fff;
      box-shadow: 0 2px 8px rgba(0,0,0,0.05);
    }
    .search-wrapper {
      transition: width 0.3s ease;
    }
    .search-field {
      width: 0;
      opacity: 0;
      transition: all 0.3s ease;
    }
    .search-field.active {
      width: 200px;
      opacity: 1;
      margin-right: 8px;
    }
    main {
      flex: 1;
    }
    footer {
      background: #0b1020;
      color: #e5e7eb;
    }
    footer a, footer .nav-link {
      color: #fff !important;
      text-decoration: none;
    }

     .footer-item-title, .footer-item{
        text-align: center;
      }


    @media only screen and (max-width:578px){
      .footer-item-title, .footer-item{
        text-align: start !important;
      }

      .footer-item-list{
        align-items: start !important;
      }

    .copyright-text{
      text-align: center !important;
    }

    }

    .copyright-text{
      font-size: 12px;
      text-align:  left;
    }

  </style>
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg" role="navigation" aria-label="Navigasi utama">
  <div class="container-fluid">
    <div class="d-flex align-items-center gap-2">

      <a class="navbar-brand fw-bold" href="/">Platform<span class="text-primary">Kreator</span></a>
    </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mainNav">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link" href="{{ route('maklon.register') }}">Daftar</a></li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="tentangDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Tentang</a>
          <ul class="dropdown-menu" aria-labelledby="tentangDropdown">
            <li><a class="dropdown-item" href="{{ route('maklon.aboutus') }}">Tentang Kita</a></li>
            <li><a class="dropdown-item" href="{{ route('maklon.carrer') }}">Karir</a></li>
            <li><a class="dropdown-item" href="{{ route('maklon.privacy') }}">Kebijakan Privasi</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="kolaborasiDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Kolaborasi</a>
          <ul class="dropdown-menu" aria-labelledby="kolaborasiDropdown">
            <li><a class="dropdown-item" href="{{ route('maklon.write') }}">Menulis Sekarang</a></li>
            <li><a class="dropdown-item" href="{{ route('maklon.sharing') }}">Bagikan Sekarang</a></li>
            <li><a class="dropdown-item" href="{{ route('maklon.faq') }}">FAQ</a></li>
          </ul>
        </li>
        <li class="nav-item"><a class="nav-link" href="{{ route('maklon.optimization') }}">Optimasi</a></li>
      </ul>
      <div class="d-flex align-items-center gap-2 ms-auto">
        <div class="search-wrapper d-flex align-items-center">
          <input type="search" class="form-control search-field" id="searchField" placeholder="Cari sesuatu…" aria-label="Cari" />
          <button class="btn btn-outline-primary" id="searchToggle" aria-label="Tampilkan pencarian">
            <i class="fa-solid fa-magnifying-glass"></i>
          </button>
        </div>
        <a href="{{ route('user.login') }}" class="btn btn-primary">Masuk</a>
      </div>
    </div>
  </div>
</nav>




<!-- Konten -->
<main class="container">
  @yield('content')
</main>

<!-- Footer -->
<footer class="bg-dark text-light mt-5 pt-5 pb-3">
  <div class="container">
    <div class="row gy-4">
      <div class="col-md-4 text-md-start footer-item">
        <h5 class="fw-bold">Platform Kreator</h5>
        <p>Jalan Gg. H. Nisan No.52, RT.6/RW.7, Ragunan, Ps. Minggu, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12550</p>
      </div>
      <div class="col-md-4">
        <h6 class="fw-bold footer-item-title">Tentang</h6>
        <ul class="nav flex-column align-items-center footer-item-list">
          <li class="nav-item"><a href="{{ route('maklon.aboutus') }}" class="nav-link px-2 text-decoration-none">Tentang Kita</a></li>
          <li class="nav-item"><a href="{{ route('maklon.carrer') }}" class="nav-link px-2 text-decoration-none">Karir</a></li>
          <li class="nav-item"><a href="{{ route('maklon.privacy') }}" class="nav-link px-2 text-decoration-none">Kebijakan Privasi</a></li>
        </ul>
      </div>
      <div class="col-md-4">
        <h6 class="fw-bold footer-item-title">Kolaborasi</h6>
        <ul class="nav flex-column align-items-center footer-item-list">
          <li class="nav-item"><a href="{{ route('maklon.write') }}" class="nav-link px-2 text-decoration-none">Menulis Sekarang</a></li>
          <li class="nav-item"><a href="{{ route('maklon.sharing') }}" class="nav-link px-2 text-decoration-none">Bagikan Sekarang</a></li>
          <li class="nav-item"><a href="{{ route('maklon.faq') }}" class="nav-link px-2 text-decoration-none">FAQ</a></li>
        </ul>
      </div>
    </div>
    <p class="mb-0 copyright-text">© Bang Ipul Developer <span class="year">{{ date('Y') }}</span>. All rights reserved.</p>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
  document.addEventListener('DOMContentLoaded', function(){
    const searchToggle = document.getElementById("searchToggle");
    const searchField = document.getElementById("searchField");
    searchToggle.addEventListener("click", () => {
      searchField.classList.toggle("active");
      if (searchField.classList.contains("active")) {
        searchField.focus();
      }
    });
  });
</script>
</body>
</html>