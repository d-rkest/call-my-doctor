<?php require_once 'inc/header.php'; ?>

    <div class="pagetitle">
      <h1>Doctors</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Doctors</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Main Left side columns -->
        <div class="col-lg-12">
          <div class="row">
          
          <!-- Top Selling -->
          <div class="col-12">
            <div class="card top-selling overflow-auto">

              <div class="card-body pb-0">

              
                <div class="modal fade" id="verticalycentered" tabindex="-1">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title">Create new doctor</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                                  
                        <!-- No Labels Form -->
                        <form class="row g-3">
                          <div class="col-md-12">
                            <input type="text" class="form-control" placeholder="Your Name">
                          </div>
                          <div class="col-md-6">
                            <input type="email" class="form-control" placeholder="Email">
                          </div>
                          <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="Phone">
                          </div>
                          <div class="col-md-6">
                            <select id="inputState" class="form-select">
                              <option selected disabled>Gender...</option>
                              <option value="male">Male</option>
                            </select>
                          </div>
                          <div class="col-md-6">
                            <select id="inputState" class="form-select">
                              <option selected disabled>Qualification...</option>
                              <option value="bsc">B.Sc</option>
                              <option value="msc">M.Sc</option>
                              <option value="hnd">HND</option>
                            </select>
                          </div>
                          <div class="col-12">
                          <label for="yourClinicmap" class="form-label">Clinic Map</label>
                            <textarea name="clinic-map" id="yourClinicmap" class="form-control" required></textarea>
                          </div>
                          <div class="col-md-6">
                            <input type="password" class="form-control" placeholder="Password">
                          </div>
                          <div class="col-md-6">
                            <input type="password" class="form-control" placeholder="Re-type Password">
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
                  <h5 class="card-title">List of doctors</h5>
                  <span class="p-3"><a href="#" class="btn btn-primary fw-bold" data-bs-toggle="modal" data-bs-target="#verticalycentered">+ Create</a></span>
                </div>

                <table class="table table-borderless">
                  <thead>
                    <tr>
                      <th scope="col">Profile</th>
                      <th scope="col">doctors info</th>
                      <th scope="col">Address</th>
                      <th scope="col">Clinic Map</th>
                      <th scope="col">Account status</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row"><a href="#"><img class="rounded-circle" src="assets/img/profile.jpg" alt=""></a></th>
                      <td><b>Name:</b> Adebayo <br><b>Email:</b> adebayo@gmail.com <br><b>Tel:</b> 0911111111</td>
                      <td>No. 21 adebayo street, lagos</td>
                      <td><a href="" class="badge bg-primary"><i class="bi bi-map text-light"></i> Map</a></td>
                      <td><span class="badge bg-success">active</span></td>
                      <td>
                        <span><a href="#"><i class="bi bi-pen h3 text-success"></i></a></span>
                        <span><a href="#"><i class="bi bi-eye h3 text-primary"></i></a></span>
                        <span><a href="#"><i class="bi bi-trash h3 text-danger"></i></a></span>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row"><a href="#"><img class="rounded-circle" src="assets/img/profile.jpg" alt=""></a></th>
                      <td><b>Name:</b> Adebayo <br><b>Email:</b> adebayo@gmail.com <br><b>Tel:</b> 0911111111</td>
                      <td>No. 21 adebayo street, lagos</td>
                      <td><a href="" class="badge bg-primary"><i class="bi bi-map text-light"></i> Map</a></td>
                      <td><span class="badge bg-warning">pending</span></td>
                      <td>
                        <span><a href="#"><i class="bi bi-pen h3 text-success"></i></a></span>
                        <span><a href="#"><i class="bi bi-eye h3 text-primary"></i></a></span>
                        <span><a href="#"><i class="bi bi-trash h3 text-danger"></i></a></span>
                      </td>
                    </tr>
                    
                  </tbody>
                </table>

              </div>

            </div>
          </div><!-- End Top Selling -->

          </div>
        </div><!-- End Left side columns -->

      </div>
    </section>

<?php require_once 'inc/footer.php'; ?>