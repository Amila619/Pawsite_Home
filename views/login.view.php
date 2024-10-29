<?php require("./views/partials/header.php")  ?>

<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-body p-4">
            <h3 class="text-center mb-4">Login</h3>
            <form>
              <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" required>
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Password" required>
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

<?php require("./views/partials/header.php")  ?>