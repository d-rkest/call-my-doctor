<?php
  $active = 'active';
  require_once dirname(__DIR__) . '/app/Layouts/user-header.php';
?>

  <div class="pagetitle">
    <h1>Buy Prescription</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active">Buy Prescription</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section dashboard">
    <div class="row">

      <!-- Left side columns -->
      <div class="col-lg-4">

        <div class="card info-card revenue-card">
          <div class="card-body">
            <h5 class="card-title text-center">Upload prescription</h5>

            <div class="row m-3">
              <div class="d-flex align-items-center justify-content-center p-3 border">
                <a href="#" class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-upload"></i>
                </a>
                <!-- <span>drag item here</span> -->
              </div>
              
            <div class="col mt-3 text-center">
              <input name="medical_report" class="form-control" type="file" id="formFile">
              <input type="hidden" name="user_id" value="">
              <button name="upload_report" class="btn btn-primary mt-3" type="submit">Make Request</button>
            </div>
            </div>

          </div>
        </div>

      </div><!-- End Left side columns -->

      <!-- Right side columns -->
      <div class="col-lg-8">
        <div class="card recent-sales overflow-auto">

          <div class="card-body">
            <div class="card-header">
              Make Purchase
            </div>
            <div class="row pt-4">
            <div class="col-9">
              <select class="form-select" id="inlineFormSelectPref">
                <option selected disabled>Type of illness</option>
                <option value="1">Malaria</option>
                <option value="2">more...</option>
              </select>
            </div>
            <div class="col-3">
              <button type="submit" class="btn btn-primary">View Drugs</button>
            </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

<?php  include dirname(__DIR__) . '/app/Layouts/user-footer.php'; ?>