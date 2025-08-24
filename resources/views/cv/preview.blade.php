<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preview CV - CV Generator</title>
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #e3f2fd, #bbdefb);
            min-height: 100vh;
            font-family: 'Arial', sans-serif;
        }
        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            animation: fadeIn 1s ease-in-out;
        }
        .card-header {
            background: linear-gradient(to right, #0288d1, #0277bd);
            color: white;
            border-radius: 15px 15px 0 0;
            border-bottom: 3px solid #01579b;
        }
        .info-section {
            background: #f1f8ff;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 20px;
        }
        .ai-section {
            background: #e8f5e9;
            padding: 20px;
            border-radius: 10px;
            border-left: 5px solid #2e7d32;
        }
        .btn-success, .btn-secondary {
            border-radius: 10px;
            padding: 12px 30px;
            transition: transform 0.2s, box-shadow 0.2s;
        }
        .btn-success:hover, .btn-secondary:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }
        .badge-ai {
            background-color: #0277bd;
            font-size: 0.9rem;
        }
        .ai-list {
            list-style-type: none;
            padding-left: 0;
        }
        .ai-list li {
            position: relative;
            padding-left: 25px;
            margin-bottom: 10px;
        }
        .ai-list li::before {
            content: '\2022';
            color: #2e7d32;
            font-size: 1.5rem;
            position: absolute;
            left: 0;
            top: 0;
        }
        .accordion-button {
            background: #e8f5e9;
            color: #2e7d32;
            font-weight: 600;
        }
        .accordion-button:not(.collapsed) {
            background: #c8e6c9;
            color: #1b5e20;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        h3 {
            color: #01579b;
            font-weight: 600;
        }
    </style>
</head>
<body>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card">
                    <div class="card-header text-center py-4">
                        <h2 class="mb-0"><i class="bi bi-file-earmark-person me-2"></i>Preview CV</h2>
                    </div>
                    <div class="card-body p-5">
                        <div class="row">
                            <div class="col-md-4 info-section">
                                <h3 class="h4">{{ $data['name'] }}</h3>
                                <p><strong><i class="bi bi-envelope me-2"></i>Email:</strong> {{ $data['email'] }}</p>
                                <p><strong><i class="bi bi-telephone me-2"></i>Telepon:</strong> {{ $data['phone'] }}</p>
                                <p><strong><i class="bi bi-geo-alt me-2"></i>Alamat:</strong> {{ $data['address'] }}</p>
                            </div>
                            <div class="col-md-8">
                                <h3 class="h4 border-bottom pb-2"><i class="bi bi-mortarboard me-2"></i>Pendidikan</h3>
                                <p>{{ $data['education'] }}</p>
                                <h3 class="h4 border-bottom pb-2 mt-4"><i class="bi bi-briefcase me-2"></i>Pengalaman Kerja</h3>
                                <p>{{ $data['experience'] }}</p>
                                <h3 class="h4 border-bottom pb-2 mt-4"><i class="bi bi-tools me-2"></i>Keterampilan</h3>
                                <p>{{ $data['skills'] }}</p>
                                <div class="ai-section mt-4">
                                    <h3 class="h4"><i class="bi bi-robot me-2"></i>Saran Keterampilan dari AI <span class="badge badge-ai">Powered by Ipulz The Rapper</span></h3>
                                    <div class="accordion" id="aiSuggestions">
                                        <div class="accordion-item border-0">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#aiContent" aria-expanded="true" aria-controls="aiContent">
                                                    Lihat Saran Profesional
                                                </button>
                                            </h2>
                                            <div id="aiContent" class="accordion-body collapse show">
                                                <ul class="ai-list">
                                                    @foreach (explode("\n", $data['enhanced_skills']) as $line)
                                                        @if (trim($line))
                                                            <li>{{ trim($line) }}</li>
                                                        @endif
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-center bg-light">
                        <form action="{{ route('cv.download') }}" method="POST" class="d-inline">
                            @csrf
                            @foreach ($data as $key => $value)
                                <input type="hidden" name="{{ $key }}" value="{{ $value }}">
                            @endforeach
                            <button type="submit" class="btn btn-success me-2"><i class="bi bi-download me-2"></i>Unduh PDF</button>
                        </form>
                        <a href="{{ route('cv.create') }}" class="btn btn-secondary"><i class="bi bi-arrow-left me-2"></i>Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>