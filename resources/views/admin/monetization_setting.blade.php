@extends('admin.master')
@section('title', 'Pengaturan Monetisasi')
@section('content')
<div class="container">
  <h1 class="mb-4">💰 Pengaturan Monetisasi</h1>
  <p class="text-muted">Atur opsi monetisasi, iklan, dan integrasi pembayaran.</p>

  <div class="row">
    <div class="col-md-6">
      <div class="card shadow-sm mb-4">
        <div class="card-body">
          <h5 class="card-title">💳 Metode Pembayaran</h5>
          <p class="card-text text-muted">Atur integrasi dengan Payment Gateway seperti Midtrans, Xendit, Stripe, dll.</p>
          <button class="btn btn-primary">Kelola Pembayaran</button>
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="card shadow-sm mb-4">
        <div class="card-body">
          <h5 class="card-title">📢 Iklan & Sponsorship</h5>
          <p class="card-text text-muted">Tambahkan banner iklan atau kerjasama sponsorship.</p>
          <button class="btn btn-success">Kelola Iklan</button>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
