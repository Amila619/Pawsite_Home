<?php

session_start();

if (isset($_SESSION['user_id'])) {
    header('Location: /Pawsitive_Home/');
    exit;
}

$title = 'login';

require './views/login.view.php';
