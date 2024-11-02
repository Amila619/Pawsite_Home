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

function generateId() {
    $id = "";

    for ($i = 0; $i < 2; $i++) {
        $id .= chr(rand(65, 90));
        $id .= rand(0, 9);
    }

    $id .= chr(rand(65, 90));
    return $id;
}

function saveUploadImg($file, $prefix) {
    if ($file['name'] != "") {
        $target_dir = __DIR__ . "/../public/images/upload_pets/";
        $path = pathinfo($file['name']);
        $ext = strtolower($path['extension']);
        $temp_name = $file['tmp_name'];

        $allowed_extensions = ['jpg', 'jpeg', 'png', 'gif'];
        if (!in_array($ext, $allowed_extensions)) {
            return null;
        }
        
        $unique_filename = $prefix . "." . $ext;
        $path_filename_ext = $target_dir . $unique_filename;

        if (!file_exists($path_filename_ext)) {
            move_uploaded_file($temp_name, $path_filename_ext);
            return "public/images/upload_pets/" . $unique_filename;
        }
    }
    return null;
}