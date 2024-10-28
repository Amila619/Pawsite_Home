<?php

function generate_pet($data)
{
    foreach ($data as $res) {
        $pet = sprintf("

                <div class='card m-2' style='width: 16rem;'>
                    <img src=%s class='card-img-top' alt='Pet Image'>
                    <div class='card-body'>
                        <h5 class='card-title'>%s</h5>
                        <p class='card-text'>%s</p>
                        <a href='/Pawsitive_Home/pet/%s' class='btn btn-primary'>Adopt Me</a>
                    </div>
                </div>

        ", $res['img_url'], $res['name'], $res['description'], htmlspecialchars($res['pet_id']));

        echo $pet;
    }
}
