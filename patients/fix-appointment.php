<?php require_once 'inc/header.php'; ?>

    <div class="pagetitle">
      <h1>New Appointment</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item"><a href="call-a-doctor.php">Call A Doctor</a></li>
          <li class="breadcrumb-item active">Appointment</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">

        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">

              <?php
                if (isset($_GET['uid'])) {
                  $doc = $user->get_appointment_doc($_GET['uid']);
                }
              ?>
              
              <h5 class="card-title">Make Appointment With Dr. <?=$doc['fullname'];?></h5>

              <form action="../Controllers/appointmentCtrl.php" method="post">
                <div class="row">
                  <div class="col-md-4 form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="<?= $doc['fullname'];?>" required="" disabled>
                  </div>
                  <div class="col-md-4 form-group mt-3 mt-md-0">
                    <input type="date" name="date" class="form-control datepicker" id="date" placeholder="Appointment Date" required="">
                  </div>
                  <div class="col-md-4 form-group mt-3 mt-md-0">
                    <input type="time" name="time" class="form-control datepicker" id="time" placeholder="Appointment Time" required="">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4 form-group mt-3">
                  
                    <select name="service" id="doctor" class="form-select" required="">
                      <?php 
                        $services = $user->get_services();
                        if (empty($user->get_services())) { ?>
                          <option value="" disabled>Select service...</option>
                      <?php
                        }  else { 
                          $services = $user->get_services();
                          $num=1;
                          foreach ($services as $service) {     
                      ?>
                        <option value="<?=$service['service']?>"><?=$service['service']?></option>
                      <?php } } ?>
                    </select>
                  </div>
                  <div class="col-md-8 form-group mt-3">
                    <input type="text" class="form-control" name="zoom_link" id="remark" placeholder="Zoom Link" required="">
                  </div>
                </div>

                <div class="mt-3 text-center">
                  <input type="hidden" name="patient_id" value="<?=$_SESSION["user_id"];?>">
                  <input type="hidden" name="doctor_id" value="<?=$_GET["uid"];?>">
                  <button type="submit" class="btn btn-primary" name="book_appointment">Book an Appointment</button>
                </div>
              </form>
              
            </div>
          </div>

        </div>
        
      </div>
    </section>

<?php require_once 'inc/footer.php'; ?>