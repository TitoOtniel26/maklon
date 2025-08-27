<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Panel</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
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
    <a href="{{ route('content.dashboard') }}" class="d-block text-decoration-none py-2">🏠 Dashboard</a>

    <div class="menu-title">Konten</div>
    <a href="{{ route('article.index') }}" class="d-block text-decoration-none py-2">📝 Artikel</a>
    <a href="{{ route('content.seo-tools') }}" class="d-block text-decoration-none py-2">📊 SEO Tools</a>
    <a href="{{ route('content.monetization') }}" class="d-block text-decoration-none py-2">💰 Monetisasi</a>

    <div class="menu-title">Manajemen</div>
    <a href="{{ route('content.user-setting') }}" class="d-block text-decoration-none py-2">👤 User</a>
    <a href="{{ route('content.setting') }}" class="d-block text-decoration-none py-2">⚙️ Pengaturan</a>

    <div class="menu-title">Data Master</div>
    <a href="{{ route('content.category') }}" class="d-block text-decoration-none py-2">📂 Kategori Global</a>
    <a href="{{ route('content.tag') }}" class="d-block text-decoration-none py-2">🏷️ Tag Utama</a>
    <a href="{{ route('content.template') }}" class="d-block text-decoration-none py-2">📑 Template Artikel</a>
    <a href="{{ route('content.keyword') }}" class="d-block text-decoration-none py-2">🔑 Master Keyword</a>
    <a href="{{ route('content.role') }}" class="d-block text-decoration-none py-2">👥 Role & Permission</a>
    <a href="{{ route('content.monetization-setting') }}" class="d-block text-decoration-none py-2">💰 Pengaturan Monetisasi</a>
    <a href="{{ route('content.media-library') }}" class="d-block text-decoration-none py-2">🖼️ Media Library</a>
    <a href="{{ route('content.language') }}" class="d-block text-decoration-none py-2">🌍 Lokasi & Bahasa</a>
  </div>

  <!-- Sidebar Offcanvas untuk HP -->
  <div class="offcanvas offcanvas-start bg-dark text-white" tabindex="-1" id="mobileSidebar">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title">⚙️ Admin Panel</h5>
      <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body">
      <div class="menu-title">Main</div>
      <a href="{{ route('content.dashboard') }}" class="d-block text-white text-decoration-none py-2">🏠 Dashboard</a>

      <div class="menu-title">Konten</div>
      <a href="{{ route('article.index') }}" class="d-block text-white text-decoration-none py-2">📝 Artikel</a>
      <a href="{{ route('content.seo-tools') }}" class="d-block text-white text-decoration-none py-2">📊 SEO Tools</a>
      <a href="{{ route('content.monetization') }}" class="d-block text-white text-decoration-none py-2">💰 Monetisasi</a>

      <div class="menu-title">Manajemen</div>
      <a href="{{ route('content.user-setting') }}" class="d-block text-white text-decoration-none py-2">👤 User</a>
      <a href="{{ route('content.setting') }}" class="d-block text-white text-decoration-none py-2">⚙️ Pengaturan</a>

      <div class="menu-title">Data Master</div>
      <a href="{{ route('content.category') }}" class="d-block text-white text-decoration-none py-2">📂 Kategori Global</a>
      <a href="{{ route('content.tag') }}" class="d-block text-white text-decoration-none py-2">🏷️ Tag Utama</a>
      <a href="{{ route('content.template') }}" class="d-block text-white text-decoration-none py-2">📑 Template Artikel</a>
      <a href="{{ route('content.keyword') }}" class="d-block text-white text-decoration-none py-2">🔑 Master Keyword</a>
      <a href="{{ route('content.role') }}" class="d-block text-white text-decoration-none py-2">👥 Role & Permission</a>
      <a href="{{ route('content.monetization-setting') }}" class="d-block text-white text-decoration-none py-2">💰 Pengaturan Monetisasi</a>
      <a href="{{ route('content.media-library') }}" class="d-block text-white text-decoration-none py-2">🖼️ Media Library</a>
      <a href="{{ route('content.language') }}" class="d-block text-white text-decoration-none py-2">🌍 Lokasi & Bahasa</a>
    </div>
  </div>

  <!-- Content -->
  <div class="content">
    @yield('content')
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

      @stack('scripts')
</body>
</html>