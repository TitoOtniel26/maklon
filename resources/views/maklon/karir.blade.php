@extends('maklon.master')

@section('title', 'Karir - Platform Kreator')
@section('description', 'Bergabunglah dengan tim Platform Kreator dan wujudkan ide kreatif Anda.')
@section('og-title', 'Karir - Platform Kreator')
@section('og-description', 'Jelajahi peluang karir di Platform Kreator dan bergabung dengan tim inovatif kami.')

@section('content')
<main class="container my-5">
  <div class="text-center mb-5">
    <h1 class="fw-bold display-4"><i class="fa-solid fa-briefcase me-2 text-primary"></i>Karir</h1>
    <p class="lead text-muted">Jadilah bagian dari tim kami dan wujudkan ide kreatif Anda bersama Platform Kreator.</p>
  </div>

  <section class="mb-5">
    <div class="card-soft p-4">
      <h3><i class="fa-solid fa-star me-2 text-primary"></i>Mengapa Bergabung dengan Kami?</h3>
      <p>Kami mencari individu berbakat yang bersemangat dalam teknologi dan kreativitas. Bekerja di Platform Kreator berarti Anda akan berada di lingkungan yang mendukung inovasi, kolaborasi, dan pertumbuhan pribadi.</p>
    </div>
  </section>

  <section class="mb-5">
    <h3 class="mb-4"><i class="fa-solid fa-list-ul me-2 text-primary"></i>Lowongan Tersedia</h3>
    <div class="row g-4">
      <div class="col-md-4">
        <div class="card-soft p-4 h-100">
          <h5>Frontend Developer</h5>
          <p class="text-muted">Bangun antarmuka pengguna yang intuitif menggunakan React, Vue, atau Bootstrap.</p>
          <a href="mailto:karir@platformkreator.com?subject=Lamaran%20Frontend%20Developer" class="btn btn-outline-primary btn-sm">Lamar Sekarang</a>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card-soft p-4 h-100">
          <h5>Content Strategist</h5>
          <p class="text-muted">Bantu kreator mengoptimalkan konten mereka dengan strategi SEO dan pemasaran digital.</p>
          <a href="mailto:karir@platformkreator.com?subject=Lamaran%20Content%20Strategist" class="btn btn-outline-primary btn-sm">Lamar Sekarang</a>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card-soft p-4 h-100">
          <h5>Community Manager</h5>
          <p class="text-muted">Kelola komunitas kreator kami dan bangun hubungan yang kuat dengan pengguna.</p>
          <a href="mailto:karir@platformkreator.com?subject=Lamaran%20Community%20Manager" class="btn btn-outline-primary btn-sm">Lamar Sekarang</a>
        </div>
      </div>
    </div>
  </section>

  <section class="text-center">
    <h3><i class="fa-solid fa-paper-plane me-2 text-primary"></i>Cara Melamar</h3>
    <p class="text-muted mb-4">Kirimkan CV dan portofolio Anda ke <a href="mailto:karir@platformkreator.com" class="text-primary">karir@platformkreator.com</a>. Kami akan menghubungi Anda untuk langkah selanjutnya!</p>
    <a href="mailto:karir@platformkreator.com" class="btn btn-primary btn-lg"><i class="fa-solid fa-envelope me-2"></i>Lamar Sekarang</a>
  </section>
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
  .btn-outline-primary {
    transition: background-color 0.3s ease, color 0.3s ease;
  }
  .btn-outline-primary:hover {
    background-color: #4f46e5;
    color: #fff;
  }
</style>
@endsection