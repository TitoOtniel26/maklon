@extends('admin.master')
@section('title', 'Tag Utama')
@section('content')
<div class="container-fluid py-4">
  <h1 class="mb-4">🏷️ Tag Utama</h1>
  <div class="card shadow-sm border-0 rounded-3">
    <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
      <span><i class="bi bi-tags"></i> Daftar Tag Utama</span>
      <button class="btn btn-light btn-sm"><i class="bi bi-plus-circle"></i> Tambah Tag</button>
    </div>
    <div class="card-body">
      <table class="table table-hover table-bordered align-middle">
        <thead class="table-light">
          <tr>
            <th width="50">#</th>
            <th>Nama Tag</th>
            <th>Slug</th>
            <th width="120">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Bunga</td>
            <td>bunga</td>
            <td>
              <button class="btn btn-sm btn-warning"><i class="bi bi-pencil"></i></button>
              <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button>
            </td>
          </tr>
          <tr>
            <td>2</td>
            <td>Hadiah</td>
            <td>hadiah</td>
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
