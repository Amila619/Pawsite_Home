<?php

session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: /Pawsitive_Home/login");
    exit;
}

$mysqli = require __DIR__ . '/../core/database.php';

$sql = 'SELECT * FROM adoption_application';
$result = $mysqli->query($sql);

if (!$result) {
    throw new Exception("SQL error: " . $mysqli->error);
}

$requests = []; 
while ($res = $result->fetch_assoc()) {
    array_push($requests, $res);
}


$title = "dashboard";

require('./views/admin_dashboard.view.php');
