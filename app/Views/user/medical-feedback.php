<?php
  $active = 'active';
  require_once dirname(__DIR__) . '/app/Layouts/user-header.php';
?>

  <div class="pagetitle">
    <h1>Medical Feedback</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item"><a href="medical-report.php">Medical Report</a></li>
        <li class="breadcrumb-item active">Feedback</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section dashboard">

    <div class="card info-card revenue-card">

      <div class="card-body">
        <div class="card-header">
          Feedbacks from specialists
        </div>

          <table class="table table-borderless datatable">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Specialist</th>
                <th scope="col">Comment</th>
                <th scope="col">Attachment</th>
                <th scope="col">Status</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row" style="vertical-align: middle;height:100px" colSpan="5" class="text-center text-secondary">No Records</th>
              </tr>
              <!-- <tr>
                <th scope="row">1</th>
                <td>Dr. Claire</td>
                <td><a href="#" class="text-primary">e-precription</a></td>
                <td>Sep 10</td>
                <td>10:00</td>
                <td><span class="badge bg-warning">pending</span></td>
              </tr> -->
            </tbody>
          </table>

      </div>

    </div>

  </section>

<?php  include dirname(__DIR__) . '/app/Layouts/user-footer.php'; ?>