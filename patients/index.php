<?php
  require_once 'inc/header.php';
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
                      <h6><?= isset($dCount) ? $dCount : 0; ?></h6>
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
                      <h6><?= isset($aCount) ? $aCount : 0; ?></h6>
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
                      <h6><?= isset($rCount) ? $rCount : 0; ?></h6>
                      <a href="medical-report.php"><span class="text-danger small pt-1 fw-bold">view</span></a>
                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Reports Card -->

            <!-- Appointments -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">

                <div class="card-body">
                  <h5 class="card-title">Appointments</h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Doctor</th>
                        <th scope="col">Service</th>
                        <th scope="col">Date</th>
                        <th scope="col">Time</th>
                        <th scope="col">Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php if (empty($user->fetch_appointment($_SESSION['user_id']))) { ?>
                        <tr>
                          <th scope="row" style="vertical-align: middle;height:100px" colSpan="5" class="text-center text-secondary">No record found</th>
                        </tr>
                      <?php
                        }  else { 
                          $appointments = $user->fetch_appointment($_SESSION['user_id']);
                          $num=1;
                          foreach ($appointments as $appointment) {     
                      ?>
                      <tr>
                        <th scope="row"><a href="#"><?= $num++; ?></a></th>
                        <td><?= $appointment['fullname'];?></td>
                        <td><a href="#" class="text-primary"><?= $appointment['service'] ?></a></td>
                        <td><?= $appointment['date'] ?></td>
                        <td><?= $appointment['time'] ?></td>
                        <td>
                          <?php
                            switch ($appointment['appointment_status']) {
                              case 1:
                                echo '<span class="badge bg-success">done</span>';
                                break;

                              case 0:
                                echo '<span class="badge bg-warning">pending</span>';
                                break;
                              
                              default:
                              echo '<span class="badge bg-danger">cancelled</span>';
                                break;
                            }
                          ?>
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
            </div><!-- End Recent Sales -->

          </div>
        </div><!-- End Left side columns -->

      </div>
    </section>

<?php require_once 'inc/footer.php'; ?>