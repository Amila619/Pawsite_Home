<?php require('./views/partials/header.php') ?>
<div class="container">
        <div class="container">
                <h2 class="fs-2 text-secondary fw-bold mb-3" style="text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1);">Requests</h2>
                <div class="container mt-4">
                        <?php generateApplication($requests) ?>
                </div>
        </div>
        <div class="container">
                <h2 class="fs-2 text-secondary fw-bold mb-3" style="text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1);">Adopted Pets</h2>
                <div class="container mt-4">
                        <div class="row">
                                <?php generate_pet($pets) ?>
                        </div>
                </div>
        </div>
</div>
<?php require('./views/partials/footer.php') ?>