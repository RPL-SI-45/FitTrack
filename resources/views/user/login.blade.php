<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body {
      background-color: #f8f9fa;
    }
    .card {
      border: none;
      box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    }
    .card-header {
      background-color: #007bff;
      color: #fff;
      border-bottom: none;
    }
    .card-body {
      padding: 30px;
    }
    .btn-primary {
      background-color: #007bff;
      border: none;
    }
    .btn-primary:hover {
      background-color: #0056b3;
    }
    .btn-outline-primary {
      color: #007bff;
      border-color: #007bff;
    }
    .btn-outline-primary:hover {
      color: #fff;
      background-color: #007bff;
    }
    .social-media {
      margin-top: 20px;
    }
    .social-media img {
      width: 40px;
      height: 40px;
      margin: 0 5px;
      transition: transform 0.3s;
    }
    .social-media img:hover {
      transform: scale(1.2);
    }
  </style>
</head>
<body>

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h4 class="text-center">FitHealth</h4>
          <p class="text-center">Please enter your login details</p>
        </div>
        <div class="card-body">
          <form>
            <div class="form-group">
              <label for="email">Email address</label>
              <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Login</button>
          </form>
          <hr>
          <p class="text-center">Don't have an account? <a href="/signup">Sign Up</a></p> <!-- Updated href to /signup -->
          <div class="text-center social-media">
            <p>Or login using</p>
            <a href="#"><img src="img/facebook.png" alt="Facebook Logo" class="mr-2"></a>
            <a href="#"><img src="img/google.png" alt="Google Logo" class="mr-2"></a>
            <a href="#"><img src="img/telegram.png" alt="Telegram Logo"></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>
