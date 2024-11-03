<?php require('./views/partials/header.php') ?>
<div class="container custom-m">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-0 shadow-sm">
                <div class="card-body p-5">
                    <h2 class="text-center mb-4">User Profile</h2>
                    <div class="text-center mb-3">
                        <img src="<?php echo $current_image; ?>" alt="User Image" style="width: 100px; height: 100px; border-radius: 50%; border: 2px solid #ccc;">
                    </div>
                    <div class="mb-3">
                        <h5>Username:</h5>
                        <p><?php echo $current_username; ?></p>
                    </div>
                    <div class="mb-3">
                        <h5>Email:</h5>
                        <p><?php echo $current_email; ?></p>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <h5>First Name:</h5>
                            <p><?php echo $current_first_name; ?></p>
                        </div>
                        <div class="col-md-6 mb-3">
                            <h5>Last Name:</h5>
                            <p><?php echo $current_last_name; ?></p>
                        </div>
                    </div>
                    <div class="mb-3">
                        <h5>Phone Number:</h5>
                        <p><?php echo $current_phone; ?></p>
                    </div>
                    <div class="mb-3">
                        <h5>Address:</h5>
                        <p><?php echo $current_address; ?></p>
                    </div>
                    <div class="mb-3">
                        <h5>Zip Code:</h5>
                        <p><?php echo $current_zip_code; ?></p>
                    </div>
                    <div class="text-center mt-4">
                        <a href="/Pawsitive_Home/edit_profile.php" class="btn btn-custom">Edit Profile</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require('./views/partials/footer.php') ?>
