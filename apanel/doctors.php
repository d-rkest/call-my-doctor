<?php 
  require_once 'Controllers/doctorCtrl.php';
  require_once 'inc/header.php'; 
?>

    <div class="pagetitle">
      <h1>Doctors</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Doctors</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Main Left side columns -->
        <div class="col-lg-12">
          <div class="row">
          
          <!-- Top Selling -->
          <div class="col-12">
            <div class="card top-selling overflow-auto">

              <div class="card-body pb-0">

              
                <div class="modal fade" id="verticalycentered" tabindex="-1">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title">Create new doctor</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                                  
                        <!-- Doctors registration Form -->
                        <form class="row g-3 needs-validation" action="../Controllers/userCtrl.php" method="post" novalidate>
                          <div class="col-md-12">
                            <input type="text" name="fullname" class="form-control" placeholder="Your Name" required>
                            <div class="invalid-feedback">Please, enter your name!</div>
                          </div>
                          <div class="col-md-6">
                            <input type="email" name="email" class="form-control" placeholder="Email">
                            <div class="invalid-feedback">Please, enter your email!</div>
                          </div>
                          <div class="col-md-6">
                            <input type="text" name="phone" class="form-control" placeholder="Phone">
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
                            <input type="text" name="address" class="form-control" placeholder="Address" required>
                            <div class="invalid-feedback">Please, enter your address!</div>
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
                      <!-- <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      </div> -->
                    </div>
                  </div>
                </div><!-- End Vertically centered Modal-->
                
                <div class="d-flex justify-content-between">
                  <h5 class="card-title">List of doctors</h5>
                  <span class="p-3"><a href="#" class="btn btn-primary fw-bold" data-bs-toggle="modal" data-bs-target="#verticalycentered">+ Create</a></span>
                </div>

                <table class="table table-borderless">
                  <thead>
                    <tr>
                      <th scope="col">Profile</th>
                      <th scope="col">doctors info</th>
                      <th scope="col">Address</th>
                      <th scope="col">Clinic Map</th>
                      <th scope="col">Account status</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php if (empty($user->fetch_doctors())) { ?>
                      <tr>
                        <th scope="row" style="vertical-align: middle;height:100px" colSpan="5" class="text-center text-secondary">No record found</th>
                      </tr>
                    <?php
                      }  else { 
                        $doctors = $user->fetch_doctors();
                        $num=1;
                        foreach ($doctors as $doctor) {     
                    ?>
                    <tr>
                      <th scope="row"><a href="#"><img class="rounded-circle" src="assets/img/profile.jpg" alt=""></a></th>
                      <td>
                        <b>Name: Dr. </b> <?= $doctor['fullname'];?> <br>
                        <b>Email:</b> <?= $doctor['email'];?> <br>
                        <b>Tel:</b> <?= $doctor['phone'];?>
                      </td>
                      <td><?= $doctor['address'];?></td>
                      <td><a href="#" class="badge bg-primary"><i class="bi bi-map text-light"></i> Map</a></td>
                      <td>
                        <?php
                          switch ($doctor['status']) {
                            case 'active':
                              echo '<span class="badge bg-success">active</span>';
                              break;

                            case 'inactive':
                              echo '<span class="badge bg-danger">inactive</span>';
                              break;
                            
                            default:
                            echo '<span class="badge bg-warning">pending</span>';
                              break;
                          }
                        ?>
                        
                      </td>
                      <td>
                        <span><a href="view_doctor.php?id=<?= $doctor['user_id']; ?>"><i class="bi bi-eye h5 text-primary"></i></a></span>
                        <span><a href="#"><i class="bi bi-trash h5 text-danger"></i></a></span>
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
        </div><!-- End Left side columns -->

      </div>
    </section>

<?php require_once 'inc/footer.php'; ?>