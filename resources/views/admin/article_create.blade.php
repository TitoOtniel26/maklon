<!-- resources/views/admin/articles/create.blade.php -->
@extends('admin.master')
@section('title', 'Tambah Artikel')
@section('content')
    <h1>➕ Tambah Artikel</h1>

    <form action="{{ route('article.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Judul</label>
            <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}" required>
            @error('title')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Slug (URL)</label>
            <input type="text" name="slug" id="slug" class="form-control @error('slug') is-invalid @enderror" value="{{ old('slug') }}" required>
            @error('slug')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3 d-flex justify-content-between align-items-center">
            <label class="form-label mb-0">Konten</label>
            <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#aiModal">
                ✨ Ask AI to Create Content
            </button>
        </div>
        <textarea id="summernote" name="content" class="form-control @error('content') is-invalid @enderror">{{ old('content') }}</textarea>
        @error('content')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror

        <h5 class="mt-4">SEO Tags</h5>
        <div class="mb-3">
            <label class="form-label">Meta Title</label>
            <input type="text" name="meta_title" class="form-control" value="{{ old('meta_title') }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Meta Description</label>
            <textarea name="meta_desc" class="form-control">{{ old('meta_desc') }}</textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Meta Keywords</label>
            <input type="text" name="meta_key" class="form-control" placeholder="pisahkan dengan koma" value="{{ old('meta_key') }}">
        </div>

        <button type="submit" class="btn btn-success">💾 Simpan</button>
    </form>

    <hr>
    <h5>👀 Preview</h5>
    <div id="preview" class="p-3 border bg-light"></div>

    <!-- Modal untuk AI -->
    <div class="modal fade" id="aiModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">✨ Ask AI to Generate Article</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Topik / Judul</label>
                        <input type="text" id="ai_title" class="form-control" placeholder="Contoh: Tips Merawat Bunga Mawar">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Target Keyword</label>
                        <input type="text" id="ai_keyword" class="form-control" placeholder="Contoh: bunga mawar, cara merawat">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Gaya Penulisan</label>
                        <select id="ai_style" class="form-control">
                            <option value="informative">📘 Informatif</option>
                            <option value="casual">💬 Santai</option>
                            <option value="formal">🏛️ Formal</option>
                            <option value="persuasive">🔥 Persuasif</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tambahan Instruksi</label>
                        <textarea id="ai_extra" class="form-control" placeholder="Contoh: Panjang artikel 800 kata, pakai subjudul, SEO friendly"></textarea>
                    </div>
                    <button type="button" id="btnGenerateAI" class="btn btn-primary">🚀 Generate</button>
                </div>
                <div class="modal-footer">
                    <small class="text-muted">Hasil akan langsung ditambahkan ke editor.</small>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote.min.js"></script>

        <style>
            .note-editor,
            .note-editable,
            .note-toolbar {
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif !important;
            }
            .invalid-feedback {
                display: none;
            }
            .is-invalid ~ .invalid-feedback {
                display: block;
            }
        </style>

        <script>
            $(document).ready(function() {
                // Initialize Summernote
                $('#summernote').summernote({
                    height: 300,
                    fontNames: ['Segoe UI', 'Arial', 'Arial Black', 'Comic Sans MS', 'Courier New'],
                    fontNamesIgnoreCheck: ['Segoe UI'],
                    callbacks: {
                        onChange: function(contents) {
                            $('#preview').html(contents);
                        }
                    }
                });
                $('#summernote').summernote('fontName', 'Segoe UI');

                // Auto-generate slug from title
                $('#title').on('input', function() {
                    let title = $(this).val();
                    let slug = title.toLowerCase()
                        .replace(/[^a-z0-9\s-]/g, '')
                        .replace(/\s+/g, '-')
                        .replace(/-+/g, '-');
                    $('#slug').val(slug);
                });

                // AI Content Generation
                $('#btnGenerateAI').on('click', function() {
                    let aiTitle = $('#ai_title').val();
                    let aiKeyword = $('#ai_keyword').val();
                    let aiStyle = $('#ai_style').val();
                    let aiExtra = $('#ai_extra').val();

                    if (!aiTitle || !aiKeyword || !aiStyle) {
                        alert('Please fill in all required AI fields.');
                        return;
                    }

                    $.ajax({
                        url: '{{ route('article.generate-ai') }}',
                        method: 'POST',
                        data: {
                            _token: '{{ csrf_token() }}',
                            ai_title: aiTitle,
                            ai_keyword: aiKeyword,
                            ai_style: aiStyle,
                            ai_extra: aiExtra
                        },
                        success: function(response) {
                            $('#summernote').summernote('code', response.content);
                            $('#aiModal').modal('hide');
                            $('#preview').html(response.content);
                        },
                        error: function(xhr) {
                            alert('Error: ' + xhr.responseJSON.error);
                        }
                    });
                });
            });
        </script>
    @endpush
@endsection