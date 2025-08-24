<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat CV - CV Generator</title>
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
        .form-control {
            border-radius: 10px;
            transition: all 0.3s;
        }
        .form-control:focus {
            border-color: #0288d1;
            box-shadow: 0 0 10px rgba(2, 136, 209, 0.3);
        }
        .btn-primary {
            background: linear-gradient(to right, #0288d1, #0277bd);
            border: none;
            border-radius: 10px;
            padding: 12px 30px;
            transition: transform 0.2s, box-shadow 0.2s;
        }
        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(2, 136, 209, 0.4);
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .form-label {
            font-weight: 600;
            color: #01579b;
        }
    </style>
</head>
<body>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header text-center py-4">
                        <h2 class="mb-0"><i class="bi bi-person-lines-fill me-2"></i>Buat CV Anda</h2>
                    </div>
                    <div class="card-body p-5">
                        <form action="{{ route('cv.preview') }}" method="POST">
                            @csrf
                            <div class="mb-4">
                                <label for="name" class="form-label" data-bs-toggle="tooltip" title="Masukkan nama lengkap Anda (misal: John Doe)">Nama Lengkap</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="mb-4">
                                <label for="email" class="form-label" data-bs-toggle="tooltip" title="Gunakan email aktif untuk kontak profesional">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="mb-4">
                                <label for="phone" class="form-label" data-bs-toggle="tooltip" title="Masukkan nomor telepon yang dapat dihubungi">Nomor Telepon</label>
                                <input type="text" class="form-control" id="phone" name="phone" required>
                            </div>
                            <div class="mb-4">
                                <label for="address" class="form-label" data-bs-toggle="tooltip" title="Masukkan alamat lengkap untuk informasi kontak">Alamat</label>
                                <textarea class="form-control" id="address" name="address" rows="3" required></textarea>
                            </div>
                            <div class="mb-4">
                                <label for="education" class="form-label" data-bs-toggle="tooltip" title="Sebutkan riwayat pendidikan, misal: S1 Teknik Informatika, Universitas XYZ">Pendidikan</label>
                                <textarea class="form-control" id="education" name="education" rows="4" required></textarea>
                            </div>
                            <div class="mb-4">
                                <label for="experience" class="form-label" data-bs-toggle="tooltip" title="Jelaskan pengalaman kerja, misal: Software Engineer di PT ABC (2020-2023)">Pengalaman Kerja</label>
                                <textarea class="form-control" id="experience" name="experience" rows="4" required></textarea>
                            </div>
                            <div class="mb-4">
                                <label for="skills" class="form-label" data-bs-toggle="tooltip" title="Masukkan keterampilan, misal: Memasak, Pemrograman, Desain Grafis. AI akan memberikan saran profesional!">Keterampilan</label>
                                <textarea class="form-control" id="skills" name="skills" rows="4" required></textarea>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary"><i class="bi bi-eye me-2"></i>Lihat Preview</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script>
        // Aktifkan tooltip
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl));
    </script>
</body>
</html>