<?php require('./views/partials/header.php') ?>
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-0 shadow-sm">
                <div class="card-body p-4">
                    <h2 class="text-center fs-4 text-secondary fw-bold mb-3" style="text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1);">Requests</h2>
                    <div class="container mt-4">
                        <?php generateApplicationAdmin($requests) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require('./views/partials/footer.php') ?>
