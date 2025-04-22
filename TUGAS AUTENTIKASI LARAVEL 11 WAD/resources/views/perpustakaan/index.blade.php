<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Perpustakaan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #0f172a;
            color: #f1f5f9;
        }

        .container {
            margin-top: 60px;
        }

        .title {
            font-weight: 600;
            color: #00f9ff;
            text-shadow: 0 0 10px rgba(0, 249, 255, 0.7);
        }

        .table {
            border-radius: 10px;
            overflow: hidden;
            background-color: #1e293b;
        }

        .table thead {
            background-color: #334155;
            color: #00f9ff;
        }

        .table tbody tr:hover {
            background-color: #475569;
        }

        .btn-custom {
            background: linear-gradient(135deg, #00f9ff, #4ade80);
            border: none;
            color: #0f172a;
            font-weight: 600;
            transition: all 0.3s ease-in-out;
        }

        .btn-custom:hover {
            transform: scale(1.05);
            box-shadow: 0 0 12px #00f9ff;
        }

        .logout-form {
            text-align: right;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logout-form">
            <form action="/logout" method="POST">
                @csrf
                <button class="btn btn-custom">Logout</button>
            </form>
        </div>

        <h2 class="mb-4 title">Daftar Buku Perpustakaan</h2>

        <table class="table table-striped table-bordered text-white">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Judul Buku</th>
                    <th>Penulis</th>
                    <th>Tahun Terbit</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($buku as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->judul_buku }}</td>
                    <td>{{ $item->penulis }}</td>
                    <td>{{ $item->tahun_terbit }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
