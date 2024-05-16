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
      flex-direction: column; /* Changed flex-direction to column */
    }

    .profile-info {
            margin-bottom: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .profile-info img {
            width: 50px; /* Adjusted Profile image size */
            height: 50px; /* Adjusted Profile image size */
            margin-right: 10px;
            border-radius: 50%; /* Make the image circular */
        }

        .profile-info p {
            color: #333;
            font-size: 24px;
            margin: 0;
        }

    h1 {
      color: #FF76CE;
      margin-bottom: 20px;
    }

    .center {
      display: flex;
      align-items: center;
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
      width: 100%;
      padding: 1px;
    }

    .card-title {
      font-family: 'Poppins', sans-serif; /* Changed font family */
      color: #FF76CE;
      font-size: 24px;
      margin-bottom: 5px;
      font-weight: bold; /* Bold title */
      font-family: 'Poppins', sans-serif; /* Changed font family */
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
      font-weight: bold; /* Bold title */
      font-family: 'Poppins', sans-serif; /* Changed font family */
    }

    .slogan {
            color: #666;
            font-size: 16px;
            margin-top: 10px;
            text-align: center; /* Center the slogan */
        }
    
    p {
            margin-top: 20px;
            color: #666;
            font-weight: bold; /* Bold the footer slogan */
        }


    /* Custom input width */
    input[type="text"],
    select {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1 class="text-center">BMI</h1>
    <div class="profile-info">
      <img src="{{ asset('img/atiyah.jpg') }}" alt="Your Photo" class="profile-img">
      <p>Halo, Atiyah</p>
    </div>
      <p class="slogan">Measure, know, and make changes</p>
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
    <p class="slogan mt-3">Track your health, transform your life with FitHealth</p>
  </div>
</body>
</html>
