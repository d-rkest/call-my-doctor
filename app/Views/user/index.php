
  <div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section dashboard">
    <div class="row">

      <!-- Left side columns -->
      <div class="col-lg-12">

        <div class="card info-card revenue-card">
          <div class="card-body">
            <h5 class="card-title">Call a Doctor</h5>

            <div class="row px-5">
              <div class="col-12 d-flex align-items-center justify-content-center p-2">
                <a href="#" class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-phone-vibrate"></i>
                </a>
              </div>
              <div class="col-12 bg-light text-secondary text-center p-2" style="border-style: dotted; border-radius: .5em;"> { type of doctor - pain - location: country | state }</div>
            </div>

            <div class="row">
              <form class="row row-cols-lg-8 g-3 align-items-center">

                <div class="col-md-3">
                  <select class="form-select" id="inlineFormSelectPref">
                    <option selected disabled>Type of pain...</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                </div>
                <div class="col-md-3">
                  <select class="form-select" id="inlineFormSelectPref">
                    <option selected disabled>Type of doctor...</option>
                    <option value="1">General practitional</option>
                    <option value="2">Pediatrician</option>
                    <option value="3">Nurologist</option>
                  </select>
                </div>
                <div class="col-md-3">
                  <select class="form-select" id="inlineFormSelectPref" disabled>
                    <option selected>Location: Nigeria</option>
                  </select>
                </div>
                <div class="col-md-3">
                  <select class="form-select" id="inlineFormSelectPref" disabled>
                    <option selected>Location: Lagos</option>
                  </select>
                </div>

              </form>
            </div>

          </div>
        </div>

      </div><!-- End Left side columns -->

    </div>
  </section>