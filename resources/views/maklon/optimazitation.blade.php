@extends('maklon.master')
@section('content')
<section class="hero container py-5">
  <div class="row align-items-center gy-4">
    <div class="col-lg-6">
      <span class="badge text-bg-primary rounded-pill">Optimasi Cerdas</span>
      <h1 class="display-5 fw-bold mt-3">Tingkatkan Performa dengan <span class="text-primary">SEO Pintar</span></h1>
      <p class="lead text-muted">Dapatkan skor SEO, rekomendasi kata kunci, dan analitik untuk memaksimalkan jangkauan konten Anda.</p>
      <div class="d-flex gap-2">
        <a href="#optimasi-sekarang" class="btn btn-primary btn-lg">Optimasi Sekarang</a>
        <a href="#pelajari" class="btn btn-outline-secondary btn-lg">Pelajari Cara Kerja</a>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="card card-soft p-4">
        <div class="d-flex align-items-center gap-3 mb-3">
          <i class="fa-solid fa-chart-line fs-2 text-primary"></i>
          <div>
            <h5 class="mb-0">Fitur Optimasi</h5>
            <small class="text-muted">Tingkatkan visibilitas konten Anda.</small>
          </div>
        </div>
        <ul class="list-unstyled">
          <li class="d-flex align-items-center gap-2 mb-2">
            <i class="fa-solid fa-check text-primary"></i>
            <span>Analisis kata kunci otomatis.</span>
          </li>
          <li class="d-flex align-items-center gap-2 mb-2">
            <i class="fa-solid fa-check text-primary"></i>
            <span>Skor SEO real-time.</span>
          </li>
          <li class="d-flex align-items-center gap-2 mb-2">
            <i class="fa-solid fa-check text-primary"></i>
            <span>Rekomendasi perbaikan konten.</span>
          </li>
          <li class="d-flex align-items-center gap-2">
            <i class="fa-solid fa-check text-primary"></i>
            <span>Integrasi Google Analytics.</span>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>
@endsection