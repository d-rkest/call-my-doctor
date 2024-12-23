<?php require_once 'inc/header.php'; ?>

    <div class="pagetitle">
      <h1>Available Doctors</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Available Doctors</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <div class="row">
          
            <!-- Top Selling -->
            <div class="col-12">
              <div class="card top-selling overflow-auto">

                <div class="card-body pb-0">
                  <h5 class="card-title">Call/Book appointment with available doctor</h5>

                  <table class="table table-borderless">
                    <thead>
                      <tr>
                        <th scope="col">Profile</th>
                        <th scope="col">Name</th>
                        <th scope="col">Department</th>
                        <th scope="col">Patients</th>
                        <th scope="col">Ratings</th>
                        <th scope="col">Reviews</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php if (empty($user->available_doctors($_SESSION['user_id']))) { ?>
                        <tr>
                          <th scope="row" style="vertical-align: middle;height:100px" colSpan="5" class="text-center text-secondary">No record found</th>
                        </tr>
                      <?php
                        }  else { 
                          $doctors = $user->available_doctors($_SESSION['user_id']);
                          $num=1;
                          foreach ($doctors as $doctor) {     
                      ?>
                      <tr>
                        <th scope="row"><a href="fix-appointment.php?uid=<?= $doctor["user_id"];?>"><img class="rounded-circle" src="assets/img/profile.jpg" alt=""></a></th>
                        <td><a href="fix-appointment.php?uid=<?= $doctor["user_id"];?>" class="text-primary fw-bold">Dr. <?=$doctor['fullname'];?></a></td>
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
                          <span><a class="px-1" href="#"><i class="bi bi-camera-video-fill text-primary"></i></a></span>
                          <span><a class="px-1" href="#"><i class="bi bi-phone-vibrate h3 text-success"></i></a></span>
                          <span><a class="px-1" href="fix-appointment.php?uid=<?= $doctor["user_id"];?>"><i class="bi bi-envelope-fill text-primary"></i></a></span>
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

      </div>
    </section>

<?php require_once 'inc/footer.php'; ?>