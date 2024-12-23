<?php require_once 'inc/header.php';?>
    <div class="pagetitle">
      <h1>Profile</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item">Users</li>
          <li class="breadcrumb-item active">Profile</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">
        <div class="col-xl-4">

          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

              <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
              <h2>Dr. <?= isset($profile['fullname']) ? $profile['fullname'] : 'Null'; ?></h2>
                <?php
                  switch ($profile['specialty']) {
                    case '1':
                      echo '<h3>General Practitional</h3>';
                      break;

                    case '2':
                      echo '<h3>Optimologist</h3>';
                      break;

                    case '3':
                      echo '<h3>Dermatologist</h3>';
                      break;

                    case '4':
                      echo '<h3>Pediatrician</h3>';
                      break;

                    case '5':
                      echo '<h3>Nutritionist</h3>';
                      break;

                    case '6':
                      echo '<h3>Gynacologist</h3>';
                      break;

                    case '7':
                      echo '<h3>Pharmacist</h3>';
                      break;
                    
                    default:
                    echo '<h3>Update code base</h3>';
                      break;
                  }
                ?>
              
              <div class="border-top d-block w-100"></div><br>

              <form action="../Controllers/userCtrl.php" method="post">

                <?php if ($profile['available'] == 1) { ?>

                  <h3 class="fw-bold">Available: <span class="badge bg-success">online</span></h3>
                  <div class="col text-center">
                    <input type="hidden" name="doctor_id" value="<?=$profile['user_id'];?>">
                    <button class="btn btn-sm btn-danger" name="switch_off" type="submit"><i class="bi bi-eye-slash-fill"></i> &nbsp; Go offline</button>
                  </div>

                <?php } else { ?>

                  <h3 class="fw-bold">Available:  <span class="badge bg-danger">offline</span></h3>
                  <div class="col text-center">
                    <input type="hidden" name="doctor_id" value="<?=$profile['user_id'];?>">
                    <button class="btn btn-sm btn-success" name="switch_on" type="submit"><i class="bi bi-eye-fill"></i> &nbsp; switch on</button>
                  </div>

                <?php } ?>

              </form>
            </div>
          </div>

        </div>

        <div class="col-xl-8">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
                </li>

              </ul>
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">

                  <h5 class="card-title">Edit Profile Details</h5>

                  <!-- Profile Edit Form -->
                  <form method="post" action="../Controllers/doctorCtrl.php">

                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Full Name</label>
                      <div class="col-md-8 col-lg-9">
                        <input type="text" class="form-control" id="fullName" value="<?= $profile['fullname']; ?>" disabled>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="map" class="col-md-4 col-lg-3 col-form-label">Clinic Map</label>
                      <div class="col-md-8 col-lg-9">
                        <textarea name="map" class="form-control" id="map" style="height: 100px"><?= $profile['clinic_map']; ?></textarea>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Address" class="col-md-4 col-lg-3 col-form-label">Address</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="address" type="text" class="form-control" id="Address" value="<?= $profile['address']; ?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="phone" type="text" class="form-control" id="Phone" value="<?= $profile['phone']; ?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                      <div class="col-md-8 col-lg-9">
                        <input type="email" class="form-control" id="Email" value="<?= $profile['email']; ?>" disabled>
                      </div>
                    </div>

                    <div class="text-center">
                      <input type="hidden" name="url" value="doctors/profile.php">
                      <input type="hidden" name="user_id" value="<?=$profile["user_id"]?>">
                      <button name="update_profile" type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                  </form><!-- End Profile Edit Form -->

                </div>

                <div class="tab-pane fade pt-3" id="profile-change-password">
                  <!-- Change Password Form -->
                  <form method="post" action="../Controllers/userCtrl.php">

                    <div class="row mb-3">
                      <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="old_password" type="text" class="form-control" id="currentPassword">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="new_password" type="password" class="form-control" id="newPassword">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="confirm_password" type="password" class="form-control" id="renewPassword">
                      </div>
                    </div>

                    <div class="text-center">
                      <input type="hidden" name="url" value="doctors/profile.php">
                      <button name="reset_password" type="submit" class="btn btn-primary">Change Password</button>
                    </div>
                  </form><!-- End Change Password Form -->

                </div>

              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
    </section>
<?php require_once 'inc/footer.php'; ?>