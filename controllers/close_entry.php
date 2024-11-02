<?php

session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: /Pawsitive_Home/login');
    exit;
}

$mysqli = require __DIR__ . '/../core/database.php';

if (isset($params[0])) {

    $aid = $params[0];
    $sql = "Update adoption_application SET view_status = ? WHERE application_id = ? AND user_id = ?";
    $stmt = $mysqli->stmt_init();

    if (!$stmt->prepare($sql)) {
        throw new Exception("SQL error: " . $mysqli->error);
    }

    $view_status = 0;
    $stmt->bind_param("iss", $view_status, $aid, $_SESSION['user_id']);

    if ($stmt->execute()) {
        header("Location: /Pawsitive_Home/user_dashboard");
        exit;
    }

    
}

$mysqli->close();
