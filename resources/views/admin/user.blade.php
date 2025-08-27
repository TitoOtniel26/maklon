@extends('admin.master')

@section('title', 'User Access Management')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">👥 User Access Management</h1>
    <p class="text-muted">Kelola role, hak akses, dan status user dalam sistem Anda.</p>

    <div class="card shadow-sm mb-4">
        <div class="card-header bg-primary text-white">
            <strong>📋 Daftar User</strong>
        </div>
        <div class="card-body">
            <table class="table table-bordered align-middle">
                <thead class="table-light">
                    <tr>
                        <th>👤 Nama</th>
                        <th>📧 Email</th>
                        <th>🎭 Role</th>
                        <th>🔑 Permission</th>
                        <th>⚡ Status</th>
                        <th>⚙️ Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- User 1 -->
                    <tr>
                        <td><strong>Admin Super</strong></td>
                        <td>admin@example.com</td>
                        <td><span class="badge bg-danger">Super Admin</span></td>
                        <td>
                            <span class="badge bg-dark">Full Access</span>
                        </td>
                        <td>
                            <span class="badge bg-success">Active</span>
                        </td>
                        <td>
                            <button class="btn btn-sm btn-outline-warning">Suspend</button>
                            <button class="btn btn-sm btn-outline-secondary">Edit</button>
                        </td>
                    </tr>
                    <!-- User 2 -->
                    <tr>
                        <td><strong>Manager SEO</strong></td>
                        <td>seo.manager@example.com</td>
                        <td><span class="badge bg-primary">Manager</span></td>
                        <td>
                            <span class="badge bg-info">View Reports</span>
                            <span class="badge bg-info">Edit Keywords</span>
                        </td>
                        <td>
                            <span class="badge bg-success">Active</span>
                        </td>
                        <td>
                            <button class="btn btn-sm btn-outline-danger">Remove</button>
                            <button class="btn btn-sm btn-outline-secondary">Edit</button>
                        </td>
                    </tr>
                    <!-- User 3 -->
                    <tr>
                        <td><strong>Content Writer</strong></td>
                        <td>writer@example.com</td>
                        <td><span class="badge bg-warning">Editor</span></td>
                        <td>
                            <span class="badge bg-info">Create Post</span>
                            <span class="badge bg-info">Edit Post</span>
                        </td>
                        <td>
                            <span class="badge bg-secondary">Pending</span>
                        </td>
                        <td>
                            <button class="btn btn-sm btn-outline-success">Approve</button>
                            <button class="btn btn-sm btn-outline-secondary">Edit</button>
                        </td>
                    </tr>
                    <!-- User 4 -->
                    <tr>
                        <td><strong>Viewer Guest</strong></td>
                        <td>guest@example.com</td>
                        <td><span class="badge bg-secondary">Viewer</span></td>
                        <td>
                            <span class="badge bg-info">Read Only</span>
                        </td>
                        <td>
                            <span class="badge bg-danger">Suspended</span>
                        </td>
                        <td>
                            <button class="btn btn-sm btn-outline-success">Activate</button>
                            <button class="btn btn-sm btn-outline-secondary">Edit</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Role & Permission Management -->
    <div class="row">
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-header bg-success text-white">
                    🎭 Role Management
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between">
                            <span><strong>Super Admin</strong> — Full system access</span>
                            <button class="btn btn-sm btn-outline-secondary">Edit</button>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span><strong>Manager</strong> — Manage SEO, Reports</span>
                            <button class="btn btn-sm btn-outline-secondary">Edit</button>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span><strong>Editor</strong> — Create & Edit content</span>
                            <button class="btn btn-sm btn-outline-secondary">Edit</button>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span><strong>Viewer</strong> — Read-only access</span>
                            <button class="btn btn-sm btn-outline-secondary">Edit</button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Permission Settings -->
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-header bg-warning text-dark">
                    🔑 Permission Settings
                </div>
                <div class="card-body">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" checked>
                        <label class="form-check-label">View Reports</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" checked>
                        <label class="form-check-label">Edit Keywords</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox">
                        <label class="form-check-label">Manage Ads</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox">
                        <label class="form-check-label">Access Monetization</label>
                    </div>
                    <button class="btn btn-sm btn-primary mt-3">Save Permissions</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
