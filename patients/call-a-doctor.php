<?php
  require_once 'inc/header.php';
  require_once '../Controllers/patientCtrl.php';
?>

    <div class="pagetitle">
      <h1>Call a Doctor</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Call a Doctor</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              
              <h5 class="card-title">Call available doctor</h5>
          
              <div class="row">
                <div class="col text-center form-group">
                  <a href="call.php?meeting_id=85234170831&meeting_password=jH6rZKXn07oiPF81qhKWfMI4XY1X7E" class="btn btn-primary"><i class="bi bi-phone-vibrate-fill"></i> Call</a>
                </div>
              </div>
              <div class="row mt-5 mx-lg-3">
                <div class="col-3 text-center"><button class="btn btn-primary">Type of pain</button></div>
                <div class="col-3 text-center"><button class="btn btn-primary">Type of doctor</button></div>
                <div class="col-3 text-center"><button class="btn btn-primary">Location: Country</button></div>
                <div class="col-3 text-center"><button class="btn btn-primary">Location: State</button></div>
              </div>

            </div>
          </div>

        </div>
        
        <!-- Appointments -->
        <div class="col-12">
          <div class="card top-selling overflow-auto">

            <div class="card-body pb-0">
              <h5 class="card-title">BOOK APPOINTMENT OR CALL AVAILABLE DOCTOR</h5>

              <table class="table table-borderless">
                <thead>
                  <tr>
                    <th scope="col">Profile</th>
                    <th scope="col">Doctor</th>
                    <th scope="col">Specialization</th>
                    <th scope="col">Patient</th>
                    <th scope="col">Ratings</th>
                    <th scope="col">Reviews</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php if (empty($user->doctors())) { ?>
                    <tr>
                      <th scope="row" style="vertical-align: middle;height:60px" colSpan="6" class="text-center text-secondary">No record found</th>
                    </tr>
                  <?php
                    }  else { 
                      $doctors = $user->doctors();
                      $num=1;
                      foreach ($doctors as $doctor) {     
                  ?>
                  <tr>
                    <th scope="row"><a href="reviews.php?doctor_id=<?=$doctor["user_id"]?>"><img class="rounded-circle" src="assets/img/profile.jpg" alt=""></a></th>
                    <td><a href="reviews.php?doctor_id=<?=$doctor["user_id"]?>" class="text-primary fw-bold">Dr. <?= $doctor["fullname"]; ?></a></td>
                    <td>
                      <?php
                        switch ($doctor['specialty']) {
                          case '1':
                            echo 'General Practitional';
                            break;

                          case '2':
                            echo 'Optimologist';
                            break;

                          case '3':
                            echo 'Dermatologist';
                            break;

                          case '4':
                            echo 'Pediatrician';
                            break;

                          case '5':
                            echo 'Nutritionist';
                            break;

                          case '6':
                            echo 'Gynacologist';
                            break;

                          case '7':
                            echo 'Pharmacist';
                            break;
                          
                          default:
                          echo 'Update code base';
                            break;
                        }
                      ?>                      
                    </td>
                    <td><?= $doctor["no_of_patient"]; ?></td>
                    <td><?= $doctor['ratings']; ?></td>
                    <td><a href="reviews.php?doctor_id=<?=$doctor["user_id"];?>" class="text-primary fw-bold">(<?= $doctor["reviews"]; ?>) <i class="bi bi-eye"></i></a></td>
                    <td>
                      <?php
                        switch ($doctor['available']) {
                          case '1':
                            echo '<span class="badge bg-success">available</span>';
                            break;
                          
                          default:
                          echo '<span class="badge bg-danger">not available</span>';
                            break;
                        }
                      ?>
                    </td>
                    <td>
                      <?php if ($doctor['available'] == 1) { ?>
                        <span><a class="px-1" href="#"><i class="bi bi-camera-video-fill text-primary"></i></a></span>
                        <span><a href="call.php?doctor_id=<?= $doctor["user_id"];?>" class="px-1" href="#"><i class="bi bi-phone-vibrate h3 text-primary"></i></a></span>
                        <span><a class="px-1" href="fix-appointment.php?uid=<?= $doctor["user_id"];?>"><i class="bi bi-envelope-fill text-primary"></i></a></span>
                      <?php  } else { ?>
                        <span><a href="fix-appointment.php?uid=<?= $doctor["user_id"];?>"><i class="bi bi-envelope h4 text-primary"></i></a></span>
                      <?php } ?>
                    </td>
                  </tr>
                  <?php
                      }
                    }
                  ?>
                </tbody>
              </table>

            </div>

          </div>
        </div><!-- End Top Selling -->
      </div>

      <div class="row">

      </div>

    </section>

<?php require_once 'inc/footer.php'; ?>