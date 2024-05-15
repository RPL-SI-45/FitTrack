<!DOCTYPE html>
<html>
<head>
  <title>BMI</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body {
      font-family: 'Poppins', sans-serif; /* Changed font family */
      background: linear-gradient(45deg, #FDFFC2, #A3D8FF);
      height: 100vh;
      margin: 0;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .container {
      background-color: #f8f9fa;
      border-radius: 8px;
      padding: 30px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
      text-align: center;
      max-width: 400px;
      margin-top: 50px;
    }

    h1 {
      color: #FF76CE;
      margin-bottom: 20px;
    }

    img {
      border-radius: 50%;
      width: 100px;
      height: 100px;
      margin-bottom: 10px;
    }

    p {
      margin-top: 10px;
      margin-bottom: 5px;
      font-size: 18px;
      color: #333;
    }

    .card {
      background-color: #fff;
      border: none;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .card-body {
      padding: 20px;
    }

    .card-title {
      color: #FF76CE;
      font-size: 24px;
      margin-bottom: 5px;
    }

    .card-text {
      font-size: 20px;
      font-weight: bold;
      color: #333;
    }

    .btn-primary {
      background-color: #A3D8FF;
      border-color: #A3D8FF;
      width: 100%;
    }

    .btn-primary:hover {
      background-color: #0056b3;
      border-color: #0056b3;
    }

    .title {
      font-size: 16px;
      color: #FF76CE;
      margin-bottom: 5px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>BMI</h1>
    <img src="{{ asset('img/atiyah.jpg') }}" alt="Your Photo" style="height: 85px; width: 85px; object-fit: cover; border-radius: 50%;">
    <p>Halo, Atiyah</p>
    <h5 class="title">Your BMI</h5>
    <div class="card text-center">
      <div class="card-body">
        <p class="card-text">{{ round($bmi) }}</p>
      </div>
    </div>
    <h5 class="title mt-3">Category</h5>
    <div class="card text-center mt-3">
      <div class="card-body">
        <p class="card-text">{{ $category }}</p>
      </div>
    </div>
    <button type="button" class="btn btn-primary mt-3" onclick="window.location.href='/homepage'">OK</button>
  </div>
</body>
</html>
