<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Panel</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      font-family: "Segoe UI", sans-serif;
      background-color: #f4f6f9;
    }

    /* Sidebar desktop */
    .sidebar {
      width: 250px;
      background-color: #1e1e2d;
      color: #fff;
      position: fixed;
      top: 0;
      left: 0;
      height: 100vh;
      padding: 15px;
      overflow-y: auto;
    }

    .sidebar h2 {
      font-size: 18px;
      font-weight: bold;
      padding: 10px 0;
      border-bottom: 1px solid #333;
      margin-bottom: 10px;
    }

    .sidebar .menu-title {
      margin: 20px 0 5px;
      font-size: 12px;
      text-transform: uppercase;
      color: #aaa;
    }

    .sidebar a {
      display: block;
      padding: 10px 12px;
      color: #ddd;
      text-decoration: none;
      border-radius: 6px;
    }

    .sidebar a:hover {
      background-color: #2d2d44;
      color: #fff;
    }

    /* Content */
    .content {
      margin-left: 250px;
      padding: 20px;
    }

    /* Responsif: hilangkan sidebar di HP */
    @media (max-width: 992px) {
      .sidebar {
        display: none;
      }
      .content {
        margin-left: 0;
      }
    }

    /* Navbar kecil */
    .topbar {
      background-color: #1e1e2d;
      color: #fff;
      padding: 10px 15px;
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .topbar .brand {
      font-weight: bold;
    }
  </style>
</head>
<body>

  <!-- Topbar (muncul di HP & Desktop) -->
  <div class="topbar d-lg-none">
    <button class="btn btn-sm btn-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileSidebar">
      ☰
    </button>
    <span class="brand">⚙️ Admin Panel</span>
  </div>

  <!-- Sidebar Desktop -->
  <div class="sidebar d-none d-lg-block">
    <h2>⚙️ Admin Panel</h2>

    <div class="menu-title">Main</div>
    <a href="#">🏠 Dashboard</a>

    <div class="menu-title">Konten</div>
    <a href="#">📝 Artikel</a>
    <a href="#">📊 SEO Tools</a>
    <a href="#">💰 Monetisasi</a>

    <div class="menu-title">Manajemen</div>
    <a href="#">👤 User</a>
    <a href="#">⚙️ Pengaturan</a>

    <div class="superuser-menu">
      <div class="menu-title">Data Master</div>
      <a href="#">📂 Kategori Global</a>
      <a href="#">🏷️ Tag Utama</a>
      <a href="#">📑 Template Artikel</a>
      <a href="#">🔑 Master Keyword</a>
      <a href="#">👥 Role & Permission</a>
      <a href="#">💰 Pengaturan Monetisasi</a>
      <a href="#">🖼️ Media Library</a>
      <a href="#">🌍 Lokasi & Bahasa</a>
    </div>
  </div>

  <!-- Sidebar Offcanvas untuk HP -->
  <div class="offcanvas offcanvas-start bg-dark text-white" tabindex="-1" id="mobileSidebar">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title">⚙️ Admin Panel</h5>
      <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body">
      <div class="menu-title">Main</div>
      <a href="#" class="d-block text-white text-decoration-none py-2">🏠 Dashboard</a>

      <div class="menu-title">Konten</div>
      <a href="#" class="d-block text-white text-decoration-none py-2">📝 Artikel</a>
      <a href="#" class="d-block text-white text-decoration-none py-2">📊 SEO Tools</a>
      <a href="#" class="d-block text-white text-decoration-none py-2">💰 Monetisasi</a>

      <div class="menu-title">Manajemen</div>
      <a href="#" class="d-block text-white text-decoration-none py-2">👤 User</a>
      <a href="#" class="d-block text-white text-decoration-none py-2">⚙️ Pengaturan</a>

      <div class="menu-title">Data Master</div>
      <a href="#" class="d-block text-white text-decoration-none py-2">📂 Kategori Global</a>
      <a href="#" class="d-block text-white text-decoration-none py-2">🏷️ Tag Utama</a>
      <a href="#" class="d-block text-white text-decoration-none py-2">📑 Template Artikel</a>
      <a href="#" class="d-block text-white text-decoration-none py-2">🔑 Master Keyword</a>
      <a href="#" class="d-block text-white text-decoration-none py-2">👥 Role & Permission</a>
      <a href="#" class="d-block text-white text-decoration-none py-2">💰 Pengaturan Monetisasi</a>
      <a href="#" class="d-block text-white text-decoration-none py-2">🖼️ Media Library</a>
      <a href="#" class="d-block text-white text-decoration-none py-2">🌍 Lokasi & Bahasa</a>
    </div>
  </div>

  <!-- Content -->
  <div class="content">
    <div class="container-fluid">
      <h1 class="mb-4">Dashboard</h1>
      <div class="card shadow-sm p-4">
        <h4>Ini Dashboard Ya</h4>
        <p>Tapi isinya apa ya?</p>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
