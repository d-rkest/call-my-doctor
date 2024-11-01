<?php require_once 'inc/header.php'; ?>

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
              
              <h5 class="card-title">Select pain region</h5>
              <p>Select your sex and the region you feel pain.</p>

              <form action="forms/appointment.php" method="post" role="form" class="php-email-form">
                <div class="row">
                  <div class="col-12 mt-3 text-center align-center">
                    <img src="assets/img/body.jpeg" alt="body" width="150em">
                  </div>
                  <div class="col mt-3 text-center align-center">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                      <label class="form-check-label" for="inlineRadio1">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                      <label class="form-check-label" for="inlineRadio2">Female</label>
                    </div>
                  </div>
                </div>
                  <div class="mt-3 text-center">
                    <!-- <button class="btn btn-primary" type="submit">Call Doctor</button> -->
                    <a href="available-doctors.php" class="btn btn-primary" type="submit">Call Doctor</a>
                  </div>
              </form>
              
            </div>
          </div>

        </div>

        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              
              <h5 class="card-title">Where do you feel pain</h5>
              <p>Select your complain form the list below.</p>

              <form action="forms/appointment.php" method="post" role="form" class="php-email-form">
                <div class="row">
                  <div class="col-md-4 form-group mt-3">
                    <select name="department" id="department" class="form-select" required="">
                      <option value="">Select Complain</option>
                      <option value="pain 1">Pain 1</option>
                      <option value="pain 2">Pain 2</option>
                      <option value="pain 3">Pain 3</option>
                    </select>
                  </div>
                  <div class=" col-md-4 form-group mt-3">
                    <!-- <button class="btn btn-primary" type="submit">Call Doctor</button> -->
                    <a href="available-doctors.php" class="btn btn-primary" type="submit">Call Available Doctor</a>
                  </div>
                </div>
              </form>
              
            </div>
          </div>

        </div>

        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              
              <h5 class="card-title">Which type of doctor</h5>
              <p>Please select a doctor based on field/practice.</p>

              <form action="forms/appointment.php" method="post" role="form" class="php-email-form">
                <div class="row">
                  <div class="col-md-4 form-group mt-3">
                    <select name="doctor" id="doctor" class="form-select" required="">
                      <option value="">Select Doctor</option>
                      <option value="Doctor 1">General practitional</option>
                      <option value="Doctor 2">Optimologist</option>
                      <option value="Doctor 3">Dermatologist</option>
                      <option value="Doctor 3">Pediatrician</option>
                    </select>
                  </div>

                  <div class=" col-md-4 form-group mt-3">
                    <!-- <button class="btn btn-primary" type="submit">Call Doctor</button> -->
                    <a href="available-doctors.php" class="btn btn-primary" type="submit">Call A Doctor</a>
                  </div>
                </div>
              </form>
              
            </div>
          </div>

        </div>
        
        <div class="row">
          
            <!-- Top Selling -->
            <div class="col-12">
              <div class="card top-selling overflow-auto">

                <div class="card-body pb-0">
                  <h5 class="card-title">Select a doctor</h5>

                  <table class="table table-borderless">
                    <thead>
                      <tr>
                        <th scope="col">Profile</th>
                        <th scope="col">Name</th>
                        <th scope="col">Department</th>
                        <th scope="col">Ratings</th>
                        <th scope="col">Available</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row"><a href="#"><img class="rounded-circle" src="assets/img/profile.jpg" alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold">Dr. Brown</a></td>
                        <td>Optimologist</td>
                        <td class="fw-bold">
                          <i class="bi bi-star-fill"style="color:gold;"></i>
                          <i class="bi bi-star-fill"style="color:gold;"></i>
                          <i class="bi bi-star-fill"style="color:gold;"></i>
                          <i class="bi bi-star-fill"style="color:gold;"></i>
                          <i class="bi bi-star-half"style="color:gold;"></i>
                        </td>
                        <td><span class="badge bg-success">available</span></td>
                        <td>
                        <span><a href="#"><i class="bi bi-phone-vibrate h2 text-success"></i> | </a></span>
                        <span><a href="appointment.php"><i class="bi bi-envelope h2 text-primary"></i></a></span>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#"><img class="rounded-circle" src="assets/img/profile.jpg" alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold">Dr. Morphie</a></td>
                        <td>Cardiologist</td>
                        <td class="fw-bold">
                          <i class="bi bi-star-fill"style="color:gold;"></i>
                          <i class="bi bi-star-fill"style="color:gold;"></i>
                          <i class="bi bi-star-fill"style="color:gold;"></i>
                          <i class="bi bi-star-half"style="color:gold;"></i>
                        </td>
                        <td><span class="badge bg-danger">not available</span></td>
                        <td>
                        <span><a href="appointment.php"><i class="bi bi-envelope h2 text-primary"></i></a></span>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#"><img class="rounded-circle" src="assets/img/profile.jpg" alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold">Dr. Kyle</a></td>
                        <td>Gynacologist</td>
                        <td class="fw-bold">
                          <i class="bi bi-star-fill"style="color:gold;"></i>
                          <i class="bi bi-star-fill"style="color:gold;"></i>
                          <i class="bi bi-star-fill"style="color:gold;"></i>
                        </td>
                        <td><span class="badge bg-success">available</span></td>
                        <td>
                        <span><a href="#"><i class="bi bi-phone-vibrate h2 text-success"></i> | </a></span>
                        <span><a href="appointment.php"><i class="bi bi-envelope h2 text-primary"></i></a></span>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#"><img class="rounded-circle" src="assets/img/profile.jpg" alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold">Dr. Melindes</a></td>
                        <td>Nutritionist</td>
                        <td class="fw-bold">
                          <i class="bi bi-star-fill"style="color:gold;"></i>
                          <i class="bi bi-star-fill"style="color:gold;"></i>
                          <i class="bi bi-star-fill"style="color:gold;"></i>
                        </td>
                        <td><span class="badge bg-success">available</span></td>
                        <td>
                        <span><a href="#"><i class="bi bi-phone-vibrate h2 text-success"></i> | </a></span>
                        <span><a href="appointment.php"><i class="bi bi-envelope h2 text-primary"></i></a></span>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#"><img class="rounded-circle" src="assets/img/profile.jpg" alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold">Dr. Clare</a></td>
                        <td>Pharmacist</td>
                        <td class="fw-bold">
                          <i class="bi bi-star-fill"style="color:gold;"></i>
                          <i class="bi bi-star-fill"style="color:gold;"></i>
                          <i class="bi bi-star-half"style="color:gold;"></i>
                        </td>
                        <td><span class="badge bg-success">available</span></td>
                        <td>
                        <span><a href="#"><i class="bi bi-phone-vibrate h2 text-success"></i> | </a></span>
                        <span><a href="appointment.php"><i class="bi bi-envelope h2 text-primary"></i></a></span>
                        </td>
                      </tr>
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Top Selling -->
        </div>

      </div>
    </section>

<?php require_once 'inc/footer.php'; ?>