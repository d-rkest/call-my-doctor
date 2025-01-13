<?php
  require_once dirname(__DIR__) . '/app/Layouts/user-header.php';
?>
  
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

      <!-- Right side columns -->
      <div class="col-lg-8">
        <div class="card recent-sales overflow-auto">
            
          <div class="card-body">
            <h5 class="card-title">Patient Vitals <span>/Today</span></h5>

            <!-- Line Chart -->
            <div id="reportsChart"></div>

            <script>
              document.addEventListener("DOMContentLoaded", () => {
                new ApexCharts(document.querySelector("#reportsChart"), {
                  series: [{
                    name: 'Sales',
                    data: [31, 40, 28, 51, 42, 82, 56],
                  }, {
                    name: 'Revenue',
                    data: [11, 32, 45, 32, 34, 52, 41]
                  }, {
                    name: 'Customers',
                    data: [15, 11, 32, 18, 9, 24, 11]
                  }],
                  chart: {
                    height: 350,
                    type: 'area',
                    toolbar: {
                      show: false
                    },
                  },
                  markers: {
                    size: 4
                  },
                  colors: ['#4154f1', '#2eca6a', '#ff771d'],
                  fill: {
                    type: "gradient",
                    gradient: {
                      shadeIntensity: 1,
                      opacityFrom: 0.3,
                      opacityTo: 0.4,
                      stops: [0, 90, 100]
                    }
                  },
                  dataLabels: {
                    enabled: false
                  },
                  stroke: {
                    curve: 'smooth',
                    width: 2
                  },
                  xaxis: {
                    type: 'datetime',
                    categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z"]
                  },
                  tooltip: {
                    x: {
                      format: 'dd/MM/yy HH:mm'
                    },
                  }
                }).render();
              });
            </script>
            <!-- End Line Chart -->
          </div>

        </div>
      </div>
      
      <!-- Left side columns -->
      <div class="col-lg-4">

        <div class="card info-card revenue-card">
          <div class="card-body">
            <div class="card-header">
              <a href="medical-feedback.php" class="btn btn-primary">Feedback (0)</a>
            </div>
            <h5 class="card-title text-center">Upload Lab Result</h5>

            <div class="row m-3">
              <div class="d-flex align-items-center justify-content-center p-3 border">
                <a href="#" class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-upload"></i>
                </a>
                <!-- <span>drag item here</span> -->
              </div>
            </div>
            <div class="col mt-3 text-center">
              <input name="medical_report" class="form-control" type="file" id="formFile">
              <input type="hidden" name="user_id" value="">
              <button name="upload_report" class="btn btn-primary mt-3" type="submit">Make Request</button>
            </div>

          </div>
        </div>

      </div><!-- End Left side columns -->

    </div>
  </section>

<?php  include dirname(__DIR__) . '/app/Layouts/user-footer.php'; ?>