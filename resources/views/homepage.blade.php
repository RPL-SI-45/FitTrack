<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
    /* Custom CSS */
    .navbar-brand {
      display: flex;
      align-items: center;
    }

    .navbar-brand img {
      height: 30px;
    }

    .slogan {
      font-size: 14px;
      color: #aaa;
    }

    .social-media {
      margin-top: 20px;
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">
      <img src="img/FitHealth_Logo.png" alt="Logo">
      <span class="flex-grow-1">FITHEALTH</span>
    </a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownFeatures" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Features
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownFeatures">
            <li><a class="dropdown-item" href="/bmi/create">BMI Tracker</a></li>
            <li><a class="dropdown-item" href="#">Hydration Monitor</a></li>
            <li><a class="dropdown-item" href="#">Daily Nutrition Target</a></li>
            <li><a class="dropdown-item" href="#">Medication Reminder</a></li>
            <li><a class="dropdown-item" href="#">Friend Challenge</a></li>
            <li><a class="dropdown-item" href="#">Health Articles</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact us</a>
        </li>
      </ul>
    </div>
    <form class="form-inline my-2 my-lg-0 ml-auto">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    <div>
    <ul class="navbar-nav">
      <li class="nav-item">
        <form id="logout-form" action="/Logout" method="post">
          @csrf
          <input type="hidden" name="logout" value="1">
          <button type="submit" class="btn btn-link nav-link">Logout</button>
        </form>
      </li>
    </ul>
    </div>
  </div>
</nav>

<!-- Content -->
<div class="container mt-4">
  <div class="row">
    <div class="col-md-12">
      <!-- Your dashboard content goes here -->
      <h1>Welcome to FitHealth</h1>
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="bg-dark text-white mt-5">
  <div class="container text-center">
    <div class="social-media">
      <a href="#"><img src="img/facebook.png" alt="Facebook" style="height: 30px;"></a>
      <a href="#"><img src="img/instagram.png" alt="Instagram" style="height: 30px;"></a>
      <a href="#"><img src="img/twitter.png" alt="Twitter" style="height: 30px;"></a>
    </div>
    <p class="slogan mt-3">Track your health, transform your life with FitHealth</p>
  </div>
</footer>

</body>
</html>
