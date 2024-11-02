<?php

session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: /Pawsitive_Home/login");
    exit;
}

$mysqli = require __DIR__ . '/../core/database.php';

$id = $_SESSION['user_id'];

$sql = "SELECT * FROM adoption_application WHERE user_id = ? AND view_status = ?";
$stmt = $mysqli->stmt_init();

if (!$stmt->prepare($sql)) {
    throw new Exception("SQL error: " . $mysqli->error);
}

$view_status = 1;
$stmt->bind_param("si", $id, $view_status);

$stmt->execute();
$result = $stmt->get_result();

$requests = [];
while ($res = $result->fetch_assoc()) {
    array_push($requests, $res);
}


$sql = "SELECT * FROM pets WHERE pet_id IN(SELECT pet_id FROM adopted_pets WHERE user_id = ?)";
$stmt = $mysqli->stmt_init();

if (!$stmt->prepare($sql)) {
    throw new Exception("SQL error: " . $mysqli->error);
}

$stmt->bind_param("s", $id);

$stmt->execute();
$result = $stmt->get_result();

$pets = [];
while ($res = $result->fetch_assoc()) {
    array_push($pets, $res);
}

$title = "dashboard";

require('./views/user_dashboard.view.php');
