<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }

        .register-container {
            max-width: 400px;
            margin: 100px auto;
            padding: 30px;
            border-radius: 10px;
            background-color: #fff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .register-container h1 {
            font-size: 28px;
            margin-bottom: 30px;
            text-align: center;
            color: #007bff; /* Warna biru primary */
        }

        .form-control {
            border-radius: 20px;
            border-color: #007bff; /* Warna biru primary */
        }

        .btn-primary {
            border-radius: 20px;
            padding: 10px 20px;
            font-size: 16px;
            background-color: #007bff; /* Warna biru primary */
            border: none;
            width: 100%;
        }

        .btn-primary:hover {
            background-color: #0056b3; /* Warna biru yang sedikit lebih gelap */
        }

        .alert {
            margin-bottom: 20px;
            border-radius: 20px; /* Menyesuaikan dengan border-radius form-control */
            background-color: #d4edda; /* Warna hijau success */
            border-color: #c3e6cb; /* Warna border hijau success */
            color: #155724; /* Warna teks hijau success */
            padding: 15px; /* Padding lebih besar */
        }

        .login-link {
            display: block;
            text-align: center;
            margin-top: 20px;
            color: #007bff; /* Warna biru primary */
            text-decoration: none;
        }

        .login-link:hover {
            text-decoration: underline; /* Garis bawah saat dihover */
        }
    </style>
</head>

<body>
    <div class="container register-container">
        <h1>Register</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" name="name" class="form-control" id="name" value="{{ old('name') }}" required>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" id="email" value="{{ old('email') }}" required>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" id="password" required>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="password-confirm">Confirm Password</label>
                <input type="password" name="password_confirmation" class="form-control" id="password-confirm" required>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Register</button>
            </div>
        </form>
        <a href="{{ route('login') }}" class="login-link">Already have an account? Login here</a>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
