<?php include 'inc/header.php' ?>

<div class="container my-5">
    <div class="row">

        <div class="col-lg-4"></div>

        <div class="col-lg-6">
            <div class="card border-primary mb-3" style="max-width: 18rem;">
                <div class="card-header">Enter Creadentials</div>

                <div class="card-body">
                                          <!-- login form  -->
                    <form action="login_handler.php" method="POST">

                        <div class="form-group form-inline">
                            <label>Enter e-mail:</label>
                            <input type="email" class="form-control" placeholder="Enter Username!" name="email" required>
                        </div>

                        <div class="form-group form-inline">
                            <label>Password:</label>
                            <input type="password" class="form-control" placeholder="Enter password!" name="password" required>
                        </div>

                        <div>
                            <button class="btn btn-primary mt-3" type="submit"> SUBMIT </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-2"> </div>
    </div>
</div>
</body>

</html>