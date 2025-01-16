<?php
  require_once 'app/Layouts/home-header.php';
  
  require_once __DIR__ . '/vendor/autoload.php';

?>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <!-- Tabs for User/Doctor -->
                <ul class="nav nav-tabs" id="loginTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="user-tab" data-bs-toggle="tab" data-bs-target="#user-form" type="button" role="tab" aria-controls="user-form" aria-selected="true">User Login</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="doctor-tab" data-bs-toggle="tab" data-bs-target="#doctor-form" type="button" role="tab" aria-controls="doctor-form" aria-selected="false">Doctor Login</button>
                    </li>
                </ul>

                <div class="tab-content" id="loginTabContent">
                    <!-- User Login Form -->
                    <div class="tab-pane fade show active p-4" id="user-form" role="tabpanel" aria-labelledby="user-tab">
                        <h3 class="text-center mb-4">User Login</h3>
                        <form action="/login-user" method="POST">
                            <div class="mb-3">
                                <label for="userEmail" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="userEmail" name="email" placeholder="Enter your email" required>
                            </div>
                            <div class="mb-3">
                                <label for="userPassword" class="form-label">Password</label>
                                <input type="password" class="form-control" id="userPassword" name="password" placeholder="Enter your password" required>
                            </div>
                            <button type="submit" class="btn btn-primary w-100 mb-3">Login</button>
                            <div class="text-center">
                              Don't have an account? <a href="register.php" class="link">Create account</a>
                            </div>
                            <div class="border-top my-2 p-2 text-center">or</div> 
                            <button type="button" class="btn btn-outline-danger w-100">
                                <i class="bi bi-google"></i> Login with Google
                            </button>
                        </form>
                    </div>

                    <!-- Doctor Login Form -->
                    <div class="tab-pane fade p-4" id="doctor-form" role="tabpanel" aria-labelledby="doctor-tab">
                        <h3 class="text-center mb-4">Doctor Login</h3>
                        <form action="/login-doctor" method="POST">
                            <div class="mb-3">
                                <label for="doctorEmail" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="doctorEmail" name="email" placeholder="Enter your email" required>
                            </div>
                            <div class="mb-3">
                                <label for="doctorPassword" class="form-label">Password</label>
                                <input type="password" class="form-control" id="doctorPassword" name="password" placeholder="Enter your password" required>
                            </div>
                            <button type="submit" class="btn btn-primary w-100 mb-3">Login</button>
                            <button type="button" class="btn btn-outline-danger w-100">
                                <a href="<?= $url ?>"><i class="bi bi-google"></i> Login with Google</a>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



<?php  require_once 'app/Layouts/home-footer.php'; ?>