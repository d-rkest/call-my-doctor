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

        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              
              <h5 class="card-title">SELECT GENDER & THE REGION YOU FEEL PAIN</h5>
              <!-- <p>Select your sex and the region you feel pain.</p> -->
                <div class="row">

                  <form action="../Controllers/userCtrl.php" method="post">

                    <div class="col mt-3 text-center align-center">
                      <div class="form-check form-check-inline">
                        <div class="col-12 mt-3 text-center align-center">
                          <img src="assets/img/male-icon.png" alt="body" width="120em">
                        </div>
                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="male" required>
                        <label class="form-check-label" for="inlineRadio1">Male</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <div class="col-12 mt-3 text-center align-center">
                          <img src="assets/img/female-icon.jpg" alt="body" width="120em">
                        </div>
                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="female" required>
                        <label class="form-check-label" for="inlineRadio2">Female</label>
                      </div>
                    </div>
                    <div class="mt-3 text-center">
                      <button class="btn btn-primary" name="select_gender" type="submit">Proceed</button>
                    </div>
                  
                  </form>

                </div>
              
            </div>
          </div>

        </div>

        <div class="col-lg-6">
          
          <div class="col-lg-12">

            <div class="card">
              <div class="card-body">
                
                <h5 class="card-title">WHERE DO YOU FEEL PAIN</h5>
                <!-- <p>Select your complain form the list below.</p> -->

                <form action="forms/appointment.php" method="post" role="form" class="php-email-form">
                  <div class="row">
                    <div class="col-md-8 form-group mt-3">
                      <select name="department" id="department" class="form-select" required="">
                        <option value="" disabled>Select...</option>
                        <?php 
                          $spcialty = $user->get_pain();
                          if (empty($user->get_pain())) { 
                            
                          }  else { 
                            $pains = $user->get_pain();
                            $num=1;
                            foreach ($pains as $pain) {     
                        ?>
                          <option value="<?=$pain['pain_id']?>"><?=$pain['region']?></option>
                        <?php } } ?>
                      </select>
                    </div>
                    <div class=" col-md-4 form-group mt-3">
                      <!-- <button class="btn btn-primary" type="submit">Call Doctor</button> -->
                      <a href="available-doctors.php" class="btn btn-primary" type="submit"><i class="bi bi-phone-vibrate-fill"></i> Call</a>
                    </div>
                  </div>
                </form>
                
              </div>
            </div>

          </div>

          <div class="col-lg-12">

            <div class="card">
              <div class="card-body">
                
                <h5 class="card-title">WHICH TYPE OF DOCTOR</h5>
                <!-- <p>Please select a doctor based on field/practice.</p> -->

                <form action="forms/appointment.php" method="post" role="form" class="php-email-form">
                  <div class="row">
                    <div class="col-md-8 form-group mt-3">
                      <select name="doctor" id="doctor" class="form-select" required="">
                        <?php 
                          $spcialties = $user->get_specialization();
                          if (empty($user->get_specialization())) { ?>
                            <option value="" disabled>Please select...</option>
                        <?php
                          }  else { 
                            $specialties = $user->get_specialization();
                            $num=1;
                            foreach ($specialties as $specialty) {     
                        ?>
                          <option value="<?=$specialty['specialization_id']?>"><?=$specialty['specialization']?></option>
                        <?php } } ?>
                      </select>
                    </div>

                    <div class=" col-md-4 form-group mt-3">
                      <a href="available-doctors.php" class="btn btn-primary" type="submit"><i class="bi bi-phone-vibrate-fill"></i> Call</a>
                    </div>
                  </div>
                </form>
                
              </div>
            </div>

          </div>

        </div>

      </div>

      <div class="row">
        
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
                      <th scope="col">No. of patient</th>
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
                      <td><a href="reviews.php?doctor_id=<?=$doctor["user_id"];?>" class="text-primary fw-bold"><?= $doctor["reviews"]; ?></a></td>
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
                          <span><a href="#"><i class="bi bi-phone-vibrate h4 text-success"></i> | </a></span>
                          <span><a href="fix-appointment.php?uid=<?= $doctor["user_id"];?>"><i class="bi bi-envelope h4 text-primary"></i></a></span>
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

    </section>

<?php require_once 'inc/footer.php'; ?>