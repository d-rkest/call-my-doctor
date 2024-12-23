<?php
  require_once 'inc/header.php';
?>

    <div class="pagetitle">
      <h1>Medical Report</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item"><a href="medical-report.php">Medical Report</a></li>
          <li class="breadcrumb-item active">Analyze Medical Report</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">
        
        <div class="col-xl-8">

          <div class="card">
            <div class="card-body p-4">
              <h5 class="card-header">Analyze Medical Report</h5>
              <div class="col-md-12 p-3 d-flex">
                <input type="text" class="form-control" placeholder="Medical Report" disabled>
                <a href="../uploads/<?= $_GET['medical_report'] ?>/doc.pdf" target="_blank" class="btn btn-primary">Download</a>
              </div>
                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                </div>
              
                <button type="submit" class="btn btn-primary m-3">Submit Response</button>
            </div>
          </div>

        </div>
      </div>
    </section>

<?php require_once 'inc/footer.php'; ?>