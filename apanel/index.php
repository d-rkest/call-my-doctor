<?php
  require_once 'inc/header.php';
  require_once  'Controllers/dashboardCtrl.php';
  $serviceCount = $data->count_services();
  $doctorCount = $data->count_doctors();
  $patientCount = $data->count_patient();
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

            <!-- Services Card -->
            <div class="col-lg-3 col-md-4">
              <div class="card info-card sales-card">

                <div class="card-body">
                  <h5 class="card-title">Services</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-book"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?= isset($serviceCount) ? $serviceCount : 0; ?></h6>
                      <span class="text-success small pt-1 fw-bold"><a href="services.php">view</a></span>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sevices Card -->

            <!-- Doctors Card -->
            <div class="col-lg-3 col-md-4">
              <div class="card info-card revenue-card">

                <div class="card-body">
                  <h5 class="card-title">Doctors</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-person"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?= isset($doctorCount) ? $doctorCount : 0; ?></h6>
                      <span class="text-success small pt-1 fw-bold"><a href="doctors.php">view</a></span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Doctors Card -->

            <!-- Patients Card -->
            <div class="col-lg-3 col-md-4">

              <div class="card info-card customers-card">

                <div class="card-body">
                  <h5 class="card-title">Patients</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?= isset($patientCount) ? $patientCount : 0; ?></h6>
                      <span class="text-danger small pt-1 fw-bold"><a href="patients.php">view</a></span>
                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Patients Card -->

            <!-- Revenue Card -->
            <div class="col-lg-3 col-md-4">

              <div class="card info-card revenue-card">

                <div class="card-body">
                  <h5 class="card-title">Revenue</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-cash"></i>
                    </div>
                    <div class="ps-3">
                      <h6>$---</h6>
                      <span class="text-danger small pt-1 fw-bold"><a href="medical-report.php">view</a></span>
                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Reports Card -->

            <!-- All appointments -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">

                <div class="card-body">
                  <h5 class="card-title">Activities</h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Doctor</th>
                        <th scope="col">Patient</th>
                        <th scope="col">Service</th>
                        <th scope="col">Date</th>
                        <th scope="col">Time</th>
                        <th scope="col">Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php if (empty($data->fetch_appointment())) { ?>
                        <tr>
                          <th scope="row" style="vertical-align: middle;height:100px" colSpan="7" class="text-center text-secondary">No record found</th>
                        </tr>
                      <?php
                        }  else { 
                          $appointments = $data->fetch_appointment();
                          $num=1;
                          foreach ($appointments as $appointment) {     
                      ?>
                      <tr>
                        <th scope="row"><a href="#"><?= $num; ?></a></th>
                        <td>Dr. <?= $appointment['doctor_id'];?></td>
                        <td><?= $appointment['patient_id'];?></td>
                        <td><a href="#" class="text-primary"><?= $appointment['service'];?></a></td>
                        <td><?= $appointment['date'];?></td>
                        <td><?= $appointment['time'];?></td>
                        <td>
                          <?php
                            switch ($appointment['appointment_status']) {
                              case 'done':
                                echo '<span class="btn btn-sm btn-success">done</span>';
                                break;

                              case 'cancelled':
                                echo '<span class="btn btn-sm btn-danger">cancelled</span>';
                                break;
                              
                              default:
                              echo '<span class="btn btn-sm btn-warning">pending</span>';
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