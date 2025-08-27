@extends('admin.master')
@section('title', 'Master Keyword')
@section('content')
<div class="container-fluid py-4">
  <h1 class="mb-4">🔑 Master Keyword</h1>
  <div class="card shadow-sm border-0 rounded-3">
    <div class="card-header bg-success text-white d-flex justify-content-between align-items-center">
      <span><i class="bi bi-key"></i> Daftar Master Keyword</span>
      <button class="btn btn-light btn-sm"><i class="bi bi-plus-circle"></i> Tambah Keyword</button>
    </div>
    <div class="card-body">
      <table class="table table-hover table-striped align-middle">
        <thead class="table-light">
          <tr>
            <th width="50">#</th>
            <th>Keyword</th>
            <th>Kategori</th>
            <th width="120">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>bunga papan jakarta</td>
            <td>Bunga</td>
            <td>
              <button class="btn btn-sm btn-warning"><i class="bi bi-pencil"></i></button>
              <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button>
            </td>
          </tr>
          <tr>
            <td>2</td>
            <td>kado ulang tahun unik</td>
            <td>Hadiah</td>
            <td>
              <button class="btn btn-sm btn-warning"><i class="bi bi-pencil"></i></button>
              <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection
