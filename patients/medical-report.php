<?php require_once 'inc/header.php'; ?>

    <div class="pagetitle">
      <h1>Medical Report</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Medical report</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              
              <h5 class="card-title">Submit Medical Report</h5>
              <!-- <p>Please upload a copy of your medical report</p> -->

              <form action="" method="post" role="form" class="php-email-form">
                <div class="row">
                  <div class="col-md-4 form-group mt-3">
                    <select name="department" id="department" class="form-select" required="">
                      <option value="">Select type</option>
                      <option value="pain 1">Bloog group</option>
                      <option value="pain 2">Genotype</option>
                      <option value="pain 3">others</option>
                    </select>
                  </div>
                  <div class="col-md-4 form-group mt-3">
                    <input type="file" name="medical-report" id="">
                  </div>
                  <div class=" col-md-4 form-group mt-3">
                    <button class="btn btn-primary" type="submit">Upload</button>
                  </div>
                </div>
              </form>
              
            </div>

            
            <!-- Appointments -->
            <div class="card recent-sales overflow-auto">

              <div class="card-body">
                <h5 class="card-title">Feedbacks</h5>

                <table class="table table-borderless datatable">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Doctor</th>
                      <th scope="col">Description</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php if (empty($user->fetch_feedback($_SESSION['user_id']))) { ?>
                      <tr>
                        <th scope="row" style="vertical-align: middle;height:100px" colSpan="5" class="text-center text-secondary">No record found</th>
                      </tr>
                    <?php
                      }  else { 
                        $feedbacks = $user->fetch_feedback($_SESSION['user_id']);
                        $num=1;
                        foreach ($feedbacks as $feedback) {     
                    ?>
                    <tr>
                      <th scope="row"><a href="#"><?= $num; ?></a></th>
                      <td><?= $feedback['fullname'];?></td>
                      <td><a href="#" class="text-primary"><?= $feedback['feedback'] ?></a></td>
                      <td><a href="#" class="btn btn-sm btn-primary"><i class="bi bi-eye"></i> view</a></td>
                    </tr>
                    <?php
                        }
                      }
                    ?>
                  </tbody>
                </table>

              </div>

            </div>

          </div>


        </div>

      </div>
    </section>

<?php require_once 'inc/footer.php'; ?>