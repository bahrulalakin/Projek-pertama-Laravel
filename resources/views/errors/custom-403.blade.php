<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Akses Ditolak</title>
    <style>
        body { font-family: sans-serif; text-align: center; padding: 50px; background-color: #f8fafc; }
        .box { background: #fff; padding: 30px; border-radius: 8px; display: inline-block; box-shadow: 0 4px 6px rgba(0,0,0,0.1); }
        h1 { color: #e3342f; }
        a { color: #3490dc; text-decoration: none; font-weight: bold; }
    </style>
</head>
<body>
    <div class="box">
        <h1>403 - Akses Ditolak</h1>
        <p>{{ $message ?? 'Halaman ini khusus untuk Administrator.' }}</p>
        <a href="{{ url('/') }}">Kembali ke Beranda</a>
    </div>
</body>
</html>