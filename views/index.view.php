<?php require("./views/partials/header.php")  ?>
<div class='container mt-5'>
    <?php if (isset($add)) { ?>
        <a href='/Pawsitive_Home/add_pet' class='btn btn-success btn-md d-flex align-items-center' style='width: 8rem;'>
            <i class='bi bi-plus-circle me-2'></i> Add Pet
        </a>
    <?php } ?>
    <div class='row'>
        <?php generate_admpet($data) ?>
    </div>
</div>
<?php require("./views/partials/footer.php")  ?>