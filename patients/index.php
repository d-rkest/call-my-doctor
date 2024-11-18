<?php
  require_once 'inc/header.php';
  require_once '../Controllers/patientCtrl.php';
?>

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">

            <!-- Appointments Card -->
            <div class="col-xxl-4 col-md-4">
              <div class="card info-card sales-card">

                <div class="card-body">
                  <h5 class="card-title">Available Doctors</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-book"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?= isset($doctorCount) ? $doctorCount : 0; ?></h6>
                      <a href="available-doc.php"><span class="text-success small pt-1 fw-bold">view</span></a>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Appoointments Card -->

            <!-- Results Card -->
            <div class="col-xxl-4 col-md-4">
              <div class="card info-card revenue-card">

                <div class="card-body">
                  <h5 class="card-title">Appointments</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-file"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?= isset($appointmentCount) ? $appointmentCount : 0; ?></h6>
                      <a href="appointment.php"><span class="text-success small pt-1 fw-bold">view</span></a>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Results Card -->

            <!-- Reports Card -->
            <div class="col-xxl-4 col-md-4">

              <div class="card info-card customers-card">

                <div class="card-body">
                  <h5 class="card-title">Report/Feedback</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-hospital"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?= isset($reportCount) ? $reportCount : 0; ?></h6>
                      <span class="text-danger small pt-1 fw-bold">view</span>
                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Reports Card -->

            <!-- Appointments -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">

                <div class="card-body">
                  <h5 class="card-title">Activities</h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Doctor</th>
                        <th scope="col">Description</th>
                        <th scope="col">Date</th>
                        <th scope="col">Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php if (empty($users->fetch_appointment())) { ?>
                        <tr>
                          <th scope="row" style="vertical-align: middle;height:100px" colSpan="5" class="text-center text-secondary">No record found</th>
                        </tr>
                      <?php
                        }  else { 
                          $appointments = $users->fetch_appointment();
                          $num=1;
                          foreach ($appointments as $appointment) {     
                      ?>
                      <tr>
                        <th scope="row"><a href="#"><?= $num; ?></a></th>
                        <td><?= $appointment['fullname'];?></td>
                        <td><a href="#" class="text-primary">At praesentium minu</a></td>
                        <td>28-10-2024 10:00am</td>
                        <td><span class="badge bg-warning">panding</span></td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#">#2147</a></th>
                        <td>Dr. Shun</td>
                        <td><a href="#" class="text-primary">Blanditiis dolor omnis similique</a></td>
                        <td>21-10-2024 10:00am</td>
                        <td><span class="badge bg-success">done</span></td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#">#2049</a></th>
                        <td>Ashleigh Langosh</td>
                        <td><a href="#" class="text-primary">At recusandae consectetur</a></td>
                        <td>05-10-2024 10:00am</td>
                        <td><span class="badge bg-danger">missed</span></td>
                      </tr>
                      <?php
                          }
                        }
                      ?>
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Recent Sales -->

          </div>
        </div><!-- End Left side columns -->

      </div>
    </section>

<?php require_once 'inc/footer.php'; ?>