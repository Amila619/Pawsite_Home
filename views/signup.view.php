<?php require('./views/partials/header.php') ?>
<div class="container custom-m">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-0 shadow-sm">
                <div class="card-body p-5">
                    <h2 class="text-center mb-4">Sign Up</h2>
                    <form action="../../Pawsitive_Home/core/handle_signup.php" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="first_name" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="first_name" name="first_name" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="last_name" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="last_name" name="last_name" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="phone_number" class="form-label">Phone Number</label>
                            <input type="tel" class="form-control" id="phone_number" name="phone_number" required>
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control" id="address" name="address" required>
                        </div>
                        <div class="mb-3">
                            <label for="zip_code" class="form-label">Zip Code</label>
                            <input type="text" class="form-control" id="zip_code" name="zip_code" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <div class="mb-3">
                            <label for="repeat_password" class="form-label">Repeat Password</label>
                            <input type="password" class="form-control" id="repeat_password" name="repeat_password" required>
                        </div>
                        <div class="mb-3">
                            <img id="upload_user_dp" src="./public/images/upload_users/blank_user.png" alt="User Image" style="width: 80px; height: 80px; border: 2px solid #ccc;">
                        </div>
                        <div class="mb-3">
                            <label for="u_image" class="form-label">Upload Image</label>
                            <input type="file" class="form-control" id="u_image" name="u_image" accept="image/*" onchange="changeImg(event)">
                        </div>
                        <button type="submit" class="btn btn-custom w-100">Sign Up</button>
                    </form>
                    <div class="text-center mt-3">
                        <p>Already have an account? <a href="/Pawsitive_Home/login" class="text-decoration-none">Log In</a></p>
                    </div>
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
<?php require('./views/partials/footer.php') ?>
