@extends('admin.master')
@section('title', 'Lokasi & Bahasa')
@section('content')
<div class="container">
  <h1 class="mb-4">🌍 Lokasi & Bahasa</h1>
  <p class="text-muted">Atur pengaturan lokasi, zona waktu, dan bahasa sistem.</p>

  <div class="row">
    <div class="col-md-6">
      <div class="card shadow-sm mb-4">
        <div class="card-body">
          <h5 class="card-title">📍 Lokasi</h5>
          <p class="card-text text-muted">Pilih negara utama dan zona waktu sistem.</p>
          <form>
            <div class="mb-3">
              <label class="form-label">Negara Utama</label>
              <select class="form-control">
                <option>Indonesia</option>
                <option>Singapore</option>
                <option>Malaysia</option>
              </select>
            </div>
            <div class="mb-3">
              <label class="form-label">Zona Waktu</label>
              <select class="form-control">
                <option>Asia/Jakarta</option>
                <option>Asia/Singapore</option>
                <option>Asia/Kuala_Lumpur</option>
              </select>
            </div>
            <button class="btn btn-primary">Simpan</button>
          </form>
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="card shadow-sm mb-4">
        <div class="card-body">
          <h5 class="card-title">🗣️ Bahasa</h5>
          <p class="card-text text-muted">Pilih bahasa default sistem.</p>
          <form>
            <div class="mb-3">
              <label class="form-label">Bahasa Default</label>
              <select class="form-control">
                <option>Bahasa Indonesia</option>
                <option>English</option>
                <option>中文 (Chinese)</option>
              </select>
            </div>
            <button class="btn btn-success">Simpan</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
  