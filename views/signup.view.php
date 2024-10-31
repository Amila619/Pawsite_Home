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
        max-width: 600px; /* Increase maximum width */
        width: 90%; /* Responsive width */
        padding: 30px; /* Increase padding */
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #fff; /* White background for form */
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
</style>
<div class="container">
    <form action="registration.php" method="post">
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
