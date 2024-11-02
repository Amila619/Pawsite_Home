<?php require("./views/partials/header.php")  ?>

<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-body p-4">
            <h3 class="text-center mb-4">Login</h3>
            <form action="../../Pawsitive_Home/core/handle_login.php" method="POST">
              <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" class="form-control" id="username" placeholder="Username" required>
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
              </div>
              <button type="submit" class="btn btn-primary w-100">Login</button>
            </form>
            <div class="text-center mt-3">
              <a href="#">Forgot password?</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php require("./views/partials/footer.php")  ?>