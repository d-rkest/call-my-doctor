<?php require_once 'inc/header.php'; ?>

    <div class="pagetitle">
      <h1>New Appointment</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item"><a href="call-a-doctor.php">Call A Doctor</a></li>
          <li class="breadcrumb-item active">Appointment</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">

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
                              case 'done':
                                echo '<span class="badge bg-success">done</span>';
                                break;

                              case 'cancelled':
                                echo '<span class="badge bg-danger">cancelled</span>';
                                break;
                              
                              default:
                              echo '<span class="badge bg-warning">pending</span>';
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
        </div><!-- End appointments -->
        
      </div>
    </section>

<?php require_once 'inc/footer.php'; ?>