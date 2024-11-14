<?php require_once 'inc/header.php'; ?>

    <div class="pagetitle">
      <h1>Payment Records</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Payment</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Main -->
        <div class="col-lg-12">
          <div class="row">
          
            <!-- Services -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">

                <div class="card-body pt-3">

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Patient</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Payment status</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row"><a href="#">#1</a></th>
                        <td>Michael T</td>
                        <td>$20</td>
                        <td><span class="badge bg-success">successful</span></td>
                        <td>
                          <a href="../uploads/doc.pdf" target="_blank"><i class="bi bi-eye h5 text-success"></i></a>
                        </td>
                      </tr>
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Recent Sales -->

          </div>
        </div><!-- End Main -->

      </div>
    </section>

<?php require_once 'inc/footer.php'; ?>