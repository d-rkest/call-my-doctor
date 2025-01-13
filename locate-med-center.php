<?php
  require_once 'app/Layouts/home-header.php';
?>


    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-10">
              
              <div class="card">
                <div class="card-header">
                  <h1>Locate Medical Center</h1>
                </div>
                <div class="card-body">
                  <div class="row align-item-center">
                    <div class="col-md-3">
                      <div class="list-group">
                          <button class="list-group-item list-group-item-action menu-button" data-topic="blood">Blood Bank</button>
                          <button class="list-group-item list-group-item-action menu-button" data-topic="gen">General Hospital</button>
                          <button class="list-group-item list-group-item-action menu-button" data-topic="specialist">Specialist Hospital</button>
                          <button class="list-group-item list-group-item-action menu-button" data-topic="pediac">Pediatric Hospital</button>
                          <button class="list-group-item list-group-item-action menu-button" data-topic="lab">Medical Labouratory</button>
                      </div>
                    </div>
                    <div class="col-md-6 border">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126846.2806482444!2d3.3984595489834883!3d6.528470617665876!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103bf9cb9fc44de9%3A0x9f9b1cfcea39d4a3!2sSYNLAB%20NIGERIA%20MCC%20AJAH!5e0!3m2!1sen!2sng!4v1736633015593!5m2!1sen!2sng" width="450" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>  
                    </div>
                    <div class="col-md-3">
                      <h4>Review</h4>
                      <ul id="instructions" class="list-group">
                          <li class="list-group-item">Distance: 25km</li>
                          <li class="list-group-item">Time: 1 hour</li>
                          <li class="list-group-item">Address: Ajah Road</li>
                          <li class="list-group-item">Start rating: <i class="bi bi-star"></i></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Page Title -->

<?php  require_once 'app/Layouts/home-footer.php'; ?>