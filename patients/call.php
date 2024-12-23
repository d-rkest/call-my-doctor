<?php 
  require_once 'inc/header.php';
  require_once '../Controllers/patientCtrl.php';
?>
    <div class="pagetitle">
      <h1>Call</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item"><a href="call-a-doctor.php">Call a doctor</a></li>
          <li class="breadcrumb-item active">Call</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">

      <?php
        if (isset($_GET['doctor_id'])) {
          $doctor = $user->get_appointment_doc($_GET['doctor_id']);
        }
      ?>
      
      <div class="row">

        <div class="col-xl-4">

          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

              <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
              <h2>Calling Dr. <?=$doctor['fullname'];?><h1>
            </div>
          </div>
        </div>

      </div>

    </section>
<?php require_once 'inc/footer.php'; ?>