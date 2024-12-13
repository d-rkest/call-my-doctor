<?php 
  require_once 'inc/header.php';
  require_once 'Controllers/patientCtrl.php';
  $patient = $user->view_patient_profile($_GET['user_id']);
?>
    <div class="pagetitle">
      <h1>Profile</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item"><a href="patients.php">Patients</a></li>
          <li class="breadcrumb-item active">Profile</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">
        <div class="col-xl-4">

          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

              <img src="assets/img/profile.jpg" alt="Profile" class="rounded-circle">
              <h2><?=$patient['name'];?></h2>

              <form action="Controllers/userCtrl.php" method="post">
                <?php if ($patient['status'] == 1) { ?>
                  <input type="hidden" name="url" value="view_patient.php?user_id=<?=$patient['user_id'];?>">
                  <input type="hidden" name="status" value="0">
                  <input type="hidden" name="user_id" value="<?=$patient['user_id'];?>">
                  <h3 class="fw-bold">Account status:  <span class="badge bg-success">active</span></h3>
                  <div class="col text-center">
                    <button class="btn btn-danger d-inline-flex" name="suspend_user" type="submit">Suspend</button>
                  </div>
                <?php } else { ?>
                  <input type="hidden" name="url" value="view_patient.php?user_id=<?=$patient['user_id'];?>">
                  <input type="hidden" name="status" value="1">
                  <input type="hidden" name="user_id" value="<?=$patient['user_id'];?>">
                  <h3 class="fw-bold">Account status:  <span class="badge bg-warning">pending</span></h3>
                  <div class="col text-center">
                    <button class="btn btn-success" name="activate_user" type="submit">Activate</button>
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
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-edit">Profile Details</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Reset Password</button>
                </li>

              </ul>
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-edit pt-3" id="profile-edit">

                  <!-- Profile Edit Form -->
                  <form>

                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Full Name</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="fullName" type="text" class="form-control" id="fullName" placeholder="<?=$patient['name'];?>" disabled>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="email" type="email" class="form-control" id="Email" placeholder="<?=$patient['email'];?>" disabled>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="phone" type="text" class="form-control" id="Phone" placeholder="<?=$patient['phone'];?>" disabled>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Gender" class="col-md-4 col-lg-3 col-form-label">Gender</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="gender" type="text" class="form-control" id="gender" placeholder="<?=$patient['gender'];?>" disabled>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Address" class="col-md-4 col-lg-3 col-form-label">Address</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="address" type="text" class="form-control" id="Address" placeholder="<?=$patient['address'];?>" disabled>
                      </div>
                    </div>

                  </form><!-- End Profile Edit Form -->

                </div>

                <div class="tab-pane fade pt-3" id="profile-settings">

                </div>

                <div class="tab-pane fade pt-3" id="profile-change-password">
                  <!-- Change Password Form -->
                  <form>

<div class="row mb-3">
  <label for="resetLink" class="col-md-4 col-lg-3 col-form-label">Reset Link</label>
  <div class="col-md-8 col-lg-9">
    <input name="password" type="password" class="form-control" id="resetLink">
  </div>
</div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Generate</button>
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