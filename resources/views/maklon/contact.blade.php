@extends('maklon.master')

@section('title', 'Kontak Kami - Platform Kreator')
@section('description', 'Hubungi tim Platform Kreator untuk pertanyaan, dukungan, atau kolaborasi.')
@section('og-title', 'Kontak Kami - Platform Kreator')
@section('og-description', 'Kirim pesan atau hubungi kami melalui email, telepon, atau kunjungi kantor kami di Jakarta.')

@section('content')
<main class="container my-5">
  <div class="text-center mb-5">
    <h1 class="fw-bold display-4"><i class="fa-solid fa-envelope me-2 text-primary"></i>Kontak Kami</h1>
    <p class="lead text-muted">Kami siap membantu Anda! Kirim pesan, hubungi kami, atau kunjungi kantor kami untuk mendiskusikan ide, pertanyaan, atau kolaborasi.</p>
  </div>

  <div class="row g-4">
    <!-- Formulir Kontak -->
    <div class="col-lg-7">
      <div class="card-soft p-4">
        <h3><i class="fa-solid fa-message me-2 text-primary"></i>Kirim Pesan</h3>
        <form action="/kontak/submit" method="POST" aria-label="Formulir Kontak">
          @csrf
          <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan nama Anda" required aria-required="true">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email Anda" required aria-required="true">
          </div>
          <div class="mb-3">
            <label for="subject" class="form-label">Subjek</label>
            <input type="text" class="form-control" id="subject" name="subject" placeholder="Masukkan subjek pesan" required aria-required="true">
          </div>
          <div class="mb-3">
            <label for="message" class="form-label">Pesan</label>
            <textarea class="form-control" id="message" name="message" rows="5" placeholder="Tulis pesan Anda di sini..." required aria-required="true"></textarea>
          </div>
          <button type="submit" class="btn btn-primary btn-lg"><i class="fa-solid fa-paper-plane me-2"></i>Kirim Pesan</button>
        </form>
      </div>
    </div>

    <!-- Informasi Kontak -->
    <div class="col-lg-5">
      <div class="card-soft p-4">
        <h3><i class="fa-solid fa-info-circle me-2 text-primary"></i>Informasi Kontak</h3>
        <ul class="list-unstyled">
          <li class="mb-3">
            <i class="fa-solid fa-envelope me-2 text-primary"></i>
            <a href="mailto:info@platformkreator.com" class="text-primary">info@platformkreator.com</a>
          </li>
          <li class="mb-3">
            <i class="fa-solid fa-phone me-2 text-primary"></i>
            <a href="tel:+622112345678" class="text-primary">+62 21 1234 5678</a>
          </li>
          <li class="mb-3">
            <i class="fa-solid fa-map-marker-alt me-2 text-primary"></i>
            Jalan Gg. H. Nisan No.52, RT.6/RW.7, Ragunan, Ps. Minggu, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12550
          </li>
        </ul>
        <div class="mt-4">
          <h5>Ikuti Kami</h5>
          <div class="d-flex gap-3">
            <a href="https://twitter.com/platformkreator" class="text-primary" aria-label="Ikuti kami di Twitter"><i class="fa-brands fa-x-twitter fa-2x"></i></a>
            <a href="https://instagram.com/platformkreator" class="text-primary" aria-label="Ikuti kami di Instagram"><i class="fa-brands fa-instagram fa-2x"></i></a>
            <a href="https://linkedin.com/company/platformkreator" class="text-primary" aria-label="Ikuti kami di LinkedIn"><i class="fa-brands fa-linkedin fa-2x"></i></a>
          </div>
        </div>
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
  .form-control:focus {
    border-color: #4f46e5;
    box-shadow: 0 0 0 0.25rem rgba(79, 70, 229, 0.25);
  }
  .btn-primary {
    background: linear-gradient(135deg, #4f46e5, #06b6d4);
    border: none;
    transition: transform 0.3s ease;
  }
  .btn-primary:hover {
    transform: scale(1.05);
  }
</style>
@endsection