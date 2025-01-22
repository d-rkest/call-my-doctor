<?php
  require_once dirname(__DIR__) . '/app/Layouts/user-header.php';
?>

  <div class="pagetitle">
    <h1>Call an Ambulance</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active">Call an Ambulance</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section dashboard">

    <!-- Locate medical center -->
    <div class="col-12">
      <div class="card recent-sales overflow-auto">

        <div class="card-body">
          <h5 class="card-title"></h5>

          <div class="row p-3">
            <div class="col-md-4">
              <button class="btn btn-primary">Refresh Location <? $dir = dirname(__DIR__); echo $dir; ?></button>
              <p class="mt-5">Phone 1: +234 111 1121 12</p>
              <p class="pt-1">Phone 2: +234 111 1121 12</p>
              <button class="badge badge-sm bg-success mt-5">
              <i class="bi bi-phone"></i>Call &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              </button>
              <button class="badge badge-sm bg-success  pt-1">
                <i class="bi bi-envelope"></i>Message
              </button>
            </div>
            <div class="col-md-8">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126846.2806482444!2d3.3984595489834883!3d6.528470617665876!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103bf9cb9fc44de9%3A0x9f9b1cfcea39d4a3!2sSYNLAB%20NIGERIA%20MCC%20AJAH!5e0!3m2!1sen!2sng!4v1736633015593!5m2!1sen!2sng" width="450" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>  
            </div>
          </div>

        </div>

      </div>
    </div>

  </section>

<?php  include dirname(__DIR__) . '/app/Layouts/user-footer.php'; ?>