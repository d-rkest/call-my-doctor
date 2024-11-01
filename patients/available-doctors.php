<?php require_once 'inc/header.php'; ?>

    <div class="pagetitle">
      <h1>Available Doctor</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item"><a href="call-a-doctor.php">Call a Doctor</a></li>
          <li class="breadcrumb-item active">Available Doctor</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">
        
        <div class="row">
          
            <!-- Top Selling -->
            <div class="col-12">
              <div class="card top-selling overflow-auto">

                <div class="card-body pb-0">
                  <h5 class="card-title">Call a doctor</h5>

                  <table class="table table-borderless">
                    <thead>
                      <tr>
                        <th scope="col">Profile</th>
                        <th scope="col">Name</th>
                        <th scope="col">Department</th>
                        <th scope="col">Ratings</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row"><a href="#"><img class="rounded-circle" src="assets/img/profile.jpg" alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold">Dr. Brown</a></td>
                        <td>Optimologist</td>
                        <td class="fw-bold">
                          <i class="bi bi-star-fill"style="color:gold;"></i>
                          <i class="bi bi-star-fill"style="color:gold;"></i>
                          <i class="bi bi-star-fill"style="color:gold;"></i>
                          <i class="bi bi-star-fill"style="color:gold;"></i>
                          <i class="bi bi-star-half"style="color:gold;"></i>
                        </td>
                        <td>
                          <span><a href="#"><i class="bi bi-phone-vibrate h2 text-success"></i></a></span>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#"><img class="rounded-circle" src="assets/img/profile.jpg" alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold">Dr. Morphie</a></td>
                        <td>Cardiologist</td>
                        <td class="fw-bold">
                          <i class="bi bi-star-fill"style="color:gold;"></i>
                          <i class="bi bi-star-fill"style="color:gold;"></i>
                          <i class="bi bi-star-fill"style="color:gold;"></i>
                          <i class="bi bi-star-half"style="color:gold;"></i>
                        </td>
                        <td>
                        <span><a href="#"><i class="bi bi-phone-vibrate h2 text-success"></i></a></span>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#"><img class="rounded-circle" src="assets/img/profile.jpg" alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold">Dr. Kyle</a></td>
                        <td>Gynacologist</td>
                        <td class="fw-bold">
                          <i class="bi bi-star-fill"style="color:gold;"></i>
                          <i class="bi bi-star-fill"style="color:gold;"></i>
                          <i class="bi bi-star-fill"style="color:gold;"></i>
                        </td>
                        <td>
                        <span><a href="#"><i class="bi bi-phone-vibrate h2 text-success"></i></a></span>
                        </td>
                      </tr>
                      
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Top Selling -->
        </div>

      </div>
    </section>

<?php require_once 'inc/footer.php'; ?>