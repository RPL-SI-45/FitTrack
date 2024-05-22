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

    .footer-links {
      margin: 10px 0;
    }

    .footer-links a {
      color: white;
      display: block;
    }

    .footer-logo {
      height: 30px;
      margin: 0 10px;
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
        <li class="nav-item">
          <form id="login-form" action="/sesi" method="post">
            @csrf
            <input type="hidden" name="login" value="1">
            <button type="submit" class="btn btn-link nav-link">Log in</button>
          </form>
        </li>
        <li class="nav-item">
          <form id="signup-form" action="/register" method="post">
            @csrf
            <input type="hidden" name="signup" value="1">
            <button type="submit" class="btn btn-link nav-link">Sign up</button>
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
      <h1>Welcome to FitHealth</h1>
      <!-- Main content -->
      <div class="card mb-4">
        <div class="card-body">
          <h5 class="content-title">Search</h5>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2 w-75" type="search" placeholder="Search for health tips, articles, and more" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6">
          <div class="card mb-4">
            <div class="card-body">
              <h5 class="content-title">Drink Target</h5>
              <p>Stay hydrated by setting and tracking daily water intake goals.</p>
            </div>
          </div>
          <div class="card mb-4">
            <div class="card-body">
              <h5 class="content-title">Challenge</h5>
              <p>Participate in daily health challenges to stay motivated.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card mb-4">
            <div class="card-body">
              <h5 class="content-title">Medication Reminder</h5>
              <p>Get reminders to take your medication on time.</p>
            </div>
          </div>
          <div class="card mb-4">
            <div class="card-body">
              <h5 class="content-title">Article</h5>
              <p>Read the latest articles on health and wellness.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="mt-5">
  <div class="container text-center">
    <div class="social-media">
      <a href="#"><img src="img/facebook_bw.png" alt="Facebook" class="footer-logo"></a>
      <a href="#"><img src="img/instagram_bw.png" alt="Instagram" class="footer-logo"></a>
      <a href="#"><img src="img/twitter_bw.png" alt="Twitter" class="footer-logo"></a>
      <a href="#"><img src="img/youtube.png" alt="Youtube" class="footer-logo"></a>
      <a href="#"><img src="img/tiktok.png" alt="Tiktok" class="footer-logo"></a>
    </div>
    <div class="footer-links mt-3">
      <a href="#">About FitHealth</a>
      <a href="#">Hubungi kami</a>
      <a href="#">Syarat dan ketentuan</a>
      <a href="#">Kebijakan Privasi</a>
      <a href="#">Berita dan Media</a>
    </div>
    <p class="slogan mt-3">Track your health, transform your life with FitHealth</p>
  </div>
</footer>

</body>
</html>
