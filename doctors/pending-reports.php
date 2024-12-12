<?php
  require_once 'inc/header.php';
  require_once '../Controllers/doctorCtrl.php'
?>

    <div class="pagetitle">
      <h1>Medical Report</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Medical report</li>
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
                  <h5 class="card-title">List of medical reports</h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Patient</th>
                        <th scope="col">Description</th>
                        <th scope="col">Date</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php if (empty($user->fetch_report())) { ?>
                        <tr>
                          <th scope="row" style="vertical-align: middle;height:100px" colSpan="6" class="text-center text-secondary">No record found</th>
                        </tr>
                      <?php
                        }  else { 
                          $reports = $user->fetch_report();
                          $num=1;
                          foreach ($reports as $report) {     
                      ?>
                      <tr>
                        <th scope="row"><a href="#">#2457</a></th>
                        <td><?= $report['patient_id']; ?></td>
                        <td><a href="#" class="text-primary">Pathology Reports</a></td>
                        <td>28-10-2024</td>
                        <td>
                          <?php
                            switch ($report['status']) {
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
                        <td>
                          <span class=" badge bg-primary p-2">
                            <a href="analyze-medical-report.php" class="text-light"><i class="bi bi-eye"></i> view</a>
                          </span>
                        </td>
                      </tr>
                      <tr>
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

      </div>
    </section>

<?php require_once 'inc/footer.php'; ?>