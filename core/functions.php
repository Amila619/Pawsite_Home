<?php

function generate_pet($data)
{
    foreach ($data as $res) {
        $pet = sprintf("

                <div class='card m-2' style='width: 16rem;'>
                    <img src=../%s class='card-img-top' alt='Pet Image' >
                    <div class='card-body'>
                        <h5 class='card-title'>%s</h5>
                        <p class='card-text'>%s</p>
                        <a href='/Pawsitive_Home/pet/%s' class='btn btn-primary' style='background-color: #e58e26; color: white; border: none;'>Check Out Me</a>
                    </div>
                </div>

        ", htmlspecialchars($res['img_url'] . '?v=' . time()), $res['name'], htmlspecialchars($res['description']), htmlspecialchars($res['pet_id']));

        echo $pet;
    }
}

function generate_admpet($data)
{

    foreach ($data as $res) {
        $pet = sprintf(
            "
            <div class='card m-2' style='width: 16rem;'>
                <img src='../%s' class='card-img-top' alt='Pet Image'>
                <div class='card-body'>
                    <h5 class='card-title d-flex justify-content-between'>
                        %s
                        <div class='d-flex gap-2'>
                            <a href='/Pawsitive_Home/delete_pet/%s' class='text-danger' title='Delete'>
                                <i class='bi bi-trash-fill fs-5'></i>
                            </a>
                            <a href='/Pawsitive_Home/update_pet/%s' class='text-danger' title='Edit'>
                                <i class='bi bi-pencil-fill fs-5'></i>
                            </a>
                        </div>
                    </h5>
                    <p class='card-text'>%s</p>
                    <a href='/Pawsitive_Home/pet/%s' class='btn btn-primary' style='background-color: #e58e26; color: white; border: none;'>Check Out Me</a>
                </div>
            </div>
    ",
            htmlspecialchars($res['img_url'] . '?v=' . time()),
            htmlspecialchars($res['name']),
            htmlspecialchars($res['pet_id']),
            htmlspecialchars($res['pet_id']),
            htmlspecialchars($res['description']),
            htmlspecialchars($res['pet_id'])
        );

        echo $pet;
    }
}

function generateApplication($data)
{
    foreach ($data as $msg) {

        switch($msg['status']) {
            case 'Approved':
                $color = 'alert-success';
                break;
            case 'Pending':
                $color = 'alert-warning';
                break;
            case 'Rejected':
                $color = 'alert-danger';
                break;
            default:
                $color = 'alert-secondary';
        }

        $application = sprintf(
            "
            <div class='alert %s d-flex justify-content-between align-items-start' role='alert'>
                <div>
                    <strong>Application Status: %s!</strong><br>
                    <small>Application ID: %s</small><br>
                    <small>Pet ID: %s</small><br>
                    <small>Date: %s</small>
                </div>
                <a href='/Pawsitive_Home//close_entry/%s' class='text-danger' title='Remove Application'>
                    <i class='bi bi-x fs-2'></i>
                </a>
            </div>
            ",
            $color,
            htmlspecialchars($msg['status']),
            htmlspecialchars($msg['application_id']),
            htmlspecialchars($msg['pet_id']),
            htmlspecialchars(date('F j, Y', strtotime($msg['application_date']))),
            htmlspecialchars($msg['application_id']),
        );

        echo $application;
    }
}

function generateApplicationAdmin($data)
{
    foreach ($data as $msg) {

        switch($msg['status']) {
            case 'Approved':
                    $color = 'alert-success';
                    $icon = 'bi-check-circle';
                    break;
            case 'Pending':
                $color = 'alert-warning';
                $icon = 'bi-exclamation-circle';
                break;
            case 'Rejected':
                    $color = 'alert-danger';
                    $icon = 'bi-x-circle';
                    break;
            default:
                $color = 'alert-secondary';
        }

        $application = sprintf(
            "
            <div class='alert %s d-flex justify-content-between align-items-start p-3 border rounded shadow-sm' role='alert'>
                <div class='alert-content'>
                    <div class='d-flex align-items-center mb-2 mb-md-2'>
                        <i class='bi %s me-2'></i>
                        <h5 class='alert-heading mb-0'>Application Status: %s!</h5>
                    </div>
                    <ul class='list-unstyled mb-0'>
                        <li><small class='text-muted'>Application ID: %s</small></li>
                        <li><small class='text-muted'>Pet ID: %s</small></li>
                        <li><small class='text-muted'>Date: %s</small></li>
                    </ul>
                </div>
                <div class='d-flex justify-content-between gap-2'>
                    <a href='/Pawsitive_Home/accept_pet/' class='btn btn-primary'>Accept</a>
                    <a href='/Pawsitive_Home/reject_pet/' class='btn btn-danger'>Reject</a>
                </div>
            </div>

            ",
            $color,
            $icon,
            htmlspecialchars($msg['status']),
            htmlspecialchars($msg['application_id']),
            htmlspecialchars($msg['pet_id']),
            htmlspecialchars(date('F j, Y', strtotime($msg['application_date']))),
            htmlspecialchars($msg['application_id']),
        );

        echo $application;
    }
}

function generateId()
{
    $id = "";

    for ($i = 0; $i < 2; $i++) {
        $id .= chr(rand(65, 90));
        $id .= rand(0, 9);
    }

    $id .= chr(rand(65, 90));
    return $id;
}

function saveUploadImg($file, $prefix)
{
    if ($file['name'] != "") {
        $target_dir = __DIR__ . "/../public/images/upload_pets/";

        if (!is_dir($target_dir)) {
            mkdir($target_dir, 0777, true);
        }

        $path = pathinfo($file['name']);
        $ext = strtolower($path['extension']);
        $temp_name = $file['tmp_name'];

        $allowed_extensions = ['jpg', 'jpeg', 'png', 'gif'];
        if (!in_array($ext, $allowed_extensions)) {
            echo "File extension not allowed: $ext<br>";
            return null;
        }

        $unique_filename = $prefix . "." . $ext;
        $path_filename_ext = $target_dir . $unique_filename;

        if (move_uploaded_file($temp_name, $path_filename_ext)) {
            return "public/images/upload_pets/" . $unique_filename;
        } else {
            return null;
        }
    }
    return null;
}