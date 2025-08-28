
@extends('admin.master')
@section('title', 'Edit Artikel')
@section('content')
    <h1>✏️ Edit Artikel</h1>

    <form action="{{ route('article.update', $article->id) }}" method="POST" id="articleForm">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Kategori</label>
            <select name="category_id" id="category_id" class="form-control @error('category_id') is-invalid @enderror" required>
                <option value="">Pilih Kategori</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ old('category_id', $article->category_id) == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                @endforeach
            </select>
            @error('category_id')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Judul</label>
            <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title', $article->title) }}" required>
            @error('title')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Slug (URL)</label>
            <input type="text" name="slug" id="slug" class="form-control @error('slug') is-invalid @enderror" value="{{ old('slug', $article->slug) }}" required>
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
        <textarea id="summernote" name="content" class="form-control @error('content') is-invalid @enderror">{{ old('content', $article->content) }}</textarea>
        @error('content')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror

        <h5 class="mt-4">SEO Tags</h5>
        <div class="mb-3">
            <label class="form-label">Meta Title</label>
            <input type="text" name="meta_title" id="meta_title" class="form-control" value="{{ old('meta_title', $article->meta_title) }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Meta Description</label>
            <textarea name="meta_desc" id="meta_desc" class="form-control">{{ old('meta_desc', $article->meta_desc) }}</textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Meta Keywords</label>
            <input type="text" name="meta_key" id="meta_key" class="form-control" placeholder="pisahkan dengan koma" value="{{ old('meta_key', $article->meta_key) }}">
        </div>
        <div class="mb-3">
            <label class="form-label">JSON-LD Schema</label>
            <textarea name="schema" id="schema" class="form-control" placeholder="Masukkan JSON-LD Schema (otomatis diisi jika menggunakan AI)">{{ old('schema', $article->schema) }}</textarea>
            @error('schema')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-success" id="submitBtn">💾 Update</button>
    </form>

    <hr>
    <h5>👀 Preview</h5>
    <div id="preview" class="p-3 border bg-light">{!! old('content', $article->content) !!}</div>

    <!-- Modal untuk AI -->
    <div class="modal fade" id="aiModal" tabindex="-1" aria-labelledby="aiModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="aiModalLabel">✨ Ask AI to Generate Article</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Topik / Judul</label>
                        <input type="text" id="ai_title" class="form-control" placeholder="Contoh: Tips Merawat Bunga Mawar" value="{{ $article->title }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Target Keyword</label>
                        <input type="text" id="ai_keyword" class="form-control" placeholder="Contoh: bunga mawar, cara merawat" value="{{ $article->meta_key }}">
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
                    <div class="d-flex gap-2">
                        <button type="button" id="btnSuggestAI" class="btn btn-secondary">🤔 Suggest Random Idea</button>
                        <button type="button" id="btnGenerateAI" class="btn btn-primary">🚀 Generate</button>
                    </div>
                </div>
                <div class="modal-footer">
                    <small class="text-muted">Hasil akan langsung ditambahkan ke editor, kolom lainnya, dan JSON-LD schema.</small>
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
            #loadingSpinner {
                display: none;
                position: fixed;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                z-index: 1050;
            }
        </style>

        <!-- Global Loading Spinner -->
        <div id="loadingSpinner" class="spinner-border text-primary" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>

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

                // Suggest Random Idea
                $('#btnSuggestAI').on('click', function() {
                    let btn = $(this);
                    btn.prop('disabled', true).text('Suggesting...');
                    $('#loadingSpinner').show();

                    $.ajax({
                        url: '{{ route('article.suggest-ai') }}',
                        method: 'POST',
                        data: {
                            _token: '{{ csrf_token() }}'
                        },
                        success: function(response) {
                            $('#ai_title').val(response.title);
                            $('#ai_keyword').val(response.keyword);
                            $('#ai_style').val(response.style);
                            $('#ai_extra').val(response.extra);
                        },
                        error: function(xhr) {
                            alert('Error: ' + (xhr.responseJSON?.error || 'Failed to suggest idea'));
                        },
                        complete: function() {
                            btn.prop('disabled', false).text('🤔 Suggest Random Idea');
                            $('#loadingSpinner').hide();
                        }
                    });
                });

                // AI Content Generation
                $('#btnGenerateAI').on('click', function() {
                    let aiTitle = $('#ai_title').val();
                    let aiKeyword = $('#ai_keyword').val();
                    let aiStyle = $('#ai_style').val();
                    let aiExtra = $('#ai_extra').val();

                    if (!aiTitle || !aiKeyword || !aiStyle) {
                        alert('Harap isi semua kolom AI yang diperlukan atau gunakan Suggest Random Idea.');
                        return;
                    }

                    let btn = $(this);
                    btn.prop('disabled', true).text('Generating...');
                    $('#loadingSpinner').show();

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
                            $('#title').val(response.title);
                            $('#slug').val(response.slug);
                            $('#summernote').summernote('code', response.content);
                            $('#meta_title').val(response.meta_title);
                            $('#meta_desc').val(response.meta_description);
                            $('#meta_key').val(response.meta_keywords);
                            $('#schema').val(JSON.stringify(response.schema, null, 2));

                            // Dynamically add and select category
                            let categoryId = response.category_id;
                            let categoryOption = $('#category_id option[value="' + categoryId + '"]');
                            // if (!categoryOption.length) {
                            //     // Fetch category name from server
                            //     $.ajax({
                            //         url: '{{ route('category.get', ['id' => ':id']) }}'.replace(':id', categoryId),
                            //         method: 'GET',
                            //         success: function(category) {
                            //             $('#category_id').append(
                            //                 $('<option>', {
                            //                     value: category.id,
                            //                     text: category.name
                            //                 })
                            //             );
                            //             $('#category_id').val(categoryId);
                            //         },
                            //         error: function() {
                            //             alert('Gagal memuat nama kategori baru. Silakan pilih kategori secara manual.');
                            //         }
                            //     });
                            // } else {
                            //     $('#category_id').val(categoryId);
                            // }

                            $('#preview').html(response.content);
                            $('#aiModal').modal('hide');
                        },
                        error: function(xhr) {
                            alert('Error: ' + (xhr.responseJSON?.error || 'Failed to generate content'));
                        },
                        complete: function() {
                            btn.prop('disabled', false).text('🚀 Generate');
                            $('#loadingSpinner').hide();
                            // Ensure modal backdrop and classes are removed
                            $('body').removeClass('modal-open');
                            $('.modal-backdrop').remove();
                            $('body').css('overflow', 'auto');
                        }
                    });
                });

                // Form Submit Loading
                $('#articleForm').on('submit', function() {
                    $('#submitBtn').prop('disabled', true).text('Updating...');
                    $('#loadingSpinner').show();
                });

                // Ensure modal closes properly
                $('#aiModal').on('hidden.bs.modal', function() {
                    $('body').removeClass('modal-open');
                    $('.modal-backdrop').remove();
                    $('body').css('overflow', 'auto');
                });
            });
        </script>
    @endpush
@endsection