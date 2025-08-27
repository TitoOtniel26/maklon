@extends('admin.master')

@section('title', 'SEO Tools')

@section('content')
<div class="container-fluid">
    <h1 class="mb-4">📊 SEO Tools</h1>
    <p class="text-muted">Optimasi website dengan berbagai tools SEO di bawah ini.</p>

    <div class="row">

        {{-- Meta Tag Generator --}}
        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-header bg-primary text-white">
                    📝 Meta Tag Generator
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label>Meta Title</label>
                            <input type="text" class="form-control" placeholder="Masukkan judul halaman">
                        </div>
                        <div class="form-group mt-2">
                            <label>Meta Description</label>
                            <textarea class="form-control" rows="2" placeholder="Masukkan deskripsi halaman"></textarea>
                        </div>
                        <div class="form-group mt-2">
                            <label>Meta Keywords</label>
                            <input type="text" class="form-control" placeholder="Pisahkan dengan koma">
                        </div>
                        <button type="button" class="btn btn-success mt-3">Generate</button>
                    </form>
                </div>
            </div>
        </div>

        {{-- Robots.txt Editor --}}
        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-header bg-dark text-white">
                    🤖 Robots.txt Editor
                </div>
                <div class="card-body">
                    <textarea class="form-control" rows="8">User-agent: *
Disallow:
                    </textarea>
                    <button type="button" class="btn btn-warning mt-3">Save Robots.txt</button>
                </div>
            </div>
        </div>

    </div>

    <div class="row">

        {{-- Sitemap Preview --}}
        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-header bg-info text-white">
                    🗺️ Sitemap Generator
                </div>
                <div class="card-body">
                    <p>Cek sitemap website Anda:</p>
                    <a href="{{ url('/sitemap.xml') }}" target="_blank" class="btn btn-primary">Lihat Sitemap</a>
                </div>
            </div>
        </div>

        {{-- Keyword Density Checker --}}
        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-header bg-success text-white">
                    🔑 Keyword Density Checker
                </div>
                <div class="card-body">
                    <form method="POST" action="">
                        @csrf
                        <textarea class="form-control" name="content" rows="5" placeholder="Paste konten artikel di sini..."></textarea>
                        <input type="text" class="form-control mt-2" name="keyword" placeholder="Masukkan keyword target">
                        <button type="submit" class="btn btn-success mt-3">Cek Density</button>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <div class="row">

        {{-- Open Graph & Twitter Card Preview --}}
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-header bg-secondary text-white">
                    🌐 Open Graph & Twitter Card Preview
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label>URL</label>
                            <input type="url" class="form-control" placeholder="Masukkan URL halaman">
                        </div>
                        <button type="button" class="btn btn-primary mt-3">Preview</button>
                    </form>
                    <div class="mt-3 p-3 border rounded bg-light">
                        <p><strong>Preview hasil akan tampil di sini.</strong></p>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="row">

        {{-- PageSpeed Insight --}}
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-header bg-danger text-white">
                    ⚡ PageSpeed Insight
                </div>
                <div class="card-body">
                    <form action="https://pagespeed.web.dev/" method="get" target="_blank">
                        <div class="form-group">
                            <label>Website URL</label>
                            <input type="url" name="url" class="form-control" placeholder="https://domain.com">
                        </div>
                        <button type="submit" class="btn btn-danger mt-3">Cek PageSpeed</button>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <div class="row">

        {{-- AI Strategy & Opportunity Finder --}}
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-header bg-warning text-dark">
                    🤖 AI Strategy & Opportunity Finder
                </div>
                <div class="card-body">
                    <form method="POST" action="">
                        @csrf
                        <div class="form-group">
                            <label>Keyword Target</label>
                            <input type="text" class="form-control" name="keyword" placeholder="contoh: florist singapore">
                        </div>
                        <div class="form-group mt-2">
                            <label>Lokasi / Market</label>
                            <input type="text" class="form-control" name="lokasi" placeholder="contoh: Indonesia, Singapore">
                        </div>
                        <div class="form-group mt-2">
                            <label>Jenis Konten</label>
                            <select name="jenis" class="form-control">
                                <option value="blog">Blog Article</option>
                                <option value="produk">Produk / eCommerce</option>
                                <option value="landing">Landing Page</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-warning mt-3">Analisa dengan AI</button>
                    </form>
                </div>
            </div>
        </div>

    </div>

</div>
@endsection
