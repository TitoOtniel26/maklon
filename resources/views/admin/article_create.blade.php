@extends('admin.master')
@section('title', 'Tambah Artikel')
@section('content')
<h1>➕ Tambah Artikel</h1>

<form action="{{ route('article.store') }}" method="POST">
  @csrf
  <div class="mb-3">
    <label class="form-label">Judul</label>
    <input type="text" name="title" class="form-control" required>
  </div>
  <div class="mb-3">
    <label class="form-label">Slug (URL)</label>
    <input type="text" name="slug" class="form-control" required>
  </div>
  <div class="mb-3 d-flex justify-content-between align-items-center">
    <label class="form-label mb-0">Konten</label>
    <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#aiModal">
      ✨ Ask AI to Create Content
    </button>
  </div>
  <textarea id="summernote" name="content" class="form-control"></textarea>

  <h5 class="mt-4">SEO Tags</h5>
  <div class="mb-3">
    <label class="form-label">Meta Title</label>
    <input type="text" name="meta_title" class="form-control">
  </div>
  <div class="mb-3">
    <label class="form-label">Meta Description</label>
    <textarea name="meta_desc" class="form-control"></textarea>
  </div>
  <div class="mb-3">
    <label class="form-label">Meta Keywords</label>
    <input type="text" name="meta_key" class="form-control" placeholder="pisahkan dengan koma">
  </div>

  <button type="submit" class="btn btn-success">💾 Simpan</button>
</form>

<hr>
<h5>👀 Preview</h5>
<div id="preview" class="p-3 border bg-light"></div>

{{-- Modal untuk AI --}}
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
  {{-- jQuery (wajib untuk Summernote) --}}
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  {{-- Bootstrap JS --}}
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  {{-- Summernote --}}
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote.min.js"></script>

  <style>
    .note-editor, 
    .note-editable, 
    .note-toolbar {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif !important;
    }
  </style>

  <script>
    $(document).ready(function() {
      $('#summernote').summernote({
        height: 300,
        fontNames: ['Segoe UI','Arial','Arial Black','Comic Sans MS','Courier New'],
        fontNamesIgnoreCheck: ['Segoe UI'],
        callbacks: {
          onChange: function(contents) {
            $('#preview').html(contents);
          }
        }
      });
      $('#summernote').summernote('fontName', 'Segoe UI');

      // Dummy Generate AI (bisa dihubungkan ke backend API)
      $('#btnGenerateAI').on('click', function() {
        let title = $('#ai_title').val();
        let keyword = $('#ai_keyword').val();
        let style = $('#ai_style').val();
        let extra = $('#ai_extra').val();

        // --- di sini harusnya call ke backend API AI ---
        let generatedContent = `<h2>${title}</h2>
          <p><em>(Artikel gaya ${style})</em></p>
          <p>Ini contoh konten yang dihasilkan AI berdasarkan keyword <strong>${keyword}</strong>.</p>
          <p>${extra ? 'Instruksi tambahan: '+extra : ''}</p>`;

        // Masukkan ke Summernote
        $('#summernote').summernote('code', generatedContent);

        // Tutup modal
        $('#aiModal').modal('hide');
      });
    });
  </script>
@endpush
@endsection
