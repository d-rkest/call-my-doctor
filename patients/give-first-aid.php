<?php require_once 'inc/header.php'; ?>

    <div class="pagetitle">
      <h1>First Aid</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Give first aid</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Give First Aid</h5>

              <div class="col mt-3 text-center align-center">
                <div class="form-check form-check-inline">
                  <div class="col-12 mt-3 text-center align-center">
                    <img src="assets/img/male-icon.png" alt="body" width="120em">
                  </div>
                    <select name="department" id="department" class="form-select" required>
                      <option disabled selected>Select age...</option>
                      <option value="1">0-5</option>
                      <option value="2">6-12</option>
                    </select>
                    <div class="mt-3 text-center">
                      <button class="btn btn-primary" name="select_gender" type="submit">Proceed</button>
                    </div>
                </div>
                <div class="form-check form-check-inline">
                  <div class="col-12 mt-3 text-center align-center">
                    <img src="assets/img/female-icon.jpg" alt="body" width="120em">
                  </div>
                    <select name="department" id="department" class="form-select" required>
                      <option disabled selected>Select age...</option>
                      <option value="1">0-5</option>
                      <option value="2">6-12</option>
                    </select>
                    <div class="mt-3 text-center">
                      <button class="btn btn-primary" name="select_gender" type="submit">Proceed</button>
                    </div>
                </div>
              </div>

            </div>
          </div>

        </div>
      </div>
    </section>

<?php require_once 'inc/footer.php'; ?>