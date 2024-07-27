<?php include 'inc/header.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-lg-4"></div>
        <div class="col-lg-6">
            <div class="card border-primary mb-3" style="max-width: 18rem;">
                <div class="card-header">Join Us Now</div>

                <div class="card-body">
                   
                           <!-- FORM -->
                    <form action="register.php" method="POST">

                        <div class="form-group form-inline">
                            <label>First Name:</label>
                            <input type="text" class="form-control" placeholder="Enter first name" name="firstname"
                                required>
                        </div>
                        <div class="form-group form-inline">
                            <label>Last Name:</label>
                            <input type="text" class="form-control" placeholder="Enter last name" name="lastname"
                                required>
                        </div>
                        <div class="form-group form-inline">
                            <label>E-mail Address:</label>
                            <input type="email" class="form-control" placeholder="Enter your e-mail" name="email"
                                required>
                        </div>

                        <div class="form-group form-inline">
                            <label>Password:</label> <small>must contain at least 8 characters!</small>
                            <input type="password" class="form-control" placeholder="Enter password!" name="password1"
                                required>
                        </div>
                        <div class="form-group form-inline">
                            <label>Confirm Password:</label>
                            <input type="password" class="form-control" placeholder="confirm your password"
                                name="password2" required>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary mt-3">SIGN UP!</button>
                        </div>

                    </form>
                </div>

            </div>
        </div>
        <div class="col-lg-2"></div>
    </div>
</div>