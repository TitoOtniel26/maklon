@extends('maklon.master')

@section('title', 'Kebijakan Privasi - Platform Kreator')
@section('description', 'Pelajari bagaimana Platform Kreator melindungi privasi dan data Anda.')
@section('og-title', 'Kebijakan Privasi - Platform Kreator')
@section('og-description', 'Kami menjaga privasi Anda dengan kebijakan yang transparan dan aman.')

@section('content')
<main class="container my-5">
  <div class="text-center mb-5">
    <h1 class="fw-bold display-4"><i class="fa-solid fa-shield-alt me-2 text-primary"></i>Kebijakan Privasi</h1>
    <p class="lead text-muted">Kami berkomitmen untuk melindungi privasi Anda dengan kebijakan yang transparan dan aman.</p>
  </div>

  <div class="row g-4">
    <div class="col-12">
      <div class="card-soft p-4">
        <h3><i class="fa-solid fa-database me-2 text-primary"></i>Pengumpulan Data</h3>
        <p>Kami mengumpulkan informasi seperti nama, email, dan aktivitas pengguna untuk meningkatkan pengalaman Anda. Data ini hanya digunakan untuk keperluan internal dan tidak dibagikan tanpa izin Anda.</p>
      </div>
    </div>
    <div class="col-12">
      <div class="card-soft p-4">
        <h3><i class="fa-solid fa-cogs me-2 text-primary"></i>Penggunaan Data</h3>
        <p>Data Anda digunakan untuk personalisasi konten, analitik, dan komunikasi terkait layanan. Kami menggunakan enkripsi dan protokol keamanan terkini untuk melindungi informasi Anda.</p>
      </div>
    </div>
    <div class="col-12">
      <div class="card-soft p-4">
        <h3><i class="fa-solid fa-user-shield me-2 text-primary"></i>Hak Anda</h3>
        <p>Anda berhak untuk mengakses, memperbarui, atau menghapus data pribadi Anda. Hubungi kami di <a href="mailto:privasi@platformkreator.com" class="text-primary">privasi@platformkreator.com</a> untuk permintaan terkait data.</p>
      </div>
    </div>
    <div class="col-12">
      <div class="card-soft p-4">
        <h3><i class="fa-solid fa-sync-alt me-2 text-primary"></i>Pembaruan Kebijakan</h3>
        <p>Kebijakan ini dapat diperbarui secara berkala. Kami akan memberi tahu Anda melalui email atau pemberitahuan di platform jika ada perubahan signifikan.</p>
      </div>
    </div>
  </div>

  <div class="text-center mt-5">
    <a href="{{ route('maklon.contact') }}" class="btn btn-primary btn-lg"><i class="fa-solid fa-envelope me-2"></i>Hubungi Kami untuk Info Lebih Lanjut</a>
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