@extends('maklon.master')

@section('title', 'Tentang Kita - Platform Kreator')
@section('description', 'Pelajari lebih lanjut tentang misi, visi, dan tim di balik Platform Kreator.')
@section('og-title', 'Tentang Kita - Platform Kreator')
@section('og-description', 'Platform Kreator adalah komunitas untuk penulis dan kreator. Kenali misi dan visi kami.')

@section('content')
<main class="container my-5">
  <div class="text-center mb-5">
    <h1 class="fw-bold display-4"><i class="fa-solid fa-users me-2 text-primary"></i>Tentang Kami</h1>
    <p class="lead text-muted">Platform Kreator adalah rumah bagi para penulis, kreator, dan pembaca yang ingin menginspirasi dan terinspirasi.</p>
  </div>

  <div class="row g-4">
    <div class="col-md-6">
      <div class="card-soft p-4">
        <h3><i class="fa-solid fa-bullseye me-2 text-primary"></i>Misi Kami</h3>
        <p>Mendukung kreativitas global dengan menyediakan alat yang mudah digunakan untuk menulis, berbagi, dan mengoptimalkan konten, sehingga setiap kreator dapat menjangkau audiens mereka.</p>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card-soft p-4">
        <h3><i class="fa-solid fa-eye me-2 text-primary"></i>Visi Kami</h3>
        <p>Menjadi platform terdepan yang memberdayakan kreator dari seluruh dunia untuk mengekspresikan ide mereka dan membangun komunitas yang inspiratif.</p>
      </div>
    </div>
    <div class="col-12">
      <div class="card-soft p-4">
        <h3><i class="fa-solid fa-user-group me-2 text-primary"></i>Tim Kami</h3>
        <p>Kami adalah tim pengembang, desainer, dan kreator berbasis di Jakarta, bersemangat untuk menciptakan pengalaman digital yang mendukung kreativitas. Bersama, kami terus berinovasi untuk memberikan yang terbaik bagi komunitas kami.</p>
      </div>
    </div>
  </div>

  <div class="text-center mt-5">
    <a href="/daftar" class="btn btn-primary btn-lg"><i class="fa-solid fa-user-plus me-2"></i>Bergabung Sekarang</a>
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
</style>
@endsection