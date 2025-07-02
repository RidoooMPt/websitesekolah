<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
            background-color: #f9f9f9;
        }
        header {
            background-color: #333;
            color: white;
            padding: 10px;
            text-align: center;
        }
        nav {
            margin: 20px 0;
        }
        nav a {
            margin-right: 15px;
            text-decoration: none;
            color: #007bff;
        }
        .content {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.05);
        }
    </style>
</head>
<body>
    <header>
        <h1>Dashboard Admin</h1>
    </header>

    <nav>
        <a href="{{ route('prestasi.index') }}">Prestasi</a>
        <a href="{{ route('spmb.index') }}">SPMB</a>
        <a href="{{ route('profil.index') }}">Profil</a>
        <a href="{{ route('akademik.index') }}">Akademik</a>
    </nav>

    <div class="content">
        @if(session('success'))
            <div style="color: green; margin-bottom: 10px;">
                {{ session('success') }}
            </div>
        @endif

        @yield('content')
    </div>
</body>
</html>
