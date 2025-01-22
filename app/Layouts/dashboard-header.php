<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - Call My Doctor</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../dashboard/assets/img/favicon.png" rel="icon">
  <link href="../dashboard/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../dashboard/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../dashboard/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../dashboard/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../dashboard/assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="../dashboard/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="../dashboard/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../dashboard/assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../dashboard/assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="/" class="logo d-flex align-items-center">
        <!-- <img src="../dashboard/assets/img/logo.png" alt=""> -->
        <span class="d-none d-lg-block">Call My Doctor</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="../dashboard/assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">Profile</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Dr. Shun Morphy</h6>
              <!-- <span>Web Designer</span> -->
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="profile.php">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="profile.php">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <!-- <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li> -->
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <form action="../Controllers/userCtrl.php" method="post">
                <button name="logout" class="dropdown-item d-flex align-items-center">
                  <i class="bi bi-box-arrow-right"></i>
                  <span>Sign Out</span>
                </button>
              </form>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="/dashboard/">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="/dashboard/Schedule">
          <i class="bi bi-journal-richtext"></i>
          <span>Schedule</span>
        </a>
      </li><!-- End Call A Doctor Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="/dashboard/Appointment">
          <i class="bi bi-envelope"></i>
          <span>Appointment Request</span>
        </a>
      </li><!-- End Call A Doctor Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="/dashboard/Analyze-Medical-Report">
          <i class="bi bi-journal-text"></i>
          <span>Analyze Medical Report</span>
        </a>
      </li><!-- End Blank Page Nav -->

      <li class="nav-item">
        <a class="mx-auto nav-link collapsed" href="/dashboard/Medical-Feedback"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <i class="bi bi-arrow-right"></i>
          <span>Medical Feedback</span>
        </a>
      </li><!-- End Call A Doctor Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="/dashboard/Calls">
          <i class="bi bi-chat"></i>
          <span>Calls</span>
        </a>
      </li><!-- End Blank Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="/dashboard/My-Wallet">
          <i class="bi bi-piggy-bank"></i>
          <span>My Wallet</span>
        </a>
      </li><!-- End Call A Doctor Page Nav -->

      <li class="nav-item">
        <a class="mx-auto nav-link collapsed" href="/dashboard/Medical-Record">
          <i class="bi bi-archive"></i>
          <span>Medical Record</span>
        </a>
      </li><!-- End Call A Doctor Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="/dashboard/Billing">
          <i class="bi bi-receipt"></i>
          <span>Billing</span>
        </a>
      </li><!-- End Blank Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="/dashboard/Settings">
          <i class="bi bi-gear"></i>
          <span>Settings</span>
        </a>
      </li><!-- End Blank Page Nav -->

      <li class="nav-heading"><hr></li>

      <li class="nav-item">
        <form action="/logout" method="get">
          <button class=" mx-auto collapsed nav-link" name="logout" type="submit">
            <span class="btn btn-sm btn-danger fw-bold"><i class="bi bi-power text-white"></i> Logout</span>
          </button>
        </form>
      </li><!-- End Logout Nav -->

    </ul>

    <span class="d-flex fixed-bottom m-2">
      <?php

        if(isset($_SESSION['message']) && $_SESSION['message'] !=''){
          echo '
          <div class="alert alert-success alert-dismissible fade show d-relative" role="alert">
            <i class="bi bi-check-circle me-1"></i>
            '.$_SESSION['message'].'
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
          unset($_SESSION['message']);
        }

        if(isset($_SESSION['error']) && $_SESSION['error'] !=''){
          echo '
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <i class="bi bi-exclamation-octagon me-1"></i>
            '.$_SESSION['error'].'
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
            unset($_SESSION['error']);
        }

        if(isset($_SESSION['warning']) && $_SESSION['warning'] !=''){
          echo '
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <i class="bi bi-exclamation-triangle me-1"></i>
            '.$_SESSION['warning'].'
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
            unset($_SESSION['warning']);
        }
      ?>
    </span>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">
