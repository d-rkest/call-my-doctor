<?php require_once 'inc/header.php'; ?>

    <div class="pagetitle">
      <h1>New Appointment</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Appointment</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        
        <!-- Appointment booking -->
        <div class="col-12">
          <div class="card recent-sales overflow-auto">

            <div class="card-body">

              <div class="d-flex justify-content-between">
                <h5 class="card-title">Appointments</h5>
                <!-- <span class="p-3"><a href="#" class="btn btn-primary fw-bold" data-bs-toggle="modal" data-bs-target="#verticalycentered">+ Create</a></span> -->
              </div>

              
              <!-- <div class="modal fade" id="verticalycentered" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Make an appointment</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      
                      <form class="row g-3">
                        <div class="col-md-12">
                          <input type="text" class="form-control" placeholder="Your Name">
                        </div>
                        <div class="col-md-6">
                          <select id="inputState" class="form-select">
                            <option selected disabled>Select service...</option>
                            <option value="Doctor 1">service 1</option>
                            <option value="Doctor 2">service 2</option>
                            <option value="Doctor 3">service 3</option>
                          </select>
                        </div>
                        <div class="col-md-6">
                          <input type="date" class="form-control" placeholder="Date">
                        </div>
                        <div class="col-md-6">
                          <input type="time" class="form-control" placeholder="Time">
                        </div>
                        <div class="col-md-6">
                          <input type="text" class="form-control" placeholder="Remark">
                        </div>
                        <div class="col-md-12">
                          <input type="text" class="form-control" placeholder="Meeting Link">
                        </div>
                        <div class="text-center">
                          <button type="submit" class="btn btn-primary">Submit</button>
                          <button type="reset" class="btn btn-secondary">Reset</button>
                        </div>
                      </form>

                    </div>
                  </div>
                </div>
              </div> -->
              <!-- End Vertically centered Modal-->

              <table class="table table-borderless datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Patient</th>
                    <th scope="col">Service</th>
                    <th scope="col">Date</th>
                    <th scope="col">Time</th>
                    <th scope="col">Link</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php if (empty($user->fetch_appointment($_SESSION['user_id']))) { ?>
                    <tr>
                      <th scope="row" style="vertical-align: middle;height:100px" colSpan="7" class="text-center text-secondary">No record found</th>
                    </tr>
                  <?php
                    }  else { 
                      $appointments = $user->fetch_appointment($_SESSION['user_id']);
                      $num=1;
                      foreach ($appointments as $appointment) {     
                  ?>
                  <tr>
                    <th scope="row"><a href="#">1</a></th>
                    <td><?= $appointment['name'] ?></td>
                    <td><?= $appointment['service'] ?></td>
                    <td><?= $appointment['date'] ?></td>
                    <td><?= $appointment['time'] ?></td>
                    <td><a href="<?= $appointment['link'] ?>" target="_blank" class="text-primary">Link to meeting, Zoom</a></td>
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
                    <td>
                      <a href="#" class="btn btn-sm btn-success fw-bold"><i class="bi bi-check-all"></i>approve</a>
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
        </div><!-- End Appointment Booking -->

        
      </div>
    </section>

<?php require_once 'inc/footer.php'; ?>