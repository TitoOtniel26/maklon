@extends('maklon.master')
@section('content')
<section class="hero container py-5">
  <div class="row align-items-center gy-4">
    <div class="col-lg-6">
      <span class="badge text-bg-primary rounded-pill">Menulis Mudah</span>
      <h1 class="display-5 fw-bold mt-3">Tulis Karya Anda dengan <span class="text-primary">Lebih Cepat</span></h1>
      <p class="lead text-muted">Gunakan editor kami yang simpel dan canggih untuk menciptakan artikel, blog, atau cerita dengan cepat dan rapi.</p>
      <div class="d-flex gap-2">
        <a href="#mulai-menulis" class="btn btn-primary btn-lg">Coba Editor Sekarang</a>
        <a href="#pelajari" class="btn btn-outline-secondary btn-lg">Pelajari Fitur</a>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="card card-soft p-4">
        <div class="d-flex align-items-center gap-3 mb-3">
          <i class="fa-solid fa-pen-nib fs-2 text-primary"></i>
          <div>
            <h5 class="mb-0">Fitur Editor</h5>
            <small class="text-muted">Semua yang Anda butuhkan untuk menulis.</small>
          </div>
        </div>
        <div class="row g-3">
          <div class="col-sm-6">
            <div class="p-3 border rounded-3 h-100">
              <h6 class="fw-bold mb-1">Tampilan Minimalis</h6>
              <p class="mb-0 text-muted">Fokus pada tulisan tanpa gangguan.</p>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="p-3 border rounded-3 h-100">
              <h6 class="fw-bold mb-1">Format Otomatis</h6>
              <p class="mb-0 text-muted">Atur heading, list, dan media dengan mudah.</p>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="p-3 border rounded-3 h-100">
              <h6 class="fw-bold mb-1">Simpan Otomatis</h6>
              <p class="mb-0 text-muted">Jangan khawatir kehilangan karya Anda.</p>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="p-3 border rounded-3 h-100">
              <h6 class="fw-bold mb-1">Pratinjau Instan</h6>
              <p class="mb-0 text-muted">Lihat hasil sebelum dipublikasikan.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection