@extends('admin.master')
@section('title', 'Role & Permission')
@section('content')
<div class="container-fluid py-4">
  <h1 class="mb-4">👥 Role & Permission</h1>
  <div class="card shadow-sm border-0 rounded-3">
    <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
      <span><i class="bi bi-people"></i> Daftar Role & Permission</span>
      <button class="btn btn-light btn-sm"><i class="bi bi-plus-circle"></i> Tambah Role</button>
    </div>
    <div class="card-body">
      <table class="table table-bordered table-hover align-middle">
        <thead class="table-light">
          <tr>
            <th width="50">#</th>
            <th>Role</th>
            <th>Permission</th>
            <th width="120">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Admin</td>
            <td>
              <span class="badge bg-primary">Manage User</span>
              <span class="badge bg-success">Manage Content</span>
              <span class="badge bg-danger">Delete Data</span>
            </td>
            <td>
              <button class="btn btn-sm btn-warning"><i class="bi bi-pencil"></i></button>
              <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button>
            </td>
          </tr>
          <tr>
            <td>2</td>
            <td>Editor</td>
            <td>
              <span class="badge bg-success">Manage Content</span>
            </td>
            <td>
              <button class="btn btn-sm btn-warning"><i class="bi bi-pencil"></i></button>
              <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button>
            </td>
          </tr>
          <tr>
            <td>3</td>
            <td>Viewer</td>
            <td>
              <span class="badge bg-secondary">Read Only</span>
            </td>
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
