<?php require('./views/partials/header.php') ?>

<div class="container custom-m">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-0 shadow-sm">
                <div class="card-body p-5">
                    <h2 class="text-center mb-4">Add Pet</h2>
                    <form action="../../Pawsitive_Home/core/handle_add_pet.php" method="POST" id="addPetForm" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter pet's name" required>
                        </div>
                        <div class="mb-3">
                            <label for="species" class="form-label">Species</label>
                            <select class="form-select" id="species" name="species" required>
                                <option value="" disabled selected>Select species</option>
                                <option value="Dog">Dog</option>
                                <option value="Cat">Cat</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="breed" class="form-label">Breed</label>
                            <input type="text" class="form-control" id="breed" name="breed" placeholder="Enter pet's breed" required>
                        </div>
                        <div class="mb-3">
                            <label for="age" class="form-label">Age (in years)</label>
                            <input type="number" class="form-control" id="age" name="age" placeholder="Enter pet's age" min="0" required>
                        </div>
                        <div class="mb-3">
                            <label for="size" class="form-label">Size</label>
                            <select class="form-select" id="size" name="size" required>
                                <option value="" disabled selected>Select size</option>
                                <option value="Small">Small</option>
                                <option value="Medium">Medium</option>
                                <option value="Large">Large</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="color" class="form-label">Color</label>
                            <input type="text" class="form-control" id="color" name="color" placeholder="Enter pet's color" required>
                        </div>
                        <div class="mb-3">
                            <label for="temperament" class="form-label">Temperament</label>
                            <textarea class="form-control" id="temperament" name="temperament" rows="3" placeholder="Describe the pet's temperament" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="health_status" class="form-label">Health Status</label>
                            <textarea class="form-control" id="health_status" name="health_status" rows="3" placeholder="Enter health status" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="adoption_fee" class="form-label">Adoption Fee ($)</label>
                            <input type="number" class="form-control" id="adoption_fee" name="adoption_fee" placeholder="Enter adoption fee" step="0.01" min="0" required>
                        </div>
                        <div class="mb-3">
                            <label for="status" class="form-label">Status</label>
                            <select class="form-select" id="status" name="status" required>
                                <option value="Available">Available</option>
                                <option value="Adopted">Adopted</option>
                                <option value="On Hold">On Hold</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" id="description" name="description" rows="3" placeholder="Enter a description of the pet" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="u_image" class="form-label">Upload Image</label>
                            <input type="file" class="form-control" id="u_image" name="u_image" accept="image/*" required>
                        </div>
                        <button type="submit" class="btn btn-custom w-100">Add Pet</button>
                    </form>
                    <div class="text-center mt-3">
                        <p>Already have an account? <a href="/Pawsitive_Home/login" class="text-decoration-none">Log In</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require('./views/partials/footer.php') ?>
