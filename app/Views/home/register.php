<?php require_once dirname(__DIR__) . '/app/Layouts/home-header.php'; ?>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <!-- Tabs for User/Doctor Registration -->
                <ul class="nav nav-tabs" id="registrationTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="user-reg-tab" data-bs-toggle="tab" data-bs-target="#user-reg-form" type="button" role="tab" aria-controls="user-reg-form" aria-selected="true">User Registration</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="doctor-reg-tab" data-bs-toggle="tab" data-bs-target="#doctor-reg-form" type="button" role="tab" aria-controls="doctor-reg-form" aria-selected="false">Doctor Registration</button>
                    </li>
                </ul>

                <div class="tab-content" id="registrationTabContent">
                    <!-- User Registration Form -->
                    <div class="tab-pane fade show active p-4" id="user-reg-form" role="tabpanel" aria-labelledby="user-reg-tab">
                        <h3 class="text-center mb-4">User Registration</h3>
                        <form action="/register-user" method="POST">
                            <div class="row">
                                <div class="col mb-3">
                                    <label for="userFirstName" class="form-label">First Name</label>
                                    <input type="text" class="form-control" id="userFirstName" name="first_name" placeholder="Enter your first name" required>
                                </div>
                                <div class="col mb-3">
                                    <label for="userLastName" class="form-label">Last Name</label>
                                    <input type="text" class="form-control" id="userLastName" name="last_name" placeholder="Enter your last name" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-3">
                                    <label for="userEmail" class="form-label">Email Address</label>
                                    <input type="email" class="form-control" id="userEmail" name="email" placeholder="Enter your email" required>
                                </div>
                                <div class="col mb-3">
                                    <label for="userPhone" class="form-label">Phone Number</label>
                                    <input type="tel" class="form-control" id="userPhone" name="phone" placeholder="Enter your phone number" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="userPassword" class="form-label">Password</label>
                                <input type="password" class="form-control" id="userPassword" name="password" placeholder="Create a password" required>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Register</button>
                        </form>
                    </div>

                    <!-- Doctor Registration Form -->
                    <div class="tab-pane fade p-4" id="doctor-reg-form" role="tabpanel" aria-labelledby="doctor-reg-tab">
                        <h3 class="text-center mb-4">Doctor Registration</h3>
                        <form action="/register-doctor" method="POST">
                            <div class="row">
                                <div class="col mb-3">
                                    <label for="userFirstName" class="form-label">First Name</label>
                                    <input type="text" class="form-control" id="userFirstName" name="first_name" placeholder="Enter your first name" required>
                                </div>
                                <div class="col mb-3">
                                    <label for="userLastName" class="form-label">Last Name</label>
                                    <input type="text" class="form-control" id="userLastName" name="last_name" placeholder="Enter your last name" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-3">
                                    <label for="userEmail" class="form-label">Email Address</label>
                                    <input type="email" class="form-control" id="userEmail" name="email" placeholder="Enter your email" required>
                                </div>
                                <div class="col mb-3">
                                    <label for="userPhone" class="form-label">Phone Number</label>
                                    <input type="tel" class="form-control" id="userPhone" name="phone" placeholder="Enter your phone number" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="doctorPassword" class="form-label">Password</label>
                                <input type="password" class="form-control" id="doctorPassword" name="password" placeholder="Create a password" required>
                            </div>
                            <div class="row">
                                <div class="col mb-3">
                                    <label for="doctorSpecialization" class="form-label">Specialization</label>
                                    <input type="text" class="form-control" id="doctorSpecialization" name="specialization" placeholder="Enter your specialization (e.g., Cardiology)" required>
                                </div>
                                <div class="col mb-3">
                                    <label for="doctorLicense" class="form-label">License Number</label>
                                    <input type="text" class="form-control" id="doctorLicense" name="license" placeholder="Enter your license number" required>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php require_once dirname(__DIR__) . '/app/Layouts/home-footer.php'; ?>