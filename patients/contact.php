<?php require_once 'inc/header.php'; ?>

    <div class="pagetitle">
      <h1>Locate a Medical Center</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Locate medical centre</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">

      <div class="row">
        <div class="col-lg-12">

        <div class="card">
            <div class="card-body p-4">
              <!-- <h5 class="card-title">Find a medical center nearby</h5> -->

              <!-- Pills Tabs -->
              <ul class="nav nav-pills " id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Blood Bank</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Genaral hospital</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Specialist hospital</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-pediatric-tab" data-bs-toggle="pill" data-bs-target="#pills-pediatric" type="button" role="tab" aria-controls="pills-pediatric" aria-selected="false">Pediatric hospital</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-medical-tab" data-bs-toggle="pill" data-bs-target="#pills-medical" type="button" role="tab" aria-controls="pills-medical" aria-selected="false">Medical Laboratory</button>
                </li>
              </ul>
              <div class="tab-content pt-2" id="myTabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="home-tab">
                <h5 class="card-title">Blood bank nearby</h5>
              
                <div class="mb-5" data-aos="fade-up" data-aos-delay="200">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31710.04363520885!2d3.3511308108398326!3d6.55252750000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b8d54fc05bec5%3A0x7ba98164c3b1cefd!2sLagos%20State%20Blood%20Transfusion%20Service%2C%20Gbagada%20Centre!5e0!3m2!1sen!2sng!4v1733816118571!5m2!1sen!2sng" width="800" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div><!-- End Google Maps -->
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="profile-tab">
                <h5 class="card-title">General hospital nearby</h5>
              
                <div class="mb-5" data-aos="fade-up" data-aos-delay="200">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31715.887929615285!2d3.5182223108398354!3d6.459943000000021!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103bf759fb7ebc61%3A0xb7bbd267ae31b97c!2sSouthern%20Gem%20Hospital%20VGC!5e0!3m2!1sen!2sng!4v1733816031025!5m2!1sen!2sng" width="800" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div><!-- End Google Maps -->
                </div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="contact-tab">
                <h5 class="card-title">Specialist hospital nearby (Cardio, physiathric etc)</h5>
              
                <div class="mb-5" data-aos="fade-up" data-aos-delay="200">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31715.893977870506!2d3.5452278108398376!3d6.459846499999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103bf96c6f812e7b%3A0xd2591c25b77f9012!2sChoice%20of%20kings%20Specialist%20hospital!5e0!3m2!1sen!2sng!4v1733815956583!5m2!1sen!2sng" width="800" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div><!-- End Google Maps -->
                </div>
                <div class="tab-pane fade" id="pills-pediatric" role="tabpanel" aria-labelledby="pediatric-tab">
                <h5 class="card-title">Pediatric hospital nearby</h5>
              
                <div class="mb-5" data-aos="fade-up" data-aos-delay="200">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31714.74647496075!2d3.572205210839833!3d6.478129300000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103bf9a3330dcd95%3A0xe47a9c1406c2c378!2sThe%20Pediatric%20Center%20Children%20Hospital%20-%20Greenland!5e0!3m2!1sen!2sng!4v1733815897791!5m2!1sen!2sng" width="800" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div><!-- End Google Maps -->
                </div>
                <div class="tab-pane fade" id="pills-medical" role="tabpanel" aria-labelledby="medical-tab">
                  <h5 class="card-title">Medical Laboratory nearby</h5>
                
                  <div class="mb-5" data-aos="fade-up" data-aos-delay="200">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.470955243158!2d3.5549738090871865!3d6.461861893502728!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103bf766313906b3%3A0xb53397af417be7ac!2sGrandville%20Medical%20Center!5e0!3m2!1sen!2sng!4v1733815768551!5m2!1sen!2sng" width="800" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                  </div><!-- End Google Maps -->
                </div>

              </div>
          </div>

      </div>

    </section>

<?php require_once 'inc/footer.php'; ?>