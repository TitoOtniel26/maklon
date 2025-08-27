@extends('maklon.master')
@section('content')
<section class="hero container py-5">
  <div class="row align-items-center gy-4">
    <div class="col-lg-6">
      <span class="badge text-bg-primary rounded-pill">Bagikan Karya</span>
      <h1 class="display-5 fw-bold mt-3">Sebarkan Karya Anda ke <span class="text-primary">Seluruh Dunia</span></h1>
      <p class="lead text-muted">Publikasikan konten Anda ke berbagai platform sosial dan situs web hanya dengan sekali klik.</p>
      <div class="d-flex gap-2">
        <a href="#bagikan-sekarang" class="btn btn-primary btn-lg">Bagikan Sekarang</a>
        <a href="#integrasi" class="btn btn-outline-secondary btn-lg">Lihat Integrasi</a>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="card card-soft p-4">
        <div class="d-flex align-items-center gap-3 mb-3">
          <i class="fa-solid fa-share-nodes fs-2 text-primary"></i>
          <div>
            <h5 class="mb-0">Integrasi Sosial</h5>
            <small class="text-muted">Terhubung dengan platform favorit Anda.</small>
          </div>
        </div>
        <div class="d-flex flex-wrap gap-3">
          <a href="#" class="btn btn-outline-primary"><i class="fab fa-instagram me-2"></i> Instagram</a>
          <a href="#" class="btn btn-outline-primary"><i class="fab fa-x-twitter me-2"></i> Twitter/X</a>
          <a href="#" class="btn btn-outline-primary"><i class="fab fa-linkedin me-2"></i> LinkedIn</a>
          <a href="#" class="btn btn-outline-primary"><i class="fab fa-youtube me-2"></i> YouTube</a>
        </div>
        <hr>
        <p class="text-muted mb-0">Bagikan ke blog, website, atau kanal lain dengan tautan kustom yang ramah SEO.</p>
      </div>
    </div>
  </div>
</section>
@endsection