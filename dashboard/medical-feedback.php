<?php
  require_once dirname(__DIR__) . '/app/Layouts/dashboard-header.php';
?>

<?php
  // require_once 'inc/header.php';
  // require_once '../Controllers/doctorCtrl.php';
?>

    <div class="pagetitle">
      <h1>Analyze Medical Report</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Medical Feedback</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">
        
        <div class="col-xl-8">

          <div class="card">
            <div class="card-body p-4">
              <div class="card-header">
                <span class="mx-4">Download Lab Result</span>
                <a href="../uploads/doc.pdf" target="_blank" class="btn btn-sm rounded-pill btn-primary">
                  <i class="bi bi-download"></i> Download
                </a>
              </div>
              <div class="col-md-12 p-2 d-flex">
                <input type="text" class="form-control" placeholder="Title">
              </div>
              <div class="col-md-12 p-2">
                <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
              </div>
              
                <button type="submit" class="btn btn-primary m-3 text-center">Give Feedback</button>
            </div>
          </div>

        </div>
      </div>
    </section>
<?php  include dirname(__DIR__) . '/app/Layouts/dashboard-footer.php'; ?>