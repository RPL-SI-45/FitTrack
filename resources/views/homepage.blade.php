<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FitHealth</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
    
    .navbar-brand {
      display: flex;
      align-items: center;
    }

    .navbar-brand img {
      height: 30px;
      margin-right: 10px;
    }

    .slogan {
      font-size: 14px;
      color: #ff6347; /* Tomato color */
    }

    .social-media img {
      height: 30px;
      margin: 0 10px;
    }

    .card {
      margin-bottom: 20px;
    }

    .welcome-message {
      text-align: center;
      margin: 20px 0;
    }

    .content-title {
      margin-bottom: 15px;
      font-size: 24px;
      color: #007bff;
    }

    .profile-img {
      height: 30px; /* Profile image size */
      width: 30px;  /* Profile image size */
      border-radius: 50%; /* Make the image circular */
    }

    .profile-dropdown .dropdown-menu {
      right: 0;
      left: auto;
    }

    .profile-header {
      display: flex;

      align-items: center;
      padding: 10px 20px;
      border-bottom: 1px solid #e9ecef;
    }

    .profile-header img {
      margin-right: 10px;
      border-radius: 50%; /* Make the image circular */
    }

    .profile-header span {
      font-weight: bold;
    }

    .navbar, footer {
      background-color: #FFD0D0;
    }

    footer {
      color: white;
      padding: 20px 0;
    }

    .social-media a {
      margin: 0 10px;
    }

    .slogan {
      margin-top: 10px;
      font-size: 14px;
      color: #ff6347; /* Tomato color */
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="img/FitHealth_Logo.png" alt="Logo">
      <span>FITHEALTH</span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownFeatures" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Features
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownFeatures">
            <a class="dropdown-item" href="/bmi/create">BMI Tracker</a>
            <a class="dropdown-item" href="#">Hydration Monitor</a>
            <a class="dropdown-item" href="#">Daily Nutrition Target</a>
            <a class="dropdown-item" href="#">Medication Reminder</a>
            <a class="dropdown-item" href="#">Friend Challenge</a>
            <a class="dropdown-item" href="#">Health Articles</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact us</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0 ml-auto">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
      <ul class="navbar-nav">
        <li class="nav-item dropdown profile-dropdown">
          <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="navbarDropdownProfile" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img src="img/atiyah.jpg" alt="Profile" class="profile-img">
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownProfile">
            <div class="profile-header">
              <img src="img/atiyah.jpg" alt="Profile" class="profile-img">
              <span>Michelle</span>
            </div>
            <a class="dropdown-item" href="/edit-profile">Edit Profile</a>
            <form id="logout-form" action="/mainpage" method="post">
              @csrf
              <input type="hidden" name="logout" value="1">
              <button type="submit" class="dropdown-item">Logout</button>
            </form>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Content -->
<div class="container mt-4">
  <div class="welcome-message">
    <h1>Halo! Michelle</h1>
    <h2>Welcome to FitHealth</h2>
  </div>
  <div class="row">
    <div class="col-md-6">
      <div class="card">
        <div class="card-body">
          <h5 class="content-title">History BMI</h5>
          <p>Track your BMI history to monitor your health progress.</p>
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          <h5 class="content-title">Reminder Minum Obat</h5>
          <p>Get reminders to take your medication on time.</p>
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          <h5 class="content-title">Target Minum Perhari</h5>
          <p>Stay hydrated by setting and tracking daily water intake goals.</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card">
        <div class="card-body">
          <h5 class="content-title">Target Makan Perhari</h5>
          <p>Achieve your nutrition goals by tracking daily food intake.</p>
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          <h5 class="content-title">Challenge Today</h5>
          <p>Participate in daily health challenges to stay motivated.</p>
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          <h5 class="content-title">Health Articles</h5>
          <p>Read the latest articles on health and wellness.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="mt-5">
  <div class="container text-center">
    <div class="social-media">
      <a href="#"><img src="img/facebook_bw.png" alt="Facebook"></a>
      <a href="#"><img src="img/instagram_bw.png" alt="Instagram"></a>
      <a href="#"><img src="img/twitter_bw.png" alt="Twitter"></a>
    </div>
    <p class="slogan mt-3">Track your health, transform your life with FitHealth</p>
  </div>
</footer>

</body>
</html>
