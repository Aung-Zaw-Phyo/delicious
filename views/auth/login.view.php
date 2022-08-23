<?php require 'views/components/header.php' ?>

    <div class="aboutHeroSection">
        <div class="about h-100 w-100">
        <?php require "views/components/pagesErr.php" ?>
            <div class="container d-flex justify-content-center align-items-center h-100">
                <div class="col-12 text-center p-2">
                    <div class="fw-bold text-warning "> R E G I S T E R &nbsp; A N D &nbsp; L O G I N  </div>
                    <h1 class="text-light heroFont my-4">Login</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="py-5">
        <div class="container py-5">
            <h3 class="text-center">Login Form</h3>
            <div class="row g-3 mt-4 d-flex justify-content-center">
                <div class="col-lg-8 p-2">
                    <div class="card p-3 py-4 shadow">
                        <form action="login" method="POST" class=" ">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" id="email" placeholder="Your email" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" id="password" placeholder="Your password" required>
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </form>
                        <div class="d-flex justify-content-end mt-3">
                            <div>
                                If you don't have an accout! <a href="register">Register</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php require 'views/components/footer.php' ?>