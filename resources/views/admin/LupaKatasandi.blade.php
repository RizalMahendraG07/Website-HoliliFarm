<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lupa Kata Sandi - Holili Farm</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-container {
            background-color: #fff;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }
        h1 {
            text-align: center;
            margin-bottom: 1.5rem;
            font-size: 2rem;
            color: #333;
        }
        label {
            font-weight: bold;
            margin-bottom: 0.5rem;
            display: block;
            color: #333;
        }
        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 1rem;
            border-radius: 6px;
            border: 1px solid #ccc;
            font-size: 1rem;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 1.1rem;
        }
        button:hover {
            background-color: #45a049;
        }
        .back-to-login {
            text-align: center;
            margin-top: 1rem;
            font-size: 0.9rem;
        }
        .back-to-login a {
            color: #4CAF50;
            text-decoration: none;
        }
        .error-message, .success-message {
            padding: 10px;
            margin-bottom: 1rem;
            border-radius: 5px;
            text-align: center;
        }
        .error-message {
            background-color: #ffe0e0;
            color: #d00000;
        }
        .success-message {
            background-color: #e0ffe0;
            color: #007700;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h1>Lupa Kata Sandi</h1>

        @if (session('status'))
            <div class="success-message">
                {{ session('status') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="error-message">
                {{ $errors->first() }}
            </div>
        @endif

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <label for="email">Masukkan Email Anda</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" required>

            <button type="submit">Kirim Link Reset</button>
        </form>

        <div class="back-to-login">
            <p><a href="{{ route('login') }}">← Kembali ke Login</a></p>
        </div>
    </div>
</body>
</html>
