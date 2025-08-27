<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Platform Kreator – Menulis, Bagikan, Optimasi</title>
  <meta name="description" content="Platform modern untuk kreator: daftar, menulis, bagikan, dan optimasi konten Anda. Desain responsif dan SEO-friendly." />
  <link rel="canonical" href="https://contoh-domain-anda.com/" />

  <!-- Open Graph / Twitter -->
  <meta property="og:type" content="website" />
  <meta property="og:title" content="Platform Kreator – Menulis, Bagikan, Optimasi" />
  <meta property="og:description" content="Platform modern untuk kreator: daftar, menulis, bagikan, dan optimasi konten Anda." />
  <meta property="og:url" content="https://contoh-domain-anda.com/" />
  <meta property="og:image" content="https://contoh-domain-anda.com/og-image.jpg" />
  <meta name="twitter:card" content="summary_large_image" />

  <!-- Schema.org Organization -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "Platform Kreator",
    "url": "https://contoh-domain-anda.com/",
    "logo": "https://contoh-domain-anda.com/logo.png",
    "sameAs": [
      "https://www.instagram.com/username",
      "https://twitter.com/username",
      "https://www.linkedin.com/company/username",
      "https://www.youtube.com/@username"
    ],
    "contactPoint": [{
      "@type": "ContactPoint",
      "email": "titotniel26@gmail.com",
      "contactType": "customer support",
      "availableLanguage": ["id", "en"]
    }]
  }
  </script>

  <!-- Bootstrap 5 & Icons & Font -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</head>
