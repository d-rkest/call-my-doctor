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
                  <h1>Give First Aid</h1>
                </div>
                <div class="card-body">
                  <div class="row align-item-center">
                    <div class="col-md-3">
                      <div class="list-group">
                          <button class="list-group-item list-group-item-action menu-button" data-topic="cuts">Cuts, Scrapes or Scratches</button>
                          <button class="list-group-item list-group-item-action menu-button" data-topic="burns">Burns</button>
                          <button class="list-group-item list-group-item-action menu-button" data-topic="shock">Shock</button>
                          <button class="list-group-item list-group-item-action menu-button" data-topic="cpr">C.P.R.</button>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <iframe id="video" src="https://www.youtube.com/embed/placeholder" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div class="col-md-3">
                      <h4>Step-by-Step Instructions</h4>
                      <ul id="instructions" class="list-group">
                          <li class="list-group-item">Select a topic from the menu to view instructions.</li>
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