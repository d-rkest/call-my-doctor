<?php require_once 'partials/header.php'; ?>

    <!-- Hero Section -->
    <section id="hero" class="hero section light-background">

      <img src="assets/img/hero-bg.jpg" alt="" data-aos="fade-in">

      <div class="container position-relative">

        <div class="content row gy-2">
          <div class="col-lg-3 d-flex align-items-stretch">
            <div class="why-box" data-aos="zoom-out" data-aos-delay="200">
              <h3 class="text-light">Call A Doctor</h3>
              <p class="fw-bold">Experience Quality Healthcare Anywhere, Anytime.</p>
              <!-- <p> 
              Our telemedicine platform connects you with licensed healthcare professionals from the comfort of your home. Book virtual consultations, receive expert medical advice, and access prescriptions securely—all with just a few clicks. Your health, your convenience, our priority.
              </p> -->
              <div class="text-center">
                <a href="patients/login.php" class="more-btn"><span>Get started</span> <i class="bi bi-chevron-right"></i></a>
              </div>
            </div>
          </div><!-- End Why Box -->

          <div class="col-lg-9 d-flex align-items-stretch">
            <div class="d-flex flex-column justify-content-center">
              <div class="row gy-2">

                <div class="col-xl-3 d-flex align-items-stretch">
                  <div class="icon-box" data-aos="zoom-out" data-aos-delay="300">
                    <i class="bi bi-car-front"></i>
                    <h4>Call an Ambulance</h4>
                    <a href="#" class="btn btn-primary">Proceed</a>
                  </div>
                </div><!-- End Icon Box -->

                <div class="col-xl-3 d-flex align-items-stretch">
                  <div class="icon-box" data-aos="zoom-out" data-aos-delay="400">
                    <i class="bi bi-heart-pulse"></i>
                    <h4>Self Help</h4>
                    <a href="patients/self-help.php" class="btn btn-primary">Proceed</a>
                  </div>
                </div><!-- End Icon Box -->

                <div class="col-xl-3 d-flex align-items-stretch">
                  <div class="icon-box" data-aos="zoom-out" data-aos-delay="500">
                    <i class="bi bi-inboxes"></i>
                    <h4>Give first Aid</h4>
                    <a href="patients/give-first-aid.php" class="btn btn-primary">Proceed</a>
                  </div>
                </div><!-- End Icon Box -->

                <div class="col-xl-3 d-flex align-items-stretch">
                  <div class="icon-box" data-aos="zoom-out" data-aos-delay="500">
                    <i class="bi bi-capsule-pill"></i>
                    <h4>Buy Precription</h4>
                    <a href="patients/shop.php" class="btn btn-primary">Proceed</a>
                  </div>
                </div><!-- End Icon Box -->

              </div>
            </div>
          </div>
        </div><!-- End  Content-->

      </div>

    </section><!-- /Hero Section -->

<?php require_once 'partials/footer.php'; ?>