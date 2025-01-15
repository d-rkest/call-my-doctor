<?php
  use PHPMailer\PHPMailer\PHPMailer;

  // Require the database configuration
  require_once dirname(__DIR__) . '/Config/database.php';

  // Autoload classes using Composer's autoloader
  require_once dirname(__DIR__) . '/../vendor/autoload.php';

  $mail = new PHPMailer;
  // $user = new Models\User();
  // $controller = new Controllers\UserController();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Home - Call My Doctor</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

</head>

<body class="index-page">

  <header id="header" class="header sticky-top">

    <div class="branding d-flex align-items-center">

      <div class="container position-relative d-flex align-items-center justify-content-between">
        <a href="index.php" class="logo d-flex align-items-center me-auto">
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <!-- <img src="assets/img/logo.png" alt=""> -->
          <h1 class="sitename">Call My Doctor</h1>
        </a>

        <nav id="navmenu" class="navmenu">
          <ul>
            <li>
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <!-- <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> -->
            </li>
            <li><a href="locate-med-center.php">Locate Medical Center</a></li>
            <li><a href="dashboard/analyze-med-report.php">Analyze Medical Report</a></li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        <?php if (isset($_SESSION['user_type']) && $_SESSION['user_type'] == 0 ) { ?>
          <a class="cta-btn d-none d-sm-block" href="./user">My Profile</a>
        <?php } elseif ($_SESSION['user_type'] == 1) { ?>
          <a class="cta-btn d-none d-sm-block" href="./dashboard">My Profile</a>
        <?php } else { ?>
          <a class="cta-btn d-none d-sm-block" href="login.php">Login / SignUp</a>
        <?php } ?>

      </div>

    </div>

  </header>

  <main class="main">