<?php require("./views/partials/header.php") ?>
<?php

if(isset($pet)){
    $page = sprintf('
        <div class="container d-flex justify-content-center custom-m">
            <div class="card border-0 shadow-sm" style="max-width: 750px; width: 100%%;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="../%s" class="card-img-top" alt="%s" style="max-height: 100%%; object-fit: cover;">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body p-4">
                            <h3 class="card-title text-dark">%s</h3>
                            <h5 class="text-muted">%s - %s</h5>
                            <p class="card-text">%s</p>
                            <ul class="list-group list-group-flush mb-3">
                                <li class="list-group-item"><strong>Age:</strong> %d years</li>
                                <li class="list-group-item"><strong>Size:</strong> %s</li>
                                <li class="list-group-item"><strong>Color:</strong> %s</li>
                                <li class="list-group-item"><strong>Temperament:</strong> %s</li>
                                <li class="list-group-item"><strong>Health Status:</strong> %s</li>
                                <li class="list-group-item"><strong>About:</strong> %s</li>
                                <li class="list-group-item"><strong>Adoption Fee:</strong> $%s</li>
                                <li class="list-group-item"><strong>Status:</strong> %s</li>
                                <li class="list-group-item"><small>Posted on: %s</small></li>
                            </ul>
                            <div class="text-center mt-3">
                                <a href="/Pawsitive_Home/adopt_pet/%s" class="btn %s w-100">
                                    %s
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    ', 
    htmlspecialchars($pet['img_url']),
    htmlspecialchars($pet['name']),
    htmlspecialchars($pet['name']),
    htmlspecialchars($pet['species']),
    htmlspecialchars($pet['breed']),
    htmlspecialchars($pet['breed']),
    htmlspecialchars($pet['age']),
    htmlspecialchars($pet['size']),
    htmlspecialchars($pet['color']),
    htmlspecialchars($pet['temperament']),
    htmlspecialchars($pet['health_status']),
    htmlspecialchars($pet['description']),
    htmlspecialchars($pet['adoption_fee']),
    htmlspecialchars($pet['status']),
    htmlspecialchars(date('F j, Y', strtotime($pet['created_at']))),
    htmlspecialchars($pet['pet_id']),
    $color,
    $adopted
);

echo $page;

}

?>
<?php require("./views/partials/footer.php") ?>
