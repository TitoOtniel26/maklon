@extends('admin.master')
@section('title', 'Manajemen Pengaturan')

@section('content')
<div class="container">
    <h1 class="mb-4">⚙️ Manajemen Pengaturan</h1>
    <p class="text-muted">Atur konfigurasi sistem dan preferensi aplikasi Anda di sini.</p>

    <div class="row mt-4">
        <!-- General Settings -->
        <div class="col-md-6 mb-4">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-primary text-white">
                    🌐 General Settings
                </div>
                <div class="card-body">
                    <p class="text-muted">Pengaturan umum aplikasi.</p>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Nama Aplikasi: <strong>FlowerAdvisor Admin</strong></li>
                        <li class="list-group-item">Bahasa Default: <strong>Indonesia</strong></li>
                        <li class="list-group-item">Timezone: <strong>Asia/Jakarta</strong></li>
                    </ul>
                    <div class="mt-3">
                        <button class="btn btn-sm btn-primary">Edit</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- SEO Settings -->
        <div class="col-md-6 mb-4">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-success text-white">
                    📈 SEO Settings
                </div>
                <div class="card-body">
                    <p class="text-muted">Optimasi website untuk mesin pencari.</p>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Meta Title Default: <strong>Flower Delivery</strong></li>
                        <li class="list-group-item">Meta Description Default: <strong>Kirim bunga ke seluruh dunia</strong></li>
                        <li class="list-group-item">Sitemap: <strong>Enabled</strong></li>
                    </ul>
                    <div class="mt-3">
                        <button class="btn btn-sm btn-success">Edit</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Security Settings -->
        <div class="col-md-6 mb-4">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-danger text-white">
                    🔒 Security Settings
                </div>
                <div class="card-body">
                    <p class="text-muted">Keamanan aplikasi & akses user.</p>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">2FA: <strong>Enabled</strong></li>
                        <li class="list-group-item">Session Timeout: <strong>30 menit</strong></li>
                        <li class="list-group-item">Login Attempt Limit: <strong>5 kali</strong></li>
                    </ul>
                    <div class="mt-3">
                        <button class="btn btn-sm btn-danger">Edit</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Payment Settings -->
        <div class="col-md-6 mb-4">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-warning text-dark">
                    💳 Payment Settings
                </div>
                <div class="card-body">
                    <p class="text-muted">Konfigurasi metode pembayaran.</p>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Gateway Aktif: <strong>Midtrans</strong></li>
                        <li class="list-group-item">Currency Default: <strong>IDR</strong></li>
                        <li class="list-group-item">Auto Convert: <strong>Yes</strong></li>
                    </ul>
                    <div class="mt-3">
                        <button class="btn btn-sm btn-warning">Edit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
