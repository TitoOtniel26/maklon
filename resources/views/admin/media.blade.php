@extends('admin.master')
@section('title', 'Media Library')
@section('content')
<div class="container">
  <h1 class="mb-4">🖼️ Media Library</h1>
  <p class="text-muted">Kelola semua gambar, video, dan file yang diunggah.</p>

  <div class="card shadow-sm">
    <div class="card-body">
      <button class="btn btn-primary mb-3">📤 Upload Media</button>

      <div class="row">
        <!-- Static contoh media -->
        <div class="col-md-3 mb-3">
          <div class="card">
            <img src="https://via.placeholder.com/150" class="card-img-top" alt="media">
            <div class="card-body text-center">
              <small class="text-muted">banner1.png</small>
            </div>
          </div>
        </div>
        <div class="col-md-3 mb-3">
          <div class="card">
            <img src="https://via.placeholder.com/150" class="card-img-top" alt="media">
            <div class="card-body text-center">
              <small class="text-muted">logo.png</small>
            </div>
          </div>
        </div>
        <!-- Tambah media lain di sini -->
      </div>
    </div>
  </div>
</div>
@endsection
