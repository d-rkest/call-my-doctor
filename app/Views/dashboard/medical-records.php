<?php
  require_once dirname(__DIR__) . '/app/Layouts/dashboard-header.php';
?>

<?php
  // require_once 'inc/header.php';
  // require_once '../Controllers/doctorCtrl.php';
?>

    <div class="pagetitle">
      <h1>Medical Records</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Medical Records</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">

        <!-- Availabl doctors -->
        <div class="col-12">
          <div class="card recent-sales overflow-auto">

            <div class="card-body">
              <h5 class="card-title">Medical Records</h5>
              
                <table class="table table-borderless datatable" id="available-doctors">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Name</th>
                      <th scope="col">History</th>
                      <th scope="col">Conditions</th>
                      <th scope="col">Allergies</th>
                      <th scope="col">Medications</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row" style="vertical-align: middle;height:60px" colSpan="7" class="text-center text-secondary">No Record</th>
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

<?php  include dirname(__DIR__) . '/app/Layouts/dashboard-footer.php'; ?>