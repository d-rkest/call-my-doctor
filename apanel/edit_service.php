<?php
  require_once 'inc/header.php';
  require_once 'Controllers/doctorCtrl.php';
  // $doctor = $user->edit_service($_GET['service_id']);
?>
    <div class="pagetitle">
      <h1>Edit Service</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item"><a href="services.php">Services</a></li>
          <li class="breadcrumb-item active">Edit services</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">
        <div class="col-xl-12">

          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                  <!-- Profile Edit Form -->
                  <form>
                    <div class="row d-inline-flex justify-content-center">

                      <div class="col-md-6">
                        <select id="inputState" name="gender" class="form-select" required>
                          <option selected disabled>Gender...</option>
                          <option value="male">Male</option>
                        </select>
                        <div class="invalid-feedback">Please, select gender!</div>
                      </div>

                      <div class="col-md-6 text-center">
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                      </div>

                    </div>
                  </form><!-- End Profile Edit Form -->

            </div>
          </div>

        </div>

      </div>
    </section>
<?php require_once 'inc/footer.php'; ?>