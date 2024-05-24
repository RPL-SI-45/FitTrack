<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FITHELATH</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<body>

<!-- Navbar -->
@include('layout.navbar')

<!-- Content -->
<div class="container mt-4">
  <div class="welcome-message">
    <h1>Halo! Michelle</h1>
    <h2>Welcome to FitHealth</h2>
  </div>
  <div class="row">
    <div class="col-md-4">
      <div class="card">
        <div class="card-header">
          Challenge
        </div>
        <div class="card-body">
          <p class="card-text">Here you can view and join challenges to stay motivated.</p>
          <a href="#" class="btn btn-danger">View Challenges</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <div class="card-header">
          History Calorie
        </div>
        <div class="card-body">
          <p class="card-text">Track your daily calorie intake and view your history.</p>
          <a href="#" class="btn btn-danger">View History</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <div class="card-header">
          Medication Reminder
        </div>
        <div class="card-body">
          <p class="card-text">Stay on track with your medication schedule.</p>
          <a href="#" class="btn btn-danger">View Schedule</a>
        </div>
      </div>
    </div>
  </div>
  <div class="row mt-4">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          Articles
        </div>
        <div class="card-body">
          <p class="card-text">Read our latest articles on fitness and health.</p>
          <a href="#" class="btn btn-danger">Read Articles</a>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<!-- Footer -->
@include('layout.footer')

</body>
</html>
