<?php require("./views/partials/header.php")  ?>

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-body p-4">
          <h3 class="text-center mb-4">Sign Up</h3>
          <form action="../../Pawsitive_Home/core/handle_signup.php" method="POST">
            <div class="mb-3">
              <label for="username" class="form-label">Username</label>
              <input type="text" class="form-control" id="username" placeholder="Enter username" required>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email address</label>
              <input type="email" class="form-control" id="email" placeholder="Enter email" required>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="first_name" class="form-label">First Name</label>
                <input type="text" class="form-control" id="first_name" placeholder="Enter first name" required>
              </div>
              <div class="col-md-6 mb-3">
                <label for="last_name" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="last_name" placeholder="Enter last name" required>
              </div>
            </div>
            <div class="mb-3">
              <label for="phone_number" class="form-label">Phone Number</label>
              <input type="tel" class="form-control" id="phone_number" placeholder="Enter phone number" required>
            </div>
            <div class="mb-3">
              <label for="address" class="form-label">Address</label>
              <input type="text" class="form-control" id="address" placeholder="Enter address" required>
            </div>
            <div class="mb-3">
              <label for="zip_code" class="form-label">Zip Code</label>
              <input type="text" class="form-control" id="zip_code" placeholder="Enter zip code" required>
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="password" placeholder="Enter password" required>
            </div>
            <div class="mb-3">
              <label for="repeat_password" class="form-label">Repeat Password</label>
              <input type="password" class="form-control" id="repeat_password" placeholder="Repeat password" required>
            </div>
            <div class="mb-3">
              <img id="upload_user_dp" src="./public/images/upload_users/blank_user.png" alt="User Image" style="max-width: 80px; height: auto; border-radius: 50%; border: 2px solid #ccc;">
            </div>
            <div class="mb-3">
              <label for="u_image" class="form-label">Upload Image</label>
              <input type="file" class="form-control" id="u_image" name="u_image" accept="image/*" onchange="changeImg(event)">
            </div>
            <button type="submit" class="btn btn-primary w-100">Sign Up</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
  let img = document.getElementById('upload_user_dp');

  function changeImg(event) {
    let imgFile = event.target.files[0];
    let reader = new FileReader();

    img.title = imgFile.name;
    reader.onload = function(event) {
      img.src = event.target.result;
    };

    reader.readAsDataURL(imgFile);
  }
</script>
<?php require("./views/partials/footer.php")  ?>