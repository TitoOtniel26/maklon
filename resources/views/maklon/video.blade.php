@extends('maklon.master')
@section('content')
<section class="hero container py-5">
  <div class="row align-items-center gy-4">
    <div class="col-lg-6">
      <span class="badge text-bg-primary rounded-pill">Edit Video</span>
      <h1 class="display-5 fw-bold mt-3">Buat Video Menarik dengan <span class="text-primary">Editor Video</span></h1>
      <p class="lead text-muted">Edit dan produksi video profesional dengan alat pengeditan kami yang mudah digunakan, lengkap dengan efek dan transisi.</p>
      <div class="d-flex gap-2">
        <a href="#mulai-video" class="btn btn-primary btn-lg">Coba Editor Video</a>
        <a href="#pelajari" class="btn btn-outline-secondary btn-lg">Lihat Fitur</a>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="card card-soft p-4">
        <div class="d-flex align-items-center gap-3 mb-3">
          <i class="fa-solid fa-video fs-2 text-primary"></i>
          <div>
            <h5 class="mb-0">Fitur Video</h5>
            <small class="text-muted">Buat video yang memikat audiens Anda.</small>
          </div>
        </div>
        <div class="row g-3">
          <div class="col-sm-6">
            <div class="p-3 border rounded-3 h-100">
              <h6 class="fw-bold mb-1">Efek Visual</h6>
              <p class="mb-0 text-muted">Tambahkan transisi dan filter menarik.</p>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="p-3 border rounded-3 h-100">
              <h6 class="fw-bold mb-1">Pemotongan Mudah</h6>
              <p class="mb-0 text-muted">Potong dan atur klip dengan presisi.</p>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="p-3 border rounded-3 h-100">
              <h6 class="fw-bold mb-1">Teks & Animasi</h6>
              <p class="mb-0 text-muted">Sisipkan teks animasi untuk pesan kuat.</p>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="p-3 border rounded-3 h-100">
              <h6 class="fw-bold mb-1">Ekspor Cepat</h6>
              <p class="mb-0 text-muted">Render dalam berbagai format video.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection