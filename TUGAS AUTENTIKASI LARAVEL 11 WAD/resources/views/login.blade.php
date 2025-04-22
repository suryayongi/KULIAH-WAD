<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login - Perpustakaan</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color:rgb(46, 18, 18);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #f1f5f9;
            margin: 0;
        }

        .box {
            background-color:rgb(24, 26, 24);
            padding: 30px 25px;
            border-radius: 12px;
            box-shadow: 0 0 20px rgba(0, 249, 255, 0.2);
            width: 320px;
        }

        h2 {
            text-align: center;
            color: #00f9ff;
            margin-bottom: 25px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: none;
            border-radius: 6px;
            background-color: #334155;
            color: #f1f5f9;
            font-size: 14px;
        }

        input::placeholder {
            color: #94a3b8;
        }

        button {
            width: 100%;
            padding: 10px;
            background: linear-gradient(135deg, #00f9ff, #4ade80);
            color: #0f172a;
            font-weight: 600;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            transition: all 0.3s ease-in-out;
        }

        button:hover {
            transform: scale(1.05);
            box-shadow: 0 0 12px #00f9ff;
        }

        .error {
            color: #f87171;
            text-align: center;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="box">
        <h2>Login</h2>

        @if(session('error'))
            <div class="error">{{ session('error') }}</div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Masuk</button>
        </form>
    </div>
</body>
</html>
