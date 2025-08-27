@extends('maklon.master')
@section('content')
<section class="hero container py-5">
  <div class="row align-items-center gy-4">
    <div class="col-lg-6">
      <span class="badge text-bg-primary rounded-pill">Daftar Sekarang</span>
      <h1 class="display-5 fw-bold mt-3">Gabung dengan <span class="text-primary">Platform Kreator</span></h1>
      <p class="lead text-muted">Mulai perjalanan Anda sebagai kreator. Daftar dengan mudah dan akses semua fitur untuk menulis, membagikan, dan mengoptimalkan konten Anda.</p>
      <form class="mt-4">
        <div class="mb-3">
          <label for="name" class="form-label">Nama Lengkap</label>
          <input type="text" class="form-control" id="name" placeholder="Masukkan nama Anda" required>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" placeholder="Masukkan email Anda" required>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Kata Sandi</label>
          <input type="password" class="form-control" id="password" placeholder="Buat kata sandi" required>
        </div>
        <button type="submit" class="btn btn-primary btn-lg">Daftar Sekarang</button>
      </form>
      <p class="mt-3 text-muted">Sudah punya akun? <a href="#masuk" class="text-primary">Masuk di sini</a>.</p>
    </div>
    <div class="col-lg-6">
      <div class="card card-soft p-4">
        <div class="d-flex align-items-center gap-3 mb-3">
          <i class="fa-solid fa-user-plus fs-2 text-primary"></i>
          <div>
            <h5 class="mb-0">Keuntungan Bergabung</h5>
            <small class="text-muted">Akses fitur premium untuk kreator.</small>
          </div>
        </div>
        <ul class="list-unstyled">
          <li class="d-flex align-items-center gap-2 mb-2">
            <i class="fa-solid fa-check text-primary"></i>
            <span>Akses editor menulis yang intuitif.</span>
          </li>
          <li class="d-flex align-items-center gap-2 mb-2">
            <i class="fa-solid fa-check text-primary"></i>
            <span>Bagikan konten ke berbagai platform.</span>
          </li>
          <li class="d-flex align-items-center gap-2 mb-2">
            <i class="fa-solid fa-check text-primary"></i>
            <span>Analitik dan optimasi SEO otomatis.</span>
          </li>
          <li class="d-flex align-items-center gap-2">
            <i class="fa-solid fa-check text-primary"></i>
            <span>Kolaborasi tim dan komunitas kreator.</span>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>
@endsection