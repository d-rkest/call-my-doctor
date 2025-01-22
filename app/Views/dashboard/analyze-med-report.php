<?php
  require_once dirname(__DIR__) . '/app/Layouts/dashboard-header.php';
?>

<?php
  // require_once 'inc/header.php';
  // require_once '../Controllers/doctorCtrl.php';
?>

    <div class="pagetitle">
      <h1>Analyze Medical Report</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Analyze Medical Report</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <div class="col-lg-12">

            <!-- Medical Report -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">

                <div class="card-body">
                  <div class="card-header"></div>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Date</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row" style="vertical-align: middle;height:100px" colSpan="6" class="text-center text-secondary">No record found</th>
                      </tr>
                      <tr>
                        <th scope="row">1</th>
                        <td></td>
                        <td><a href="#" class="text-primary">Pathology Reports</a></td>
                        <td>28-10-2024</td>
                        <td><span class="btn btn-sm btn-success">done</span>
                        </td>
                        <td>
                          <span class=" badge bg-primary p-2">
                            <a href="analyze-med-report.php" class="text-light"><i class="bi bi-eye"></i> view</a>
                          </span>
                        </td>
                      </tr>
                      <tr>
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Recent Sales -->

        </div>

      </div>
    </section>

<?php  include dirname(__DIR__) . '/app/Layouts/dashboard-footer.php'; ?>