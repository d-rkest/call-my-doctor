<?php
  require_once dirname(__DIR__) . '/app/Layouts/dashboard-header.php';
?>

<?php
  // require_once 'inc/header.php';
  // require_once '../Controllers/doctorCtrl.php';
?>

    <div class="pagetitle">
      <h1>Calls</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Calls</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">

        <!-- Appointments -->
        <div class="col-12">
          <div class="card recent-sales overflow-auto">

            <div class="card-body">
              <div class="card-header"></div>

                <table class="table table-borderless datatable">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Name</th>
                      <th scope="col">Date</th>
                      <th scope="col">Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row" style="vertical-align: middle;height:100px" colSpan="4" class="text-center text-secondary">No Record</th>
                    </tr>
                    <!-- <tr>
                      <th scope="row">1</th>
                      <td>John Doe</td>
                      <10:00>Sep-10  10:00</td>
                      <td><span class="badge bg-primary">restart</span></td>
                    </tr> -->
                  </tbody>
                </table>

            </div>

          </div>
        </div><!-- End appointments -->
                
      </div>
    </section>

<?php  include dirname(__DIR__) . '/app/Layouts/dashboard-footer.php'; ?>