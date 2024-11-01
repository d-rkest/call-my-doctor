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
              <p>Please upload a copy of your medical report</p>

              <form action="" method="post" role="form" class="php-email-form">
                <div class="row">
                  <div class="col-md-4 form-group mt-3">
                    <select name="department" id="department" class="form-select" required="">
                      <option value="">Select type</option>
                      <option value="pain 1">Bloog group</option>
                      <option value="pain 2">Genotype</option>
                      <option value="pain 3">others</option>
                    </select>
                  </div>
                  <div class="col-md-4 form-group mt-3">
                    <input type="file" name="medical-report" id="">
                  </div>
                  <div class=" col-md-4 form-group mt-3">
                    <button class="btn btn-primary" type="submit">Submit report</button>
                  </div>
                </div>
              </form>
              
            </div>
          </div>

        </div>

      </div>
    </section>

<?php require_once 'inc/footer.php'; ?>