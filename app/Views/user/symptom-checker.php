<?php
  require_once dirname(__DIR__) . '/app/Layouts/user-header.php';
?>

<div class="pagetitle">
      <h1>Symptom Checker</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Symptom checker</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <!-- Right side columns -->
        <div class="col-lg-12">
          <div class="card recent-sales overflow-auto">

            <div class="card-body">
              <div class="card-header">
                Make Purchase
              </div>
              <div class="row pt-4">
                <div class="col-9">
                  <select class="form-select" id="inlineFormSelectPref">
                    <option selected>Type of illness</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
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