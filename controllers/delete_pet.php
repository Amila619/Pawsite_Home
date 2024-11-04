<?php

session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: /Pawsitive_Home/login');
    exit;
}

$mysqli = require __DIR__ . '/../core/database.php';

if (isset($params[0])) {

    $pid = $params[0];
    $sql = "DELETE FROM pets WHERE pet_id = ?";
    $stmt = $mysqli->stmt_init();

    if (!$stmt->prepare($sql)) {
        throw new Exception("SQL error: " . $mysqli->error);
    }

    $stmt->bind_param("s", $pid);

    if ($stmt->execute()) {
        unlink(__DIR__ . '/../public/images/upload_pets/' . $pid .'.jpg');
        header("Location: /Pawsitive_Home/");
        exit;
    }

    
}

$mysqli->close();