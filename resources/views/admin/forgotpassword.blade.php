<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Lupa Kata Sandi</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    :root {
      --bg-soft: #f6f9fc;
      --brand: #4f46e5;
      --brand-2: #06b6d4;
      --text: #111827;
      --muted: #6b7280;
      --card: #ffffff;
      --border: #e5e7eb;
    }
    body {
      font-family: 'Inter', system-ui, sans-serif;
      background: linear-gradient(180deg, var(--bg-soft), #fff 40%);
      color: var(--text);
    }
    .login-card {
      border: 1px solid var(--border);
      border-radius: 20px;
      background: var(--card);
      box-shadow: 0 6px 24px rgba(0,0,0,0.06);
      padding: 2rem;
    }
    .login-card h3 {
      font-weight: 700;
      background: linear-gradient(135deg, var(--brand), var(--brand-2));
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }
    .form-control:focus {
      border-color: var(--brand);
      box-shadow: 0 0 0 0.2rem rgba(79,70,229,.25);
    }
    .btn-gradient {
      background: linear-gradient(135deg, var(--brand), var(--brand-2));
      border: none;
      color: #fff;
      font-weight: 600;
      border-radius: 12px;
      transition: transform .2s ease;
    }
    .btn-gradient:hover {
      transform: translateY(-2px);
      color: #fff;
    }
    .text-muted { color: var(--muted)!important; }
  </style>
</head>
<body>
  <div class="d-flex justify-content-center align-items-center vh-100">
    <div class="col-md-4 col-lg-3">
      <div class="login-card">
        <h3 class="text-center mb-4">Reset Kata Sandi</h3>
        <form>
          <div class="mb-3">
            <label for="email" class="form-label">Masukkan Email</label>
            <input type="email" id="email" class="form-control" placeholder="nama@email.com">
          </div>
          <button type="submit" class="btn btn-gradient w-100 mb-3">Kirim Link Reset</button>
        </form>
        <div class="text-center small">
          <a href="{{ route('user.login') }}" class="d-block mb-2 text-muted text-decoration-none">Kembali ke Login</a>
          <a href="/" class="d-block text-decoration-none">⬅ Kembali ke Homepage</a>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
