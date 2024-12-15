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
              
              <h5 class="card-title">Get Self Help</h5>
              
              <!-- Pills Tabs -->
              <ul class="nav nav-pills " id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">How are you feeling?</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Learn about illness</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-treat-tab" data-bs-toggle="pill" data-bs-target="#pills-treat" type="button" role="tab" aria-controls="pills-treat" aria-selected="false">How to treat illness</button>
                </li>
              </ul>

              <div class="tab-content pt-2" id="myTabContent">

                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="home-tab">
                  <p>Select how you're feeling from the dropdown menu</p>
                
                  <div class="mb-5" data-aos="fade-up" data-aos-delay="200">
                    
                    <form action="forms/appointment.php" method="post" role="form" class="php-email-form">
                      <div class="row">
                        <div class="col-md-4 form-group mt-3">
                          <select name="department" id="department" class="form-select" required>
                            <option disabled selected>Select...</option>
                            <option value="pain 1">Weak</option>
                            <option value="pain 2">Tired</option>
                            <option value="pain 3">Running stomach</option>
                          </select>
                        </div>
                        <div class=" col-md-4 form-group mt-3">
                          <a href="how-are-you-feeling.php" class="btn btn-primary" type="submit">Proceed</a>
                        </div>
                      </div>
                    </form>
                  </div><!-- Form -->
                </div>

                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="profile-tab">
                  <p>Learn about an illness</p>
                
                  <div class="mb-5" data-aos="fade-up" data-aos-delay="200">
                    
                    <form action="forms/appointment.php" method="post" role="form" class="php-email-form">
                      <div class="row">
                        <div class="col-md-4 form-group mt-3">
                          <select name="department" id="department" class="form-select" required>
                            <option value="" selected disabled>Select...</option>
                            <option value="pain 1">Malaria</option>
                            <option value="pain 2">Fever</option>
                            <option value="pain 3">Ulcer</option>
                          </select>
                        </div>
                        <div class=" col-md-4 form-group mt-3">
                          <a href="learn-about-illness.php" class="btn btn-primary" type="submit">Learn more</a>
                        </div>
                      </div>
                    </form>
                  </div><!-- Form -->

                </div>

                <div class="tab-pane fade" id="pills-treat" role="tabpanel" aria-labelledby="treat-tab">
                  <p>Learn how to treat an illness</p>
                
                  <div class="mb-5" data-aos="fade-up" data-aos-delay="200">
                    
                    <form action="forms/appointment.php" method="post" role="form" class="php-email-form">
                      <div class="row">
                        <div class="col-md-4 form-group mt-3">
                          <select name="department" id="department" class="form-select" required>
                            <option value="">Select sickness..</option>
                            <option value="pain 1">Malaria</option>
                            <option value="pain 2">Fever</option>
                            <option value="pain 3">Ulcer</option>
                          </select>
                        </div>
                        <div class=" col-md-4 form-group mt-3">
                          <a href="how-to-treat.php" class="btn btn-primary" type="submit">Learn more</a>
                        </div>
                      </div>
                    </form>
                  </div><!-- Form -->
                  
                </div>
              
              </div>

            </div>
          </div>

        </div>

      </div>
    </section>

<?php require_once 'inc/footer.php'; ?>