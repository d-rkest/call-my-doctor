<?php
  require_once 'inc/header.php';
  require_once 'Controllers/doctorCtrl.php';
  // $doctor = $user->edit_service($_GET['service_id']);
?>
    <div class="pagetitle">
      <h1>Self Help</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item"><a href="services.php">Self Help</a></li>
          <li class="breadcrumb-item active">About Illness</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-xl-8">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Write about an illness and how to treat</h5>

              <!-- Vertical Form -->
              <form class="row g-3">
                <div class="col-12">
                  <label for="inputNanme4" class="form-label">Illness</label>
                  <input type="text" class="form-control" id="inputNanme4">
                </div>
                <div class="col-12">
                  <label for="about form-label">About illness</label>
                  <textarea class="form-control" id="about" style="height: 100px;"></textarea>
                </div>
                <div class="col-12 p-3">
                    <label for="illness">How to treat</label>
                    <div class="quill-editor-default" id="about">
                      <textarea class="form-control" placeholder="Address" id="illness" style="height: 100px;"></textarea>
                    </div>
                </div>
                <div class="text-center pt-5">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- Vertical Form -->

            </div>
          </div>

        </div>

      </div>
    </section>
<?php require_once 'inc/footer.php'; ?>