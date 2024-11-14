<?php
  require_once 'Controllers/patientCtrl.php';
  require_once 'inc/header.php'; 
?>

    <div class="pagetitle">
      <h1>Patients</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Patients</li>
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
                        <h5 class="modal-title">Create new patient</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                                  
                        <!-- No Labels Form -->
                        <form class="row g-3 needs-validation" action="./Controllers/userCtrl.php" method="post" novalidate>
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
                          <div class="col-12">
                            <input type="text" name="address" class="form-control" placeholder="Address" required>
                            <div class="invalid-feedback">Please, enter your address!</div>
                          </div>
                          <div class="col-md-6">
                            <input type="date" name="date_of_birth" class="form-control" placeholder="Date of birth" required>
                            <div class="invalid-feedback">Please, enter your date of birth!</div>
                          </div>
                          <div class="col-md-6">
                            <select id="inputState" name="gender" class="form-select" required>
                              <option selected disabled>Gender...</option>
                              <option value="male">Male</option>
                            </select>
                            <div class="invalid-feedback">Please, select gender!</div>
                          </div>
                          <div class="col-md-6">
                            <input type="password" name="password" class="form-control" placeholder="Password" required>
                            <div class="invalid-feedback">Please, enter your password!</div>
                          </div>
                          <div class="col-md-6">
                            <input type="password" name="re_password" class="form-control" placeholder="Re-type Password" required>
                            <div class="invalid-feedback">Please, re-type password!</div>
                          </div>
                          <div class="text-center">
                            <button type="submit" name="register_patient" class="btn btn-primary">Submit</button>
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
                  <h5 class="card-title">List of patients</h5>
                  <span class="p-3"><a href="#" class="btn btn-primary fw-bold" data-bs-toggle="modal" data-bs-target="#verticalycentered">+ Create</a></span>
                </div>

                <table class="table table-borderless">
                  <thead>
                    <tr>
                      <th scope="col">Profile</th>
                      <th scope="col">Patients info</th>
                      <th scope="col">Address</th>
                      <th scope="col">Account status</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php if (empty($user->fetch_patient())) { ?>
                      <tr>
                        <th scope="row" style="vertical-align: middle;height:100px" colSpan="5" class="text-center text-secondary">No record found</th>
                      </tr>
                    <?php
                      }  else { 
                        $patients = $user->fetch_patient();
                        $num=1;
                        foreach ($patients as $patient) {     
                    ?>
                    <tr>
                      <th scope="row"><a href="#"><img class="rounded-circle" src="assets/img/profile.jpg" alt=""></a></th>
                      <td>
                        <b>Name:</b> <?= $patient['fullname'];?> <br>
                        <b>Email:</b> <?= $patient['email'];?> <br>
                        <b>Tel:</b> <?= $patient['phone'];?>
                      </td>
                      <td> <?= $patient['address'];?></td>
                      <td>
                        <?php
                          switch ($patient['status']) {
                            case 'active':
                              echo '<span class="btn btn-sm btn-success">active</span>';
                              break;

                            case 'inactive':
                              echo '<span class="btn btn-sm btn-danger">inactive</span>';
                              break;
                            
                            default:
                            echo '<span class="btn btn-sm btn-warning">pending</span>';
                              break;
                          }
                        ?>
                      </td>
                      <td>
                        <span><a href="#"><i class="bi bi-pen h5 text-success"></i></a></span>
                        <span><a href="view_patient.php?id=<?= $patient['user_id']; ?>"><i class="bi bi-eye h5 text-primary"></i></a></span>
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