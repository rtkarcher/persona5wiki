<?php ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="generator" content="Hugo 0.80.0">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="Persona 5 Wiki">

    <title>Persona 5 Wiki</title>
    <link rel="icon" sizes="192x192" href="img/favicon/192x192.png">
    <link rel="icon" href="img/favicon/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="img/favicon/192x192.png">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>

    <!-- Bootstrap core CSS -->
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

/*Tacky workaround for image resizing*/
img {
  display: block;
  max-width: 100%;
  height: auto;
}

    </style>

    
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="index.php">Persona 5 Wiki</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="#"><link rel="icon" sizes="192x192" href="img/favicon/192x192.png"></a>
    </li>
  </ul>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">
              <span data-feather="home"></span>
              Home
            </a>
          </li>
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Strategy</span>
          <a class="link-secondary" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>    
          <li class="nav-item">
            <a class="nav-link" href="mementos.php">
              <span data-feather="bar-chart-2"></span>
              Mementos & Requests
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="fusion-calculator.php">
              <span data-feather="shopping-cart"></span>
              Persona Fusion Calculator
            </a>
          </li>
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Social</span>
          <a class="link-secondary" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>         
          <li class="nav-item">
            <a class="nav-link" href="social-stats.php">
              <span data-feather="file-text"></span>
              Social Stats
            </a>
          </li> 
          <li class="nav-item">
            <a class="nav-link" href="confidants.php">
              <span data-feather="file-text"></span>
              Confidant Guides
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="gifts.php">
              <span data-feather="file-text"></span>
              Gift Giving Guide
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="hangouts.php">
              <span data-feather="file-text"></span>
              Hangout Spots
            </a>
          </li>
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Activities</span>
          <a class="link-secondary" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
          <li class="nav-item">
            <a class="nav-link" href="weekly-events.php">
              <span data-feather="layers"></span>
              Weekly Events
            </a>
          </li> 
          <li class="nav-item">
            <a class="nav-link" href="exam-guide.php">
              <span data-feather="file"></span>
              School Exam/Quiz Guide
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="jobs.php">
              <span data-feather="layers"></span>
              Part-Time Jobs
            </a>
          </li> 
          <li class="nav-item">
            <a class="nav-link" href="books-dvds.php">
              <span data-feather="layers"></span>
              Books & DVDs
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="games.php">
              <span data-feather="layers"></span>
              Video Games
            </a>
          </li> 
        </ul>
      </div>
    </nav>

