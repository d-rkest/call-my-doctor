<?php require_once 'inc/header.php'; ?>

    <div class="pagetitle">
      <h1>Buy Perscription</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Buy perscription</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">

            <!-- Top Selling -->
            <div class="col-12">
              <div class="card top-selling overflow-auto">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Malaria</a></li>
                    <li><a class="dropdown-item" href="#">Diarrhea</a></li>
                    <li><a class="dropdown-item" href="#">Cold</a></li>
                  </ul>
                </div>

                <div class="card-body pb-0">
                  <h5 class="card-title">Perscription</h5>

                  <table class="table table-borderless">
                    <thead>
                      <tr>
                        <th scope="col">Preview</th>
                        <th scope="col">Product</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Add to cart</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row"><a href="#"><img src="assets/img/artemether.png" alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold" data-bs-toggle="modal" data-bs-target="#verticalycentered">Artemether & Lumefantrine</a></td>
                        <td>₦4,000</td>
                        <td class="fw-bold">0</td>
                        <td><a href="#" class="text-success h4"><i class="bi bi-cart-plus"></i></a></td>
                        
                          <div class="modal fade" id="verticalycentered" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title">condition for using drug</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                  Non omnis incidunt qui sed occaecati magni asperiores est mollitia. Soluta at et reprehenderit. Placeat autem numquam et fuga numquam. Tempora in facere consequatur sit dolor ipsum. Consequatur nemo amet incidunt est facilis. Dolorem neque recusandae quo sit molestias sint dignissimos.
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                              </div>
                            </div>
                          </div><!-- End Vertically centered Modal-->

                      </tr>
                      <tr>
                        <th scope="row"><a href="#"><img src="assets/img/artemether.png" alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold">Diclofenac</a></td>
                        <td>₦1,200</td>
                        <td class="fw-bold">1</td>
                        <td><a href="#" class="text-success h4"><i class="bi bi-cart-plus"></i></a></td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#"><img src="assets/img/artemether.png" alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold">Blood tonic</a></td>
                        <td>₦6,800</td>
                        <td class="fw-bold">1</td>
                        <td><a href="#" class="text-success h4"><i class="bi bi-cart-plus"></i></a></td>
                      </tr>
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Top Selling -->

          </div>
        </div><!-- End Left side columns -->

      </div>
    </section>

<?php require_once 'inc/footer.php'; ?>