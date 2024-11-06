<?php require_once 'inc/header.php'; ?>

    <div class="pagetitle">
      <h1>Services</h1>
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

                <div class="card-body">
              
                <div class="modal fade" id="verticalycentered" tabindex="-1">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title">Payment records</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                                  
                        <!-- No Labels Form -->
                        <form class="row g-3">
                          <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="Service">
                          </div>
                          <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="Amount">
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

                <div class="d-flex justify-content-between">
                  <h5 class="card-title">Services</h5>
                  <span class="p-3"><a href="#" class="btn btn-primary fw-bold" data-bs-toggle="modal" data-bs-target="#verticalycentered">+ Add</a></span>
                </div>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Service</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row"><a href="#">#1</a></th>
                        <td>Dental</td>
                        <td>$200</td>
                        <td><span class="badge bg-success">active</span></td>
                        <td>
                          <i class="bi bi-pen"></i> &nbsp; &nbsp;
                          <i class="bi bi-trash"></i>
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