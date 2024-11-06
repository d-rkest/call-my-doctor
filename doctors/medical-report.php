<?php require_once 'inc/header.php'; ?>

    <div class="pagetitle">
      <h1>Self Help</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Self help</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              
              <h5 class="card-title">Medical Report</h5>

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
                      <tr>
                        <th scope="row"><a href="#">#2457</a></th>
                        <td>Kolawole</td>
                        <td><a href="#" class="text-primary">Pathology Reports</a></td>
                        <td>28-10-2024</td>
                        <td><span class="badge bg-warning">panding</span></td>
                        <td>
                          <span class=" badge bg-primary p-2">
                            <a href="analyze-medical-report.php" class="text-light"><i class="bi bi-eye"></i> view</a>
                          </span>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#">#2147</a></th>
                        <td>Adebayo</td>
                        <td><a href="#" class="text-primary">Imaging Reports</a></td>
                        <td>21-10-2024</td>
                        <td><span class="badge bg-success">done</span></td>
                        <td>
                          <span class=" badge bg-primary p-2">
                            <a href="analyze-medical-report.php" class="text-light"><i class="bi bi-eye"></i> view</a>
                          </span>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#">#2049</a></th>
                        <td>Princess</td>
                        <td><a href="#" class="text-primary">Laboratory Reports</a></td>
                        <td>05-10-2024</td>
                        <td><span class="badge bg-success">done</span></td>
                        <td>
                          <span class=" badge bg-primary p-2">
                            <a href="analyze-medical-report.php" class="text-light"><i class="bi bi-eye"></i> view</a>
                          </span>
                        </td>
                      </tr>
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Recent Sales -->
              
            </div>
          </div>

        </div>

      </div>
    </section>

<?php require_once 'inc/footer.php'; ?>