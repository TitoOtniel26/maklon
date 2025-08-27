@extends('admin.master')

@section('title', 'Monetisasi')
@section('content')
<div class="container mt-4">
    <h1>💰 Monetisasi Dashboard</h1>
    <p>Kelola dan optimalkan pendapatan dari berbagai channel.</p>

    <!-- Ringkasan Utama -->
    <div class="row mb-4">
        <div class="col-md-3">
            <div class="card bg-success text-white">
                <div class="card-body">
                    <h5>Total Pendapatan</h5>
                    <h3>Rp 125.500.000</h3>
                    <small>Bulan ini</small>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-info text-white">
                <div class="card-body">
                    <h5>Iklan</h5>
                    <h3>Rp 50.200.000</h3>
                    <small>Google Ads / FB Ads</small>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-warning text-dark">
                <div class="card-body">
                    <h5>Affiliate</h5>
                    <h3>Rp 28.000.000</h3>
                    <small>Partnership</small>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-danger text-white">
                <div class="card-body">
                    <h5>Produk / Jasa</h5>
                    <h3>Rp 47.300.000</h3>
                    <small>Penjualan langsung</small>
                </div>
            </div>
        </div>
    </div>

    <!-- Tabel Detail Monetisasi -->
    <div class="card mb-4">
        <div class="card-header">📊 Detail Channel Monetisasi</div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead class="thead-light">
                    <tr>
                        <th>Channel</th>
                        <th>Deskripsi</th>
                        <th>Pendapatan</th>
                        <th>Pertumbuhan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Iklan</td>
                        <td>Pendapatan dari Google Ads & FB Ads</td>
                        <td>Rp 50.200.000</td>
                        <td><span class="text-success">+12%</span></td>
                        <td><button class="btn btn-sm btn-primary">Kelola</button></td>
                    </tr>
                    <tr>
                        <td>Affiliate</td>
                        <td>Pendapatan dari partner afiliasi</td>
                        <td>Rp 28.000.000</td>
                        <td><span class="text-danger">-3%</span></td>
                        <td><button class="btn btn-sm btn-primary">Kelola</button></td>
                    </tr>
                    <tr>
                        <td>Produk / Jasa</td>
                        <td>Penjualan produk & layanan</td>
                        <td>Rp 47.300.000</td>
                        <td><span class="text-success">+25%</span></td>
                        <td><button class="btn btn-sm btn-primary">Kelola</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Insight AI -->
    <div class="card mb-4">
        <div class="card-header">🤖 AI Insight Monetisasi</div>
        <div class="card-body">
            <p>Masukkan target & strategi untuk mendapatkan saran peluang baru.</p>
            <form method="POST" action="">
                @csrf
                <div class="form-group">
                    <label for="target">🎯 Target yang ingin dicapai</label>
                    <input type="text" class="form-control" name="target" placeholder="Contoh: Tingkatkan revenue 20% dari affiliate dalam 3 bulan">
                </div>
                <div class="form-group mt-2">
                    <label for="strategy">📌 Strategi yang sedang berjalan</label>
                    <textarea class="form-control" name="strategy" rows="3" placeholder="Ceritakan strategi kamu sekarang..."></textarea>
                </div>
                <button type="submit" class="btn btn-success mt-2">Analisis dengan AI</button>
            </form>
        </div>
    </div>

    <!-- Peluang Monetisasi Baru -->
    <div class="card">
        <div class="card-header">🚀 Peluang Monetisasi Baru</div>
        <div class="card-body">
            <ul>
                <li>🌎 Ekspansi ke pasar global dengan produk digital</li>
                <li>📧 Bangun email marketing funnel untuk repeat order</li>
                <li>🎥 Monetisasi konten video (YouTube, TikTok)</li>
                <li>🤝 Kolaborasi brand untuk campaign sponsor</li>
            </ul>
        </div>
    </div>
</div>


USER SECTION

<div class="container py-5">
    <h1 class="mb-4">💰 Monetisasi</h1>
    <p class="text-muted">Kelola dan optimalkan sumber penghasilan Anda.</p>

    <!-- Ringkasan Pendapatan -->
    <div class="row text-center mb-5">
        <div class="col-md-3">
            <div class="card shadow-sm border-0 p-3">
                <h5>Total Pendapatan</h5>
                <h3 class="text-success">Rp 25.450.000</h3>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card shadow-sm border-0 p-3">
                <h5>Bulan Ini</h5>
                <h3 class="text-primary">Rp 8.300.000</h3>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card shadow-sm border-0 p-3">
                <h5>Bulan Lalu</h5>
                <h3 class="text-warning">Rp 7.950.000</h3>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card shadow-sm border-0 p-3">
                <h5>Pending Payout</h5>
                <h3 class="text-danger">Rp 2.000.000</h3>
            </div>
        </div>
    </div>

    <!-- Grafik Sumber Monetisasi -->
    <div class="card mb-5 shadow-sm border-0">
        <div class="card-body">
            <h5>📊 Sumber Pendapatan</h5>
            <canvas id="monetizationChart"></canvas>
        </div>
    </div>

    <!-- AI Insight -->
    <div class="card mb-5 shadow-sm border-0">
        <div class="card-body">
            <h5>🤖 Insight & Strategi AI</h5>
            <p class="text-muted">Analisa AI untuk meningkatkan monetisasi.</p>
            <textarea id="aiPrompt" class="form-control mb-3" rows="3" 
                placeholder="Masukkan target: contoh 'Tingkatkan konversi affiliate'"></textarea>
            <button class="btn btn-primary" id="analyzeBtn">Analisa dengan AI</button>
            <div class="mt-3" id="aiResult"></div>
        </div>
    </div>

    <!-- Peluang Monetisasi -->
    <div class="card mb-5 shadow-sm border-0">
        <div class="card-body">
            <h5>🚀 Peluang Baru</h5>
            <ul>
                <li>Tambahkan produk digital (ebook, template).</li>
                <li>Kolaborasi dengan brand lokal.</li>
                <li>Optimasi iklan di halaman dengan trafik tinggi.</li>
            </ul>
        </div>
    </div>

    <!-- Export & Payout -->
    <div class="text-end">
        <button class="btn btn-outline-secondary">⬇️ Export Laporan</button>
        <button class="btn btn-success">💳 Request Payout</button>
    </div>
</div>  

@endsection


@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('monetizationChart').getContext('2d');
    new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ['Adsense', 'Affiliate', 'Produk', 'Sponsorship'],
            datasets: [{
                data: [45, 25, 20, 10],
                backgroundColor: ['#4CAF50', '#2196F3', '#FF9800', '#E91E63']
            }]
        }
    });

    document.getElementById('analyzeBtn').addEventListener('click', function() {
        let prompt = document.getElementById('aiPrompt').value;
        document.getElementById('aiResult').innerHTML = 
            `<div class="alert alert-info">🔍 AI menganalisa: "<b>${prompt}</b>"<br>
            💡 Rekomendasi: Fokus pada konten evergreen & optimasi CTA untuk affiliate.</div>`;
    });
</script>
@endpush

