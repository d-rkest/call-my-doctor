<?php require_once 'inc/header.php'; ?>

    <div class="pagetitle">
      <h1>Self Help</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item"><a href="self-help.php">Self help</a></li>
          <li class="breadcrumb-item active">Learn about illness</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">

              <?php $treat = $user->treatment($_GET["illness"]); ?>
              
              <h5 class="card-title"><?=$treat["illness"];?> Overview</h5>
              <p><?=$treat["about"];?></p>

              <div class=" col-md-4 form-group mt-3">
                <!-- <button class="btn btn-primary" type="submit">See Guide</button> -->
                <a href="how-to-treat.php?illness=<?=$treat["id"];?>" class="btn btn-primary">How to treat</a>
              </div>
              
            </div>
          </div>

        </div>

      </div>
    </section>

<?php require_once 'inc/footer.php'; ?>