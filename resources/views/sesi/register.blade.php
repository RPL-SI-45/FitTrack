<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            background: linear-gradient(45deg, #C8A4ED, #8DEAFE);
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #000000;
        }

        .signup-container {
            max-width: 400px;
            margin: 100px auto;
            padding: 30px;
            border-radius: 10px;
            background-color: rgba(255, 255, 255, 0.9);
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2);
            animation: fadeIn 1s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .signup-container h1 {
            font-size: 28px;
            margin-bottom: 30px;
            text-align: center;
            color: #9747FF;
        }

        .form-control {
            border-radius: 20px;
            border: 2px solid #9747FF;
            transition: all 0.3s ease-in-out;
        }

        .form-control:focus {
            border-color: #9747FF;
            box-shadow: 0px 0px 5px rgba(151, 71, 255, 0.5);
        }

        .btn-primary {
            border-radius: 20px;
            padding: 10px 20px;
            font-size: 16px;
            background: linear-gradient(45deg, #C8A4ED, #9747FF);
            border: none;
            width: 100%;
            transition: background 0.3s ease-in-out;
            color: #FFFFFF;
        }

        .btn-primary:hover {
            background: linear-gradient(45deg, #9747FF, #C8A4ED);
        }

        .btn-social {
            border-radius: 20px;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            width: 100%;
            margin-top: 10px;
            transition: background 0.3s ease-in-out;
            color: #FFFFFF;
        }

        .btn-facebook {
            background: #3b5998;
        }

        .btn-google {
            background: #db4437;
        }

        .alert {
            margin-bottom: 20px;
            border-radius: 20px;
            background-color: #d4edda;
            border-color: #c3e6cb;
            color: #155724;
            padding: 15px;
        }

        .login-link {
            display: block;
            text-align: center;
            margin-top: 20px;
            color: #9747FF;
            text-decoration: none;
            transition: color 0.3s ease-in-out;
        }

        .login-link:hover {
            text-decoration: underline;
            color: #8DEAFE;
        }
    </style>
</head>

<body>
    <div class="container signup-container">
        <h1>Sign Up</h1>
        @if(session('success'))
            <div class="alert">
                {{ session('success') }}
            </div>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="sesi/register" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" id="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" id="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" id="password" required>
            </div>
            <div class="form-group">
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" required>
            </div>
            <div class="form-group">
                <button name="submit" type="submit" class="btn btn-primary">Sign Up</button>
            </div>
        </form>
        <div class="text-center">or sign up with</div>
        <button class="btn btn-social btn-facebook">
            <img src="https://cdn-icons-png.flaticon.com/512/733/733547.png" alt="Facebook Logo" style="width:20px; margin-right:10px;"> Facebook
        </button>
        <button class="btn btn-social btn-google">
            <img src="https://cdn-icons-png.flaticon.com/512/2991/2991148.png" alt="Google Logo" style="width:20px; margin-right:10px;"> Google
        </button>
        <a href="{{ route('sesi.login') }}" class="login-link">Already have an account? Login here</a>
        </div>
</body>
</html>
