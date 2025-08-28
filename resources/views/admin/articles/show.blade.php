<!-- resources/views/admin/articles/show.blade.php -->
@extends('admin.master')
@section('title', 'Detail Artikel')
@section('content')
    <h1>📄 Detail Artikel</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $article->title }}</h5>
            <p><strong>Slug:</strong> {{ $article->slug }}</p>
            <p><strong>Content:</strong></p>
            <div class="border p-3">{!! $article->content !!}</div>
            <p><strong>Meta Title:</strong> {{ $article->meta_title ?? 'N/A' }}</p>
            <p><strong>Meta Description:</strong> {{ $article->meta_desc ?? 'N/A' }}</p>
            <p><strong>Meta Keywords:</strong> {{ $article->meta_key ?? 'N/A' }}</p>
            <p><strong>Created At:</strong> {{ $article->created_at->format('d-m-Y H:i') }}</p>
            <p><strong>Updated At:</strong> {{ $article->updated_at->format('d-m-Y H:i') }}</p>
            @if ($article->schema)
                <script type="application/ld+json">
                    {!! $article->schema !!}
                </script>
            @endif

            <a href="{{ route('article.edit', $article->id) }}" class="btn btn-warning">✏️ Edit</a>
            <a href="{{ route('article.index') }}" class="btn btn-secondary">⬅️ Kembali</a>
        </div>
    </div>
@endsection