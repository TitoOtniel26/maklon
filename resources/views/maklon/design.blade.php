@extends('maklon.master')
@section('content')
<section class="hero container py-5">
  <div class="row align-items-center gy-4">
    <div class="col-lg-6">
      <span class="badge text-bg-primary rounded-pill">Desain Kreatif</span>
      <h1 class="display-5 fw-bold mt-3">Ciptakan Visual Menarik dengan <span class="text-primary">Alat Desain</span></h1>
      <p class="lead text-muted">Gunakan alat desain kami untuk membuat grafis, banner, dan konten visual yang memukau dengan mudah, tanpa perlu keahlian desain tingkat lanjut.</p>
      <div class="d-flex gap-2">
        <a href="#mulai-desain" class="btn btn-primary btn-lg">Coba Alat Desain</a>
        <a href="#pelajari" class="btn btn-outline-secondary btn-lg">Lihat Fitur</a>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="card card-soft p-4">
        <div class="d-flex align-items-center gap-3 mb-3">
          <i class="fa-solid fa-palette fs-2 text-primary"></i>
          <div>
            <h5 class="mb-0">Fitur Desain</h5>
            <small class="text-muted">Semua yang Anda butuhkan untuk desain profesional.</small>
          </div>
        </div>
        <div class="row g-3">
          <div class="col-sm-6">
            <div class="p-3 border rounded-3 h-100">
              <h6 class="fw-bold mb-1">Template Siap Pakai</h6>
              <p class="mb-0 text-muted">Pilih dari ratusan template desain.</p>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="p-3 border rounded-3 h-100">
              <h6 class="fw-bold mb-1">Editor Intuitif</h6>
              <p class="mb-0 text-muted">Drag-and-drop untuk desain cepat.</p>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="p-3 border rounded-3 h-100">
              <h6 class="fw-bold mb-1">Ekspor Fleksibel</h6>
              <p class="mb-0 text-muted">Simpan dalam format PNG, JPG, atau SVG.</p>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="p-3 border rounded-3 h-100">
              <h6 class="fw-bold mb-1">Integrasi Media</h6>
              <p class="mb-0 text-muted">Tambahkan ke konten Anda dengan mudah.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection