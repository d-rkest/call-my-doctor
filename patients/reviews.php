<?php 
  require_once 'inc/header.php';
  require_once '../Controllers/patientCtrl.php';
?>
    <div class="pagetitle">
      <h1>Reviews</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item"><a href="call-a-doctor.php">Call a doctor</a></li>
          <li class="breadcrumb-item active">Reviews</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">

      <?php
        if (isset($_GET['doctor_id'])) {
          $doctor = $user->get_appointment_doc($_GET['doctor_id']);
        }
      ?>
      
      <div class="row">

        <div class="card border-0 shadow-sm mb-4">
          <div class="card-bodypt-4">
            <div class="row g-4">
              <div class="col-md-3">
                <img src="assets/img/profile-img.jpg" alt="" class="doctor-image rounded-3 img-fluid shadow-sm"/>
              </div>
              <div class="col-md-9">
                <div class="mb-3">
                  <h2 class="card-title h3 mb-1">Dr. <?=$doctor["fullname"];?></h2>
                  <p class="text-primary fs-5 mb-2">Nutritionist</p>
                  <p><i class="bi bi-star-fill"style="color:gold;"></i> <i class="bi bi-star-fill"style="color:gold;"></i> <i class="bi bi-star-fill"style="color:gold;"></i> <i class="bi bi-star-fill"style="color:gold;"></i> <i class="bi bi-star"style="color:gold;"></i>(21 Reviews)</p>
                </div>
                
                <div class="list-group list-group-flush">
                  <div class="list-group-item d-flex align-items-center border-0 px-0">
                  <i class="bi bi-geo-alt"></i>
                    <span class="text-secondary">{location}</span>
                  </div>
                  <!-- <div class="list-group-item d-flex align-items-center border-0 px-0">
                    <i class="bi bi-phone"></i>
                    <span class="text-secondary">{phone}</span>
                  </div> -->
                  <div class="list-group-item d-flex align-items-center border-0 px-0">
                    <i class="bi bi-clock"></i>
                    <span class="text-secondary">Mon-Fri: 9:00 AM - 5:00 PM</span>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>

      </div>

      <div class="row">

        <div class="col-sm-6 mb-3 mb-sm-0">
          <div class="card border-0 shadow-sm mb-3">
            <div class="card-body">
              <div className="d-flex justify-content-between align-items-start mb-3">
                <div>
                  <h5 className="card-title mb-1">Jame</h5>
                  <p className="text-secondary small mb-0">5-10-2024</p>
                </div>
                
                <p><i class="bi bi-star-fill"style="color:gold;"></i> <i class="bi bi-star-fill"style="color:gold;"></i> <i class="bi bi-star-fill"style="color:gold;"></i> <i class="bi bi-star-fill"style="color:gold;"></i> <i class="bi bi-star-fill"style="color:gold;"></i></p>

              </div>
              <p class="card-text">Dr. Smith is an exceptional doctor who truly listens to her patients. She took the time to understand my concerns and provided clear, detailed explanations about my treatment options. Her expertise and caring approach made me feel completely at ease.</p>
              <span class="badge bg-success-subtle text-success rounded-pill">Verified Patient</span>
            </div>
          </div>
        </div>

        <div class="col-sm-6 mb-3 mb-sm-0">
          <div class="card border-0 shadow-sm mb-3">
            <div class="card-body">
              <div className="d-flex justify-content-between align-items-start mb-3">
                <div>
                  <h5 className="card-title mb-1">Adebayo</h5>
                  <p className="text-secondary small mb-0">5-10-2024</p>
                </div>

                <p><i class="bi bi-star-fill"style="color:gold;"></i> <i class="bi bi-star-fill"style="color:gold;"></i> <i class="bi bi-star-fill"style="color:gold;"></i> <i class="bi bi-star"style="color:gold;"></i> <i class="bi bi-star"style="color:gold;"></i></p>

              </div>
              <p class="card-text">Dr. Smith is an exceptional doctor who truly listens to her patients. She took the time to understand my concerns and provided clear, detailed explanations about my treatment options. Her expertise and caring approach made me feel completely at ease.</p>
              <span class="badge bg-success-subtle text-success rounded-pill">Verified Patient</span>
            </div>
          </div>
        </div>

      </div>

    </section>
<?php require_once 'inc/footer.php'; ?>