<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Register - CALL MY DOCTOR</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 d-flex flex-column align-items-center justify-content-center">

              <!-- <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="assets/img/logo.png" alt="">
                  <span class="d-none d-lg-block">NiceAdmin</span>
                </a>
              </div> -->
              <!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                    <p class="text-center small">Already have an account? <a href="login.php">Proceed to login</a></p>
                  </div>

                    <!-- Doctors registration Form -->
                    <form class="row g-3 needs-validation" action="../Controllers/userCtrl.php" method="post" novalidate>
                      <div class="col-md-12">
                        <input type="text" name="fullname" class="form-control" placeholder="Your Name" required>
                        <div class="invalid-feedback">Please, enter your name!</div>
                      </div>
                      <div class="col-md-6">
                        <input type="email" name="email" class="form-control" placeholder="Email" required>
                        <div class="invalid-feedback">Please, enter your email!</div>
                      </div>
                      <div class="col-md-6">
                        <input type="text" name="phone" class="form-control" placeholder="Phone" required>
                        <div class="invalid-feedback">Please, enter your phone number!</div>
                      </div>
                      <div class="col-md-6">
                        <select id="inputState" name="gender" class="form-select">
                          <option selected disabled>Gender...</option>
                          <option value="male">Male</option>
                          <option value="female">Female</option>
                        </select>
                        <div class="invalid-feedback">Please, enter your gender!</div>
                      </div>
                      <div class="col-md-6">
                        <select id="inputState" name="qualification" class="form-select">
                          <option selected disabled>Qualification...</option>
                          <option value="dsc">Doctor's Degree</option>
                          <option value="msc">Master's Degree</option>
                          <option value="bsc">Bachelor's Degree</option>
                          <option value="hnd">Higher National Diploma</option>
                        </select>
                      </div>
                      <div class="col-12">
                      <label for="yourClinicmap" class="form-label">Clinic Map</label>
                        <textarea name="clinic_map" id="yourClinicmap" class="form-control" required></textarea>
                        <div class="invalid-feedback">Please, enter your clinic map!</div>
                      </div>
                      <div class="col-md-6">
                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                        <div class="invalid-feedback">Please, enter your password!</div>
                      </div>
                      <div class="col-md-6">
                        <input type="password" name="re_password" class="form-control" placeholder="Re-type Password" required>
                        <div class="invalid-feedback">Please, re-enter your password!</div>
                      </div>
                      <div class="text-center">
                        <button type="submit" name="register_doctor" class="btn btn-primary">Submit</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                      </div>
                    </form><!-- End No Labels Form -->

                </div>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>