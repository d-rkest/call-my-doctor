<?php 
  require_once 'inc/header.php'; 
  require_once 'Controllers/dashboardCtrl.php';
?>

    <div class="pagetitle">
      <h1>Pains</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Pains</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Main -->
        <div class="col-lg-12">
          <div class="row">
          
            <!-- Services -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">

                <div class="card-body">
              
                <div class="modal fade" id="verticalycentered" tabindex="-1">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title">Create new</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                                  
                        <!-- No Labels Form -->
                        <form class="row g-3" method="POST" action="Controllers/serviceCtrl.php">
                          <div class="col-md-6">
                            <input type="text" name="name" class="form-control" placeholder="Service" required>
                          </div>
                          <div class="col-md-6">
                            <input type="text" name="amount" class="form-control" placeholder="Amount" required>
                          </div>
                          <div class="text-center">
                            <button type="submit" name="create_service" class="btn btn-primary">Submit</button>
                            <button type="reset" class="btn btn-secondary">Reset</button>
                          </div>
                        </form><!-- End No Labels Form -->

                      </div>
                    </div>
                  </div>
                </div><!-- End Vertically centered Modal-->

                <div class="d-flex justify-content-between">
                  <h5 class="card-title">Services</h5>
                  <span class="p-3"><a href="#" class="btn btn-primary fw-bold" data-bs-toggle="modal" data-bs-target="#verticalycentered">+ Add</a></span>
                </div>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Region</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php if (empty($pain->fetch_pains())) { ?>
                        <tr>
                          <th scope="row" style="vertical-align: middle;height:100px" colSpan="5" class="text-center text-secondary">No record found</th>
                        </tr>
                      <?php
                        }  else { 
                          $pains = $pain->fetch_pains();
                          $num=1;
                          foreach ($pains as $pain) {     
                      ?>
                      <tr>
                        <th scope="row"><a href="#"><?=$num++;?></a></th>
                        <td><?= $pain['region'];?></td>
                        <td>
                          <?php
                            switch ($pain['status']) {
                              case '1':
                                echo '<span class="badge bg-success">active</span>';
                                break;
                              
                              default:
                              echo '<span class="badge bg-danger">not active</span>';
                                break;
                            }
                          ?>                          
                        </td>
                        <td>
                        <!-- Modal -->
                        <div class="modal fade" id="<?=$pain["pain_id"];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Delete Doctor</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                Are you sure you want to delete <?=$pain['region'];?>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <a href="Controllers/painCtrl.php?delete_pain=<?=$pain["id"];?>" class="btn btn-danger">Delete</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <a href="edit_service.php?pain_id=<?=$pain['pain_id']?>" class="btn btn-sm btn-primary"><i class="bi bi-pen"></i> edit</a>
                        <button type="button" class="badge bg-danger" data-bs-toggle="modal" data-bs-target="#<?=$pain["id"];?>"><i class="bi bi-trash"></i>delete</button>
                      </td>
                      </tr>
                      <?php
                          }
                        }
                      ?>
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Recent Sales -->

          </div>
        </div><!-- End Main -->

      </div>
    </section>

<?php require_once 'inc/footer.php'; ?>