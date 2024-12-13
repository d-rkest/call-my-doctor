<?php 
  require_once 'inc/header.php';
  require_once 'Controllers/paymentCtrl.php';
?>

    <div class="pagetitle">
      <h1>Payment Records</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Payment</li>
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

                <div class="card-body pt-3">

                <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Patient</th>
                        <th scope="col">Service</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Payment status</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php if (empty($payment->fetch_payments())) { ?>
                        <tr>
                          <th scope="row" style="vertical-align: middle;height:100px" colSpan="6" class="text-center text-secondary">No record found</th>
                        </tr>
                      <?php
                        }  else { 
                          $payments = $payment->fetch_payments();
                          $num=1;
                          foreach ($payments as $payment) {     
                      ?>
                      <tr>
                        <th scope="row"><a href="#"><?=$num++;?></a></th>
                        <td><?= $payment['name'];?></td>
                        <td><?= $payment['service_id'];?></td>
                        <td>₦ <?= $payment['amount'];?></td>
                        <td>
                          <?php
                            switch ($payment['status']) {
                              case '0':
                                echo '<span class="btn btn-sm btn-warning">pending</span>';
                                break;
                              
                              default:
                              echo '<span class="btn btn-sm btn-danger">approved</span>';
                                break;
                            }
                          ?>  
                        </td>
                        <td>
                          <form action="Controllers/paymentCtrl.php" method="post">
                            <!-- <a href="Controllers/paymentCtrl.php?payment_id=<?=$payment['id']?>" class="btn btn-sm btn-primary"><i class="bi bi-eye"></i> view</a> -->
                            <a href="#" class="btn btn-sm btn-primary"><i class="bi bi-eye"></i> view</a>
                          </form>
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