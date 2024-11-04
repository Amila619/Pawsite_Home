<<<<<<< HEAD
<?php 
require("./views/partials/header.php");

// Initialize variables to store error messages
$nameErr = $emailErr = $passwordErr = $repeatPasswordErr = "";
$name = $email = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Validate Full Name
    if (empty(trim($_POST['fullname']))) {
        $nameErr = "Full name is required.";
    } else {
        $name = trim($_POST['fullname']);
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $nameErr = "Only letters and white space allowed.";
        }
    }

    // Validate Email
    if (empty(trim($_POST['email']))) {
        $emailErr = "Email is required.";
    } else {
        $email = trim($_POST['email']);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format.";
        }
    }

    // Validate Password
    if (empty(trim($_POST['password']))) {
        $passwordErr = "Password is required.";
    } elseif (strlen(trim($_POST['password'])) < 6) {
        $passwordErr = "Password must be at least 6 characters.";
    }

    // Validate Repeat Password
    if (empty(trim($_POST['repeat_password']))) {
        $repeatPasswordErr = "Please repeat your password.";
    } else {
        $repeatPassword = trim($_POST['repeat_password']);
        if ($repeatPassword !== trim($_POST['password'])) {
            $repeatPasswordErr = "Passwords do not match.";
        }
    }

    // If no errors, you can proceed with further processing (like saving to a database)
    if (empty($nameErr) && empty($emailErr) && empty($passwordErr) && empty($repeatPasswordErr)) {
        // Here you would typically save the user data to the database
        // For this example, let's assume registration is successful
        echo "<script>alert('Registration successful!');</script>";
        // Optionally reset the form fields
        $name = $email = "";
    }
}
?>

<style>
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh; 
        margin: 0;
        background-color: #f0f0f0; 
    }
    .container {
        max-width: 600px; 
        width: 90%; 
        padding: 30px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #fff; 
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .form-group {
        margin-bottom: 20px; 
    }
    .form-btn {
        text-align: center; 
    }
    .error-message {
        color: red; 
        font-size: 0.9em; 
    }
    @media (max-width: 600px) {
        .container {
            padding: 20px; 
        }
    }
</style>

<!-- Form Body-->
<div class="container">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="form-group">
            <input type="text" name="fullname" placeholder="Full name" class="form-control" required value="<?php echo htmlspecialchars($name); ?>">
            <span class="error-message"><?php echo $nameErr; ?></span>
        </div>
        <div class="form-group">
            <input type="email" name="email" placeholder="Email" class="form-control" required value="<?php echo htmlspecialchars($email); ?>">
            <span class="error-message"><?php echo $emailErr; ?></span>
        </div>

        <div class="form-group">
            <input type="password" name="password" placeholder="Password" class="form-control" required>
            <span class="error-message"><?php echo $passwordErr; ?></span>
        </div>

        <div class="form-group">
            <input type="password" name="repeat_password" placeholder="Repeat Password" class="form-control" required>
            <span class="error-message"><?php echo $repeatPasswordErr; ?></span>
        </div>

        <div class="form-btn">
            <input type="submit" name="submit1" value="Register" class="btn btn-primary">
        </div>
    </form>
</div>

<?php require("./views/partials/footer.php") ?>
=======
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
>>>>>>> Amila
