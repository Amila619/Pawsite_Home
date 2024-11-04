<?php require('./views/partials/header.php') ?>
<?php if (!isset($data)) { ?>
<div class="container custom-m">
<section class="container hero-section text-center">
        <h1>Save a Life! Adopt a Pet!</h1>
        <p>Adopting a pet is more than adding an animal to your home—it's welcoming a loyal friend who will bring joy, love, and companionship. Each pet has a unique story and is waiting for a second chance at happiness. Bring home a forever friend today!</p>
    </section>
    <section id="pets" class="container my-5">
        <h2 class="text-center mb-4">Meet Our Adorable Pets</h2>
        <div class="row g-4 text-center">
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <a href="/Pawsitive_Home/category/cat">
                        <img src="./public/images/category/cat.jpg" class="card-img-top" alt="Cat">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">Cat</h5>
                        <p class="card-text">This sweet cat is playful and loves to cuddle. Ready for her forever home!</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <a href="/Pawsitive_Home/category/dog">
                        <img src="./public/images/category/dog.jpg" class="card-img-top" alt="Dog">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">Dog</h5>
                        <p class="card-text">Dog is loyal and energetic, always up for an adventure. He’d make a great companion!</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <a href="/Pawsitive_Home/category/other">
                        <img src="./public/images/category/rabbit.jpg" class="card-img-top" alt="Rabbit">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">Others</h5>
                        <p class="card-text">Gentle and curious, looking for a cozy home to explore and relax.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php }else{ ?>
    <div class='container custom-m'>
    <?php if (isset($_SESSION['user_id'])) { ?>
        <a href='/Pawsitive_Home/add_pet' class='btn btn-success btn-md d-flex align-items-center' style='width: 8rem;'>
            <i class='bi bi-plus-circle me-2'></i> Add Pet
        </a>
    <?php } ?>
    <div class='row gap-2'>
        <?php generate_pet($data) ?>
    </div>
</div>
<?php } ?>
</div>
<script src="./public/js/category.js"></script>
<?php require('./views/partials/footer.php') ?>
