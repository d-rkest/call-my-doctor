<?php
  require_once dirname(__DIR__) . '/app/Layouts/dashboard-header.php';
?>

<?php
  // require_once 'inc/header.php';
  // require_once '../Controllers/doctorCtrl.php';
?>

    <div class="pagetitle">
      <h1>My Wallet</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">My Wallet</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">        

        <div class="row">
          <!-- Appointments Card -->
          <div class="col-xxl-4 col-md-4">
            <div class="card">

              <div class="card-body p-2 text-center">
                Bal: <span class="h1 fw-bold">₦ <?= isset($aCount) ? $aCount : 0; ?></span>
              </div>
              <div class="card-footer text-center">
                <a href="appointment.php" class="badge bg-primary">+ Fund Wallet</a>
              </div>
              
            </div>
          </div><!-- End Appoointments Card -->
        </div>

        <!-- wallet history -->
        <div class="col-12">
          <div class="card recent-sales overflow-auto">

            <div class="card-body">
              <h5 class="card-title">Wallet history</h5>
              
                <table class="table table-borderless datatable" id="available-doctors">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Description</th>
                      <th scope="col">Amount</th>
                      <th scope="col">Date</th>
                      <th scope="col">Status</th>
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

<?php  include dirname(__DIR__) . '/app/Layouts/dashboard-footer.php'; ?>