<?php require("./views/partials/header.php")  ?>
<div class="container">
    <!-- Adopt Cats Section -->
    <div class="container my-5">
        <div class="row">
            <div class="col-md-3">
                <div class="card shadow-sm">
                    <img src="./public/images/image_gallery/rottweiler.jpg" alt="Rottweiler" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Rottweiler</h5>
                        <p class="card-text">
                            Rottweilers are muscular dogs with a black coat and rust markings. They are strong, loyal, and protective.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow-sm">
                    <img src="./public/images/image_gallery/British-Shorthair.jpg" alt="British Shorthair" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">British Shorthair</h5>
                        <p class="card-text">
                            Calm and easygoing, British Shorthairs adapt well to families. They have dense coats and a rounded face.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow-sm">
                    <img src="./public/images/image_gallery/american-bull-dog.jpg" alt="American Bull Dog" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">American Bull Dog</h5>
                        <p class="card-text">
                            American Bulldogs are strong, stocky, and protective. Males are larger and more muscular than females.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow-sm">
                    <img src="./public/images/image_gallery/Persian-Cat.jpg" alt="Persian Cat" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Persian Cat</h5>
                        <p class="card-text">
                            Persian cats have a distinctive flat face, thick fur, and a calm demeanor. They enjoy gentle attention.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Status Bar -->
    <div class="row text-center my-4">
        <div class="col-md-4 mb-3">
            <img src="./public/images/status_bar/pets.jpg" alt="Pet Adopted 1" class="img-fluid rounded" style="width: 250px; height: 200px; object-fit: cover;">
            <p class="mt-2 font-weight-bold">Pet Adopted</p>
            <p class="status-bar-count text-primary">#</p>
        </div>
        <div class="col-md-4 mb-3">
            <img src="./public/images/status_bar/users.jpg" alt="Pet Adopted 2" class="img-fluid rounded" style="width: 250px; height: 200px; object-fit: cover;">
            <p class="mt-2 font-weight-bold">Pet Adopted</p>
            <p class="status-bar-count text-primary">#</p>
        </div>
        <div class="col-md-4 mb-3">
            <img src="./public/images/status_bar/pet_adopted.jpg" alt="Pet Adopted 3" class="img-fluid rounded" style="width: 250px; height: 200px; object-fit: cover;">
            <p class="mt-2 font-weight-bold">Pet Adopted</p>
            <p class="status-bar-count text-primary">#</p>
        </div>
    </div>



    <!-- About Us Section -->
    <section class="">
        <div class="container my-5" style="background-color: #f1f3f5; padding: 2rem;">
            <div class="row align-items-center g-0">
                <div class="col-md-6">
                    <h2 class="topic text-dark">ABOUT US</h2>
                    <h2 class="display-5">Our Passion for Pets</h2>
                    <p class="lead text-muted">
                        Our story began with a simple love for animals. Our founder grew up surrounded by pets, learning early on the joy and
                        comfort they bring to life. After years of dreaming and a degree in veterinary medicine, she set out to create Paw Site — a place where every pet,
                        no matter their past, could find safety and love.
                    </p>
                </div>
                <div class="col-md-6">
                    <img src="./public/images/about_us/about-us-img.jpg" alt="About Us Image" class="img-fluid rounded shadow-sm">
                </div>
            </div>
        </div>
    </section>


    <!-- Contact Us Section -->
    <div class="container my-5">
        <div class="container text-center my-5">
            <h2 class="display-4 text-dark mb-3">CONTACT US</h2>
            <p class="lead text-muted">
                We’re here to help! Reach out with any questions or to start your adoption journey.
            </p>
        </div>
        <div class="row d-flex justify-content-between gap-2">
            <div class="col-md-5">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-4">
                        <h3 class="text-center mb-4 text-dark">Contact Us</h3>
                        <form id="contactForm" onsubmit="return validateForm()">
                            <div class="mb-3">
                                <label for="name" class="form-label">Name:</label>
                                <input type="text" id="name" name="name" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email:</label>
                                <input type="email" id="email" name="email" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone Number:</label>
                                <input type="tel" id="phone" name="phone" class="form-control" pattern="[0-9]{10}" title="Please enter a 10-digit phone number" required>
                            </div>
                            <div class="mb-3">
                                <label for="address" class="form-label">Address:</label>
                                <textarea id="address" name="address" class="form-control" required></textarea>
                            </div>
                            <div class="d-flex justify-content-between">
                                <button type="submit" class="btn" style="background-color: #d35400; color: #FFF;">Submit</button>
                                <button type="button" class="btn btn-secondary" onclick="clearForm()">Clear</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <!-- Map Section -->
                <div class="map-container">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126741.09762828132!2d80.44700741759712!3d5.947089956067981!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae131499d51cf9f%3A0x84313321e2e65873!2sMatara%2C%20Sri%20Lanka!5e0!3m2!1sen!2sus!4v1698500887890!5m2!1sen!2sus" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>

    </div>
</div>
</div>

<script>
    function validateForm() {
        const name = document.getElementById('name').value;
        const email = document.getElementById('email').value;
        const phone = document.getElementById('phone').value;
        const address = document.getElementById('address').value;

        if (!name || !email || !phone || !address) {
            alert('Please fill out all fields.');
            return false;
        }

        const nameRegex = /^[A-Za-z\s]+$/;
        if (!nameRegex.test(name)) {
            alert('Please enter a valid name (letters and spaces only).');
            return false;
        }

        const phoneRegex = /^\d{10}$/;
        if (!phoneRegex.test(phone)) {
            alert('Please enter a valid 10-digit phone number.');
            return false;
        }

        return true;
    }
</script>
<?php require("./views/partials/footer.php")  ?>