<?php

session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: /Pawsitive_Home/login');
    exit;
}


$title = 'add pet';

require './views/add_pet.view.php';