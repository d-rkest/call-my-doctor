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
        
        <!-- Appointment booking -->
        <div class="col-12">
          <div class="card recent-sales overflow-auto">

            <div class="card-body">

              <div class="d-flex justify-content-between">
                <h5 class="card-title">Appointments</h5>
                <span class="p-3"><a href="#" class="btn btn-primary fw-bold" data-bs-toggle="modal" data-bs-target="#verticalycentered">+ Create</a></span>
              </div>

              
              <div class="modal fade" id="verticalycentered" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Make an appointment</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                                
                      <!-- No Labels Form -->
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
                      </form><!-- End No Labels Form -->

                    </div>
                    <!-- <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div> -->
                  </div>
                </div>
              </div><!-- End Vertically centered Modal-->

              <table class="table table-borderless datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Patient</th>
                    <th scope="col">Service</th>
                    <th scope="col">Date</th>
                    <th scope="col">Time</th>
                    <th scope="col">Amount</th>
                    <th scope="col">Link</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row"><a href="#">1</a></th>
                    <td>Adebayo</td>
                    <td>Pediatrician</td>
                    <td>01-11-2024</td>
                    <td>08:00AM</td>
                    <td>$34</td>
                    <td><a href="#" class="text-primary">Link to meeting, Zoom</a></td>
                    <td><span class="badge bg-success">completed</span></td>
                    <td>
                      <i class="bi bi-pen h4"></i> &nbsp; &nbsp;
                      <i class="bi bi-trash h4 text-danger"></i>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row"><a href="#">2</a></th>
                    <td>Kingley</td>
                    <td>Optimologist</td>
                    <td>01-11-2024</td>
                    <td>10:00AM</td>
                    <td>$22</td>
                    <td><a href="#" class="text-primary">Link to meeting, Zoom</a></td>
                    <td><span class="badge bg-warning">panding</span></td>
                    <td>
                      <i class="bi bi-pen h4"></i> &nbsp; &nbsp;
                      <i class="bi bi-trash h4 text-danger"></i>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row"><a href="#">3</a></th>
                    <td>Emeka</td>
                    <td>Pharmacist</td>
                    <td>01-11-2024</td>
                    <td>04:00PM</td>
                    <td>$15</td>
                    <td><a href="#" class="text-primary">Link to meeting, Zoom</a></td>
                    <td><span class="badge bg-danger">cancelled</span></td>
                    <td>
                      <i class="bi bi-pen h4"></i> &nbsp; &nbsp;
                      <i class="bi bi-trash h4 text-danger"></i>
                    </td>
                  </tr>
                </tbody>
              </table>

            </div>

          </div>
        </div><!-- End Appointment Booking -->

        
      </div>
    </section>

<?php require_once 'inc/footer.php'; ?>