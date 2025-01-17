<?php
  $active = 'active';
  require_once dirname(__DIR__) . '/app/Layouts/user-header.php';
?>

  <div class="pagetitle">
    <h1>Order History</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item"><a href="my-order.php">My Order</a></li>
        <li class="breadcrumb-item active">Order History</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section dashboard">

    <div class="card info-card revenue-card">

      <div class="card-body">
        <div class="card-header">
          <a href="my-order.php" class="btn btn-primary">Orders (0)</a>
          <a class="btn btn-light" href="#">Order History</a>
        </div>

          <table class="table table-borderless datatable">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Clinic</th>
                <th scope="col">Description</th>
                <th scope="col">Delivery</th>
                <th scope="col">Price</th>
                <th scope="col">Status</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row" style="vertical-align: middle;height:100px" colSpan="6" class="text-center text-secondary">No Records</th>
              </tr>
              <!-- <tr>
                <th scope="row">1</th>
                <td>Dr. Claire</td>
                <td><a href="#" class="text-primary">e-precription</a></td>
                <td>Sep 10</td>
                <td>10:00</td>
                <td><span class="badge bg-warning">pending</span></td>
              </tr> -->
            </tbody>
          </table>

      </div>

    </div>

  </section>

<?php  include dirname(__DIR__) . '/app/Layouts/user-footer.php'; ?>