<body>
  <!-- Top Navbar -->
  <nav class="navbar navbar-expand-lg" role="navigation" aria-label="Navigasi utama">
    <div class="container-fluid">
      <div class="d-flex align-items-center gap-2">
        <!-- Sidebar toggle on mobile -->
        <button class="btn btn-outline-secondary d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarOffcanvas" aria-controls="sidebarOffcanvas" aria-label="Buka menu samping">
          <i class="fa-solid fa-bars"></i>
        </button>
        <a class="navbar-brand fw-bold" href="#">Platform<span class="text-primary">Kreator</span></a>
      </div>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="mainNav">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item"><a class="nav-link" href="#daftar">Daftar</a></li>
          <li class="nav-item"><a class="nav-link" href="#menulis">Menulis</a></li>
          <li class="nav-item"><a class="nav-link" href="#bagikan">Bagikan</a></li>
          <li class="nav-item"><a class="nav-link" href="#optimasi">Optimasi</a></li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="lainnyaDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Lainnya</a>
            <ul class="dropdown-menu" aria-labelledby="lainnyaDropdown">
              <li><a class="dropdown-item" href="#desain">Desain</a></li>
              <li><a class="dropdown-item" href="#video">Video</a></li>
            </ul>
          </li>
        </ul>

        <!-- Search + Masuk -->
        <div class="d-flex align-items-center gap-2 ms-auto">
          <div class="search-wrapper" id="searchWrap">
            <input type="search" class="form-control search-field" id="searchField" placeholder="Cari sesuatu…" aria-label="Cari" />
            <button class="btn btn-outline-primary" id="searchToggle" aria-label="Tampilkan pencarian">
              <i class="fa-solid fa-magnifying-glass"></i>
            </button>
          </div>
          <a href="#masuk" class="btn btn-primary">Masuk</a>
        </div>
      </div>
    </div>
  </nav>

  <!-- Offcanvas Sidebar (Mobile) -->
  <div class="offcanvas offcanvas-start" tabindex="-1" id="sidebarOffcanvas" aria-labelledby="sidebarOffcanvasLabel">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="sidebarOffcanvasLabel">Menu</h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body d-flex flex-column gap-3">
      <div class="d-flex align-items-center gap-2">
        <div class="logo" style="width:40px;height:40px;border-radius:10px;">PK</div>
        <span class="fw-bold">Platform Kreator</span>
      </div>
      <div class="d-flex gap-3 fs-5">
        <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
        <a href="#" aria-label="Twitter / X"><i class="fab fa-x-twitter"></i></a>
        <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
        <a href="#" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
      </div>
      <div class="list-group">
        <a class="list-group-item list-group-item-action" href="#lokasi">Lokasi</a>
        <a class="list-group-item list-group-item-action" href="#tentang">Tentang</a>
        <a class="list-group-item list-group-item-action" href="#problem-solver">Problem Solver</a>
        <a class="list-group-item list-group-item-action" href="#kolaborasi">Kolaborasi</a>
      </div>
      <div class="small text-muted mt-auto">
        © <span class="year"></span> Platform Kreator · Pertanyaan? <a href="mailto:titotniel26@gmail.com">titotniel26@gmail.com</a>
      </div>
    </div>
  </div>

  <main>
    <!-- Hero -->
    <section class="hero container">
      <div class="row align-items-center gy-4">
        <div class="col-lg-6">
          <span class="badge text-bg-primary rounded-pill">Modern • Responsif • SEO-Friendly</span>
          <h1 class="display-5 fw-bold mt-3">Mulai Berkarya dengan <span class="text-primary">Lebih Cepat</span></h1>
          <p class="lead text-muted">Bangun audiens, tulis artikel, bagikan karya, dan optimalkan performa konten Anda dalam satu tempat.</p>
          <div class="d-flex gap-2">
            <a href="#daftar" class="btn btn-primary btn-lg">Mulai Sekarang</a>
            <a href="#tentang" class="btn btn-outline-secondary btn-lg">Pelajari Dulu</a>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="card card-soft p-4">
            <div class="d-flex align-items-center gap-3">
              <i class="fa-solid fa-rocket fs-2 text-primary"></i>
              <div>
                <h5 class="mb-0">Optimasi SEO Terpasang</h5>
                <small class="text-muted">Meta, Open Graph, Schema siap pakai.</small>
              </div>
            </div>
            <hr/>
            <div class="row g-3">
              <div class="col-sm-6">
                <div class="p-3 border rounded-3 h-100">
                  <h6 class="fw-bold mb-1">Menulis Cepat</h6>
                  <p class="mb-0 text-muted">Editor simpel, hasil rapi.</p>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="p-3 border rounded-3 h-100">
                  <h6 class="fw-bold mb-1">Bagikan Mudah</h6>
                  <p class="mb-0 text-muted">Sekali klik ke banyak kanal.</p>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="p-3 border rounded-3 h-100">
                  <h6 class="fw-bold mb-1">Optimasi Pintar</h6>
                  <p class="mb-0 text-muted">Skor dan rekomendasi perbaikan.</p>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="p-3 border rounded-3 h-100">
                  <h6 class="fw-bold mb-1">Kolaborasi</h6>
                  <p class="mb-0 text-muted">Undang tim dan client.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Sections -->
    <section id="lokasi" class="container py-4">
      <h2 class="h3 fw-bold mb-3">Lokasi</h2>
      <p class="text-muted">Kami hadir secara digital dan siap kolaborasi lintas kota.</p>
    </section>

    <section id="tentang" class="container py-4">
      <h2 class="h3 fw-bold mb-3">Tentang</h2>
      <p class="text-muted">Platform Kreator membantu Anda dari ide hingga distribusi.</p>
    </section>

    <section id="problem-solver" class="container py-4">
      <h2 class="h3 fw-bold mb-3">Problem Solver</h2>
      <p class="text-muted">Kami pecahkan hambatan Anda: SEO, distribusi, dan monetisasi.</p>
    </section>

    <section id="kolaborasi" class="container py-4">
      <h2 class="h3 fw-bold mb-3">Kolaborasi</h2>
      <p class="text-muted">Terbuka untuk kerja sama dengan brand, komunitas, dan agensi.</p>
    </section>
  </main>

  <footer class="mt-5 pt-5 pb-4">
    <div class="container">
      <div class="row gy-4">
        <div class="col-md-6">
          <h5 class="fw-bold">Platform Kreator</h5>
          <p class="mb-2">Bangun karya, bagikan ke dunia, dan optimalkan pertumbuhan Anda.</p>
          <div>© <span class="year"></span> Platform Kreator. Semua hak cipta dilindungi.</div>
          <div class="mt-1">Pertanyaan? Email: <a href="mailto:titotniel26@gmail.com">titotniel26@gmail.com</a></div>
        </div>
        <div class="col-md-3">
          <h6 class="fw-bold">Navigasi</h6>
          <ul class="list-unstyled">
            <li><a href="#daftar">Daftar</a></li>
            <li><a href="#menulis">Menulis</a></li>
            <li><a href="#bagikan">Bagikan</a></li>
            <li><a href="#optimasi">Optimasi</a></li>
          </ul>
        </div>
        <div class="col-md-3">
          <h6 class="fw-bold">Ikuti Kami</h6>
          <div class="d-flex gap-3 fs-5">
            <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
            <a href="#" aria-label="Twitter / X"><i class="fab fa-x-twitter"></i></a>
            <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
            <a href="#" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" defer></script>
  <script>
    // Year
    document.addEventListener('DOMContentLoaded', function(){
      const years = document.querySelectorAll('.year, #year');
      years.forEach(el => el.textContent = new Date().getFullYear());

      // Animated Search Toggle
      const wrap = document.getElementById('searchWrap');
      const toggle = document.getElementById('searchToggle');
      const field = document.getElementById('searchField');

      function closeSearch(){ wrap.classList.remove('active'); field.blur(); }

      toggle.addEventListener('click', function(){
        const active = wrap.classList.toggle('active');
        if(active){ field.focus(); }
      });

      // Close when clicking outside
      document.addEventListener('click', function(e){
        if(!wrap.contains(e.target) && wrap.classList.contains('active')){ closeSearch(); }
      });

      // ESC to close
      document.addEventListener('keydown', function(e){
        if(e.key === 'Escape'){ closeSearch(); }
      });
    });
  </script>
</body>
</html>