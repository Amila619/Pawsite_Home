<?php require("./views/partials/header.php") ?>
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
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Optional: shadow for better visibility */
    }
    .form-group {
        margin-bottom: 20px; /* Increase space between inputs */
    }
    .form-btn {
        text-align: center; /* Center the submit button */
    }
    @media (max-width: 600px) {
        .container {
            padding: 20px; /* Reduce padding on smaller screens */
        }
    }

    <?php
    //Form Validation

    $nameErr = $emailErr = $passwordErr = $repeatPasswordErr = "";
    $name = $email = "";

    
    if ($_SERVER["REQUEST_METHOD" === "POST"]){

        //Validate full name
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
    
    }

    ?>
</style>
<!-- Form Body-->
<div class="container">
    <form action="registration.php" method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
        <div class="form-group">
            <input type="text" name="fullname" placeholder="Full name" class="form-control" required>
        </div>
        <div class="form-group">
            <input type="email" name="email" placeholder="Email" class="form-control" required>
        </div>

        <div class="form-group">
            <input type="password" name="password" placeholder="Password" class="form-control" required>
        </div>

        <div class="form-group">
            <input type="password" name="repeat_password" placeholder="Repeat Password" class="form-control" required>
        </div>

        <div class="form-btn">
            <input type="submit" name="submit1" value="Register" class="btn btn-primary">
        </div>
    </form>
</div>
<?php require("./views/partials/footer.php") ?>
