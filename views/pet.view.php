<?php require("./views/partials/header.php")  ?>
<?php 

if(isset($pet)){
    $page = sprintf('
        <div class="container mt-5">
        <div class="card mb-4">
            <div class="row no-gutters">
                <!-- Image Section -->
                <div class="col-md-4">
                    <img src=../%s class="card-img" alt=%s>
                </div>
                <!-- Pet Details Section -->
                <div class="col-md-8">
                    <div class="card-body">
                        <h3 class="card-title">%s</h3>
                        <h5 class="text-muted">%s - %s</h5>
                        <p class="card-text">%s</p>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><strong>Age:</strong> %d years</li>
                            <li class="list-group-item"><strong>Size:</strong> %s</li>
                            <li class="list-group-item"><strong>Color:</strong> %s</li>
                            <li class="list-group-item"><strong>Temperament:</strong> %s</li>
                            <li class="list-group-item"><strong>Health Status:</strong> %s</li>
                            <li class="list-group-item"><strong>Adoption Fee:</strong> $%s</li>
                            <li class="list-group-item"><strong>Status:</strong> %s</li>
                            <li class="list-group-item"><small>Posted on: %s</small></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Button to Contact Owner -->
        <div class="text-center">
            <a href="contact_owner.php?owner_id=%s" class="btn btn-primary">Contact Owner</a>
        </div>
    </div>
    ', 
    htmlspecialchars($pet['img_url']),
    htmlspecialchars($pet['name']),
    htmlspecialchars($pet['name']),
    htmlspecialchars($pet['name']),
    htmlspecialchars($pet['species']),
    htmlspecialchars($pet['breed']),
    htmlspecialchars($pet['description']),
    htmlspecialchars($pet['age']),
    htmlspecialchars($pet['size']),
    htmlspecialchars($pet['color']),
    htmlspecialchars($pet['temperament']),
    htmlspecialchars($pet['health_status']),
    htmlspecialchars($pet['adoption_fee']),
    htmlspecialchars($pet['status']),
    htmlspecialchars(date('F j, Y', strtotime($pet['created_at']))),
    htmlspecialchars($pet['owner_id'])
);

echo $page;

}

?>
<?php require("./views/partials/header.php")  ?>
