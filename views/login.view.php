<?php require('./views/partials/header.php') ?>
<div class="container d-flex align-items-center justify-content-center vh-100">
    <div class="col-md-6">
        <div class="card border-0 shadow-sm">
            <div class="card-body p-5">
                <h2 class="text-center mb-4">Login</h2>
                <form action="../../Pawsitive_Home/core/handle_login.php" method="post">
                    <div class="mb-3">
                        <input type="email" name="email" placeholder="Email" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <input type="password" name="password" placeholder="Password" class="form-control" required>
                    </div>
                    <div class="d-grid">
                        <input type="submit" value="Log In" class="btn btn-custom">
                    </div>
                </form>
                <div class="text-center mt-3">
                    <p>Don't have an account? <a href="/Pawsitive_Home/signup" class="text-decoration-none">Sign Up</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require('./views/partials/footer.php') ?>
