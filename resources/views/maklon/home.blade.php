@extends('maklon.master')

@section('content')

<header class="bg-light text-center py-5">
  <div class="container">
    <h1 class="fw-bold">Selamat Datang di Platform Kreator 🚀</h1>
    <p class="lead">Tempat terbaik untuk menulis, berbagi, dan optimasi konten Anda.</p>
    <a href="{{ route('maklon.register') }}" class="btn btn-lg btn-primary mt-3">Mulai Sekarang</a>
  </div>
</header>

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
              <div class="col-sm-6"><div class="p-3 border rounded-3 h-100"><h6 class="fw-bold mb-1">Menulis Cepat</h6><p class="mb-0 text-muted">Editor simpel, hasil rapi.</p></div></div>
              <div class="col-sm-6"><div class="p-3 border rounded-3 h-100"><h6 class="fw-bold mb-1">Bagikan Mudah</h6><p class="mb-0 text-muted">Sekali klik ke banyak kanal.</p></div></div>
              <div class="col-sm-6"><div class="p-3 border rounded-3 h-100"><h6 class="fw-bold mb-1">Optimasi Pintar</h6><p class="mb-0 text-muted">Skor dan rekomendasi perbaikan.</p></div></div>
              <div class="col-sm-6"><div class="p-3 border rounded-3 h-100"><h6 class="fw-bold mb-1">Kolaborasi</h6><p class="mb-0 text-muted">Undang tim dan client.</p></div></div>
            </div>
          </div>
        </div>
      </div>
@endsection