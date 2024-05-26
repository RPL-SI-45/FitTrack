<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a href="{{ route('home') }}" class="d-flex align-items-center">
      <img src="{{ url('img/FitHealth_Logo.png') }}" alt="Logo" class="img-responsive" style="height: 30px;margin-right: 10px">
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
        <li class="nav-item">
          <form id="logout-form" action="/mainpage" method="post">
            @csrf
            <input type="hidden" name="logout" value="1">
            <button type="submit" class="btn btn-link nav-link">Logout</button>
          </form>
        </li>
      </ul>
    </div>
  </div>
</nav>