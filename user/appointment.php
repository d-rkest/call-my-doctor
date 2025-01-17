<?php
  $active = 'active';
  require_once dirname(__DIR__) . '/app/Layouts/user-header.php';
?>

    <div class="pagetitle">
      <h1>Appointment</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
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
              <div class="card-header">
                <a href="#" class="btn btn-primary">Appointments (0)</a>
                <a class="btn btn-light" href="#available-doctors">Available doctors (0)</a>
              </div>

                <table class="table table-borderless datatable">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Specialist</th>
                      <th scope="col">Date</th>
                      <th scope="col">Time</th>
                      <th scope="col">Description</th>
                      <th scope="col">Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row" style="vertical-align: middle;height:100px" colSpan="6" class="text-center text-secondary">No Record</th>
                    </tr>
                    <!-- <tr>
                      <th scope="row">1</th>
                      <td>Dr. Claire</td>
                      <td><a href="#" class="text-primary">e-precription</a></td>
                      <td>Sep 10</td>
                      <td>10:00</td>
                      <td><span class="badge bg-warning">pending</span></td>
                    </tr> -->
                  </tbody>
                </table>

            </div>

          </div>
        </div><!-- End appointments -->
        

        <!-- Availabl doctors -->
        <div class="col-12">
          <div class="card recent-sales overflow-auto">

            <div class="card-body">
              <h5 class="card-title">Available doctors</h5>
              
                <table class="table table-borderless datatable" id="available-doctors">
                  <thead>
                    <tr>
                      <th scope="col">Doctor</th>
                      <th scope="col">Ratings</th>
                      <th scope="col">Status</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row" style="vertical-align: middle;height:60px" colSpan="6" class="text-center text-secondary">No Record</th>
                    </tr>
                    <!-- <tr>
                      <td><a href="#" class="text-primary fw-bold"></a></td>
                      <td><a href="#" class="text-primary fw-bold"><i class="bi bi-eye"></i></a></td>
                      <td><span class="badge bg-success">available</span></td>
                      <td></td>
                    </tr> -->
                  </tbody>
                </table>

            </div>

          </div>
        </div><!-- End appointments -->
        
      </div>
    </section>

<?php  include dirname(__DIR__) . '/app/Layouts/user-footer.php'; ?>