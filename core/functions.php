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
                        <a href='/Pawsitive_Home/pet/%s' class='btn btn-primary'>Check Out Me</a>
                    </div>
                </div>

        ", htmlspecialchars($res['img_url']), $res['name'], htmlspecialchars($res['description']), htmlspecialchars($res['pet_id']));

        echo $pet;
    }
}

function generate_admpet($data)
{

    foreach ($data as $res) {
    $pet = sprintf("
            <div class='card m-2' style='width: 16rem;'>
                <img src='%s' class='card-img-top' alt='Pet Image'>
                <div class='card-body'>
                    <h5 class='card-title d-flex justify-content-between'>
                        %s
                        <a href='/Pawsitive_Home/delete_pet/%s' class='text-danger' title='Delete'>
                            <i class='bi bi-trash-fill fs-5'></i>
                        </a>
                    </h5>
                    <p class='card-text'>%s</p>
                    <a href='/Pawsitive_Home/pet/%s' class='btn btn-primary'>Check Out Me</a>
                </div>
            </div>
    ",
    htmlspecialchars($res['img_url']),
    htmlspecialchars($res['name']),
    htmlspecialchars($res['pet_id']),
    htmlspecialchars($res['description']),
    htmlspecialchars($res['pet_id']));

    echo $pet;
}
}
