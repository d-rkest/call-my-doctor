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

        <!-- Appointments -->
        <div class="col-12">
          <div class="card recent-sales overflow-auto">

            <div class="card-body">
              <h5 class="card-title">Activities</h5>

              <table class="table table-borderless datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Doctor</th>
                    <th scope="col">Description</th>
                    <th scope="col">Date</th>
                    <th scope="col">Status</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row"><a href="#">#2457</a></th>
                    <td>Dr. Brown</td>
                    <td><a href="#" class="text-primary">At praesentium minu</a></td>
                    <td>28-10-2024 10:00am</td>
                    <td><span class="badge bg-warning">panding</span></td>
                  </tr>
                  <tr>
                    <th scope="row"><a href="#">#2147</a></th>
                    <td>Dr. Shun</td>
                    <td><a href="#" class="text-primary">Blanditiis dolor omnis similique</a></td>
                    <td>21-10-2024 10:00am</td>
                    <td><span class="badge bg-success">done</span></td>
                  </tr>
                  <tr>
                    <th scope="row"><a href="#">#2049</a></th>
                    <td>Ashleigh Langosh</td>
                    <td><a href="#" class="text-primary">At recusandae consectetur</a></td>
                    <td>05-10-2024 10:00am</td>
                    <td><span class="badge bg-danger">missed</span></td>
                  </tr>
                </tbody>
              </table>

            </div>

          </div>
        </div><!-- End appointments -->
        
      </div>
    </section>

<?php require_once 'inc/footer.php'; ?>