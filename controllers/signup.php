<?php

session_start();

if (isset($_SESSION['user_id'])) {
    header('Location: /Pawsitive_Home/');
    exit;
}

$title = 'sign up';

require('./views/signup.view.php');