@extends('maklon.master')

@section('title', 'FAQ - Platform Kreator')
@section('description', 'Temukan jawaban atas pertanyaan umum tentang penggunaan Platform Kreator.')
@section('og-title', 'FAQ - Platform Kreator')
@section('og-description', 'Pelajari cara mendaftar, menggunakan alat, dan berbagi karya di Platform Kreator.')

@section('content')
<main class="container my-5">
  <div class="text-center mb-5">
    <h1 class="fw-bold display-4"><i class="fa-solid fa-circle-question me-2 text-primary"></i>Pertanyaan Umum (FAQ)</h1>
    <p class="lead text-muted">Jawaban untuk pertanyaan Anda tentang Platform Kreator, mulai dari pendaftaran hingga optimasi konten.</p>
  </div>

  <div class="row justify-content-center">
    <div class="col-lg-8">
      <div class="accordion" id="faqAccordion">
        <div class="accordion-item card-soft mb-3">
          <h2 class="accordion-header" id="faq1">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
              <i class="fa-solid fa-circle-info me-2"></i> Bagaimana cara mendaftar di Platform Kreator?
            </button>
          </h2>
          <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="faq1" data-bs-parent="#faqAccordion">
            <div class="accordion-body">
              Klik tombol "Daftar" di halaman utama, isi formulir dengan email, nama pengguna, dan kata sandi, lalu verifikasi email Anda. Prosesnya cepat dan mudah, siap untuk mulai berkarya dalam hitungan menit!
            </div>
          </div>
        </div>
        <div class="accordion-item card-soft mb-3">
          <h2 class="accordion-header" id="faq2">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
              <i class="fa-solid fa-wallet me-2"></i> Apakah ada biaya untuk menggunakan Platform Kreator?
            </button>
          </h2>
          <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="faq2" data-bs-parent="#faqAccordion">
            <div class="accordion-body">
              Platform Kreator gratis untuk fitur dasar seperti menulis dan berbagi. Kami juga menawarkan langganan premium untuk akses ke alat SEO dan analitik lanjutan.
            </div>
          </div>
        </div>
        <div class="accordion-item card-soft mb-3">
          <h2 class="accordion-header" id="faq3">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
              <i class="fa-solid fa-share-alt me-2"></i> Bagaimana cara membagikan karya saya?
            </button>
          </h2>
          <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="faq3" data-bs-parent="#faqAccordion">
            <div class="accordion-body">
              Setelah selesai menulis di editor kami, klik "Bagikan" untuk mempublikasikan karya ke komunitas Platform Kreator atau langsung ke media sosial favorit Anda.
            </div>
          </div>
        </div>
      </div>
      <div class="text-center mt-4">
        <a href="/kontak" class="btn btn-primary btn-lg"><i class="fa-solid fa-envelope me-2"></i> Hubungi Kami untuk Pertanyaan Lain</a>
      </div>
    </div>
  </div>
</main>

<style>
  .card-soft {
    border: 1px solid #e5e7eb;
    background: #ffffff;
    box-shadow: 0 4px 20px rgba(0,0,0,0.04);
    border-radius: 16px;
    transition: transform 0.3s ease;
  }
  .card-soft:hover {
    transform: translateY(-5px);
  }
  .accordion-button {
    font-weight: 600;
    color: #111827;
  }
  .accordion-button:not(.collapsed) {
    background: linear-gradient(135deg, #4f46e5, #06b6d4);
    color: #fff;
  }
</style>
@endsection