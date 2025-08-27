@extends('admin.master')
@section('title', 'Kategori Global')

@section('content')
<div class="container-fluid">
    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 fw-bold text-primary mb-0">📂 Kategori Global</h1>
        <a href="#" class="btn btn-primary btn-sm shadow-sm">
            <i class="bi bi-plus-circle me-1"></i> Tambah Kategori
        </a>
    </div>

    <p class="text-muted">Kelola semua kategori global yang digunakan di seluruh sistem.</p>

    <!-- Summary Cards -->
    <div class="row mb-4">
        <div class="col-md-3">
            <div class="card border-0 shadow-sm rounded-3">
                <div class="card-body text-center">
                    <h5 class="fw-bold text-dark mb-1">Total Kategori</h5>
                    <h3 class="text-primary">12</h3>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 shadow-sm rounded-3">
                <div class="card-body text-center">
                    <h5 class="fw-bold text-dark mb-1">Aktif</h5>
                    <h3 class="text-success">9</h3>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 shadow-sm rounded-3">
                <div class="card-body text-center">
                    <h5 class="fw-bold text-dark mb-1">Nonaktif</h5>
                    <h3 class="text-danger">3</h3>
                </div>
            </div>
        </div>
    </div>

    <!-- Table -->
    <div class="card border-0 shadow-sm rounded-3">
        <div class="card-header bg-white border-0 d-flex justify-content-between align-items-center">
            <h5 class="mb-0 fw-bold">Daftar Kategori</h5>
            <input type="text" class="form-control form-control-sm w-auto" placeholder="🔍 Cari kategori...">
        </div>
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-light">
                    <tr>
                        <th width="5%">#</th>
                        <th>Nama Kategori</th>
                        <th>Deskripsi</th>
                        <th>Status</th>
                        <th class="text-end">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td><span class="fw-bold">🌹 Bunga</span></td>
                        <td>Kategori untuk semua produk bunga</td>
                        <td><span class="badge bg-success">Aktif</span></td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-outline-primary"><i class="bi bi-pencil"></i></a>
                            <a href="#" class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td><span class="fw-bold">🎁 Hadiah</span></td>
                        <td>Kategori untuk semua produk hadiah</td>
                        <td><span class="badge bg-success">Aktif</span></td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-outline-primary"><i class="bi bi-pencil"></i></a>
                            <a href="#" class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td><span class="fw-bold">🍫 Cokelat</span></td>
                        <td>Kategori produk cokelat premium</td>
                        <td><span class="badge bg-danger">Nonaktif</span></td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-outline-primary"><i class="bi bi-pencil"></i></a>
                            <a href="#" class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
m