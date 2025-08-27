@extends('admin.master')
@section('title', 'Artikel')
@section('content')
<div class="d-flex justify-content-between mb-3">
  <h1>📝 Artikel</h1>
  <a href="{{ route('article.create') }}" class="btn">➕ Tambah Artikel</a>
</div>

@if(session('success'))
  <div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-bordered table-hover">
  <thead>
    <tr>
      <th>Judul</th>
      <th>Slug</th>
      <th>Dibuat</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    @foreach($articles as $article)
    <tr>
      <td>{{ $article->title }}</td>
      <td>{{ $article->slug }}</td>
      <td>{{ $article->created_at->format('d M Y') }}</td>
      <td>
        <a href="{{ route('article.edit', $article->id) }}" class="btn btn-sm btn-warning">✏️ Edit</a>
        <form action="{{ route('article.destroy', $article->id) }}" method="POST" class="d-inline">
          @csrf @method('DELETE')
          <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Hapus artikel?')">🗑️ Hapus</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

{{ $articles->links() }}
@endsection
