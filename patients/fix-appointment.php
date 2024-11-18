<?php require_once 'inc/header.php'; ?>

    <div class="pagetitle">
      <h1>New Appointment</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item"><a href="call-a-doctor.php">Call A Doctor</a></li>
          <li class="breadcrumb-item active">Appointment</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">

        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              
              <h5 class="card-title">New Appointment</h5>
              <!-- <p>This is an examle page with no contrnt. You can use it as a starter for your custom pages.</p> -->

              <form action="forms/appointment.php" method="post" role="form" class="php-email-form">
                <div class="row">
                  <div class="col-md-4 form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Dr. Morphie" required="" disabled>
                  </div>
                  <div class="col-md-4 form-group mt-3 mt-md-0">
                    <select name="doctor" id="doctor" class="form-select" required="">
                      <option value="">Select Service</option>
                      <option value="Doctor 1">service 1</option>
                      <option value="Doctor 2">service 2</option>
                      <option value="Doctor 3">service 3</option>
                    </select>
                  </div>
                  <div class="col-md-4 form-group mt-3 mt-md-0">
                    <input type="text" class="form-control" name="phone" id="phone" placeholder="Remark" required="">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4 form-group mt-3">
                    <input type="date" name="date" class="form-control datepicker" id="date" placeholder="Appointment Date" required="">
                  </div>
                  <div class="col-md-4 form-group mt-3">
                    <input type="time" name="date" class="form-control datepicker" id="date" placeholder="Appointment Time" required="">
                  </div>
                </div>

                <div class="mt-3">
                  <button class="btn btn-primary" type="submit">Book an Appointment</button>
                </div>
              </form>
              
            </div>
          </div>

        </div>
        
      </div>
    </section>

<?php require_once 'inc/footer.php'; ?>