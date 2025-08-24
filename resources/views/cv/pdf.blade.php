<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>CV {{ $data['name'] }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            color: #333;
            line-height: 1.6;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
        }
        h1 {
            color: #01579b;
            border-bottom: 3px solid #0288d1;
            padding-bottom: 10px;
            text-align: center;
            font-size: 28px;
            font-weight: 700;
        }
        h3 {
            color: #0277bd;
            border-bottom: 2px solid #bbdefb;
            padding-bottom: 8px;
            margin-top: 20px;
            font-size: 20px;
            font-weight: 600;
        }
        p {
            margin: 8px 0;
            font-size: 14px;
        }
        .info-section {
            background: #f8f9fa;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
        }
        .ai-section {
            background: #e8f5e9;
            padding: 15px;
            border-radius: 8px;
            border-left: 5px solid #2e7d32;
            margin-top: 20px;
        }
        .section {
            margin-bottom: 20px;
        }
        .label {
            font-weight: 600;
            color: #01579b;
        }
        .ai-list {
            list-style-type: none;
            padding-left: 20px;
        }
        .ai-list li {
            position: relative;
            padding-left: 25px;
            margin-bottom: 8px;
        }
        .ai-list li::before {
            content: '•';
            color: #2e7d32;
            font-size: 1.5rem;
            position: absolute;
            left: 0;
            top: 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>{{ $data['name'] }}</h1>
        <div class="info-section">
            <p><span class="label">Email:</span> {{ $data['email'] }}</p>
            <p><span class="label">Telepon:</span> {{ $data['phone'] }}</p>
            <p><span class="label">Alamat:</span> {{ $data['address'] }}</p>
        </div>
        <div class="section">
            <h3>Pendidikan</h3>
            <p>{{ $data['education'] }}</p>
        </div>
        <div class="section">
            <h3>Pengalaman Kerja</h3>
            <p>{{ $data['experience'] }}</p>
        </div>
        <div class="section">
            <h3>Keterampilan</h3>
            <p>{{ $data['skills'] }}</p>
        </div>
        <div class="ai-section">
            <h3>Saran Keterampilan dari AI</h3>
            <ul class="ai-list">
                @foreach (explode("\n", $data['enhanced_skills']) as $line)
                    @if (trim($line))
                        <li>{{ trim($line) }}</li>
                    @endif
                @endforeach
            </ul>
        </div>
    </div>
</body>
</html>