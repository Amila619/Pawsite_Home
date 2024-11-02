<?php require('./views/partials/header.php') ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body p-4">
                    <h3 class="text-center mb-4">Add Pet</h3>
                    <form action="../../Pawsitive_Home/core/handle_update_pet.php?img_url=<?php echo $pet['img_url'] ?>&pet_id=<?php echo $pet['pet_id'] ?>" method="POST" id="addPetForm" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter pet's name" value="<?php echo $pet['name'] ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="species" class="form-label">Species</label>
                            <select class="form-select" id="species" name="species" required>
                                <option value="" disabled>Select species</option>
                                <option value="Dog" <?php if ($pet['species'] === 'Dog') echo 'selected'; ?>>Dog</option>
                                <option value="Cat" <?php if ($pet['species'] === 'Cat') echo 'selected'; ?>>Cat</option>
                                <option value="Other" <?php if ($pet['species'] === 'Other') echo 'selected'; ?>>Other</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="breed" class="form-label">Breed</label>
                            <input type="text" class="form-control" id="breed" name="breed" placeholder="Enter pet's breed" value="<?php echo $pet['breed'] ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="age" class="form-label">Age (in years)</label>
                            <input type="number" class="form-control" id="age" name="age" placeholder="Enter pet's age" min="0" value="<?php echo $pet['age'] ?>" required>
                        </div>
                        <div class="mb-3">
                            <select class="form-select" id="size" name="size" required>
                                <option value="" disabled>Select size</option>
                                <option value="Small" <?php if ($pet['size'] === 'Small') echo 'selected'; ?>>Small</option>
                                <option value="Medium" <?php if ($pet['size'] === 'Medium') echo 'selected'; ?>>Medium</option>
                                <option value="Large" <?php if ($pet['size'] === 'Large') echo 'selected'; ?>>Large</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="color" class="form-label">Color</label>
                            <input type="text" class="form-control" id="color" name="color" placeholder="Enter pet's color" value="<?php echo $pet['color'] ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="temperament" class="form-label">Temperament</label>
                            <textarea class="form-control" id="temperament" name="temperament" rows="3" placeholder="Describe the pet's temperament" required><?php echo $pet['temperament'] ?></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="health_status" class="form-label">Health Status</label>
                            <textarea class="form-control" id="health_status" name="health_status" rows="3" placeholder="Enter health status" required><?php echo $pet['health_status'] ?></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="adoption_fee" class="form-label">Adoption Fee ($)</label>
                            <input type="number" class="form-control" id="adoption_fee" name="adoption_fee" placeholder="Enter adoption fee" step="0.01" min="0" value="<?php echo $pet['adoption_fee'] ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="status" class="form-label">Status</label>
                            <select class="form-select" id="status" name="status" required>
                                <option value="Available" <?php if ($pet['status'] === 'Available') echo 'selected'; ?>>Available</option>
                                <option value="Adopted" <?php if ($pet['status'] === 'Adopted') echo 'selected'; ?>>Adopted</option>
                                <option value="On Hold" <?php if ($pet['status'] === 'On Hold') echo 'selected'; ?>>On Hold</option>
                            </select>

                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" id="description" name="description" rows="3" placeholder="Enter a description of the pet" required><?php echo $pet['description'] ?></textarea>
                        </div>
                        <div class="mb-3">
                            <img id="upload_pet_dp" src="../<?php echo $pet['img_url'] ?>" alt="Pet Image" style="max-width: 80px; height: auto; border-radius: 50%; border: 2px solid #ccc;">
                        </div>
                        <div class="mb-3">
                            <label for="u_image" class="form-label">Upload Image</label>
                            <input type="file" class="form-control" id="u_image" name="u_image" accept="image/*" onchange="changeImg(event)">
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Update Pet</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    let img = document.getElementById('upload_pet_dp');

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