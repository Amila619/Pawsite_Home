<?php

session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: /Pawsitive_Home/login');
    exit;
}

$mysqli = require __DIR__ . '/../core/database.php';

if (isset($params[0])) {
    $id = $params[0];

    $sql = "SELECT * FROM adoption_application WHERE pet_id = ?";
    $stmt = $mysqli->stmt_init();

    if (!$stmt->prepare($sql)) {
        throw new Exception("SQL error: " . $mysqli->error);
    }

    $stmt->bind_param("s", $id);

    $stmt->execute();
    $result = $stmt->get_result();

    $adopted = $result->num_rows > 0 ? "Applied" : "Adopt";
    $color = $result->num_rows > 0 ? "danger" : "primary";

    $sql = "SELECT * FROM pets WHERE pet_id = ?";
    $stmt = $mysqli->stmt_init();

    if (!$stmt->prepare($sql)) {
        throw new Exception("SQL error: " . $mysqli->error);
    }

    $stmt->bind_param("s", $id);

    $stmt->execute();
    $result = $stmt->get_result();

    $pet = $result->fetch_assoc();

    if (!$pet) {
        throw new Exception("Pet not found with ID: " . htmlspecialchars($id));
    }


    $stmt->close();
    $mysqli->close();
}

$title = 'pet';

require './views/pet.view.php';
