<!-- resources/views/admin/articles/index.blade.php -->
@extends('admin.master')
@section('title', 'Daftar Artikel')
@section('content')
    <h1>📋 Daftar Artikel</h1>
    <div class="justify-content-end">
        <a href="{{ route('article.create') }}" class="btn btn-primary mb-3">➕ Tambah Artikel</a>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th style="width:25%;">ID</th>
                    <th style="width:35%;">Judul</th>
                    <th style="width:15%;">Slug</th>
                    <th style="width:12%;">Created At</th>
                    <th style="width:20%;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($articles as $article)
                    <tr>
                        <td>{{ $article->id }}</td>
                        <td>{{ $article->title }}</td>
                        <td>{{ $article->slug }}</td>
                        <td>{{ $article->created_at->format('d-m-Y H:i') }}</td>
                        <td>
                            <a href="{{ route('article.show', $article->id) }}" class="btn btn-sm btn-info">👀</a>
                            <a href="{{ route('article.edit', $article->id) }}" class="btn btn-sm btn-warning">✏️</a>
                            <form action="{{ route('article.destroy', $article->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?')">🗑️</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{ $articles->links() }}
@endsection