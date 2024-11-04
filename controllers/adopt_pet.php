<?php

session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: /Pawsitive_Home/login');
    exit;
}


$mysqli = require __DIR__ . '/../core/database.php';

if (isset($params[0])) {

    $pid = $params[0];

    $sql = "SELECT * FROM adoption_application WHERE user_id = ? AND pet_id = ?";
    $stmt = $mysqli->stmt_init();

    if (!$stmt->prepare($sql)) {
        throw new Exception("SQL error: " . $mysqli->error);
    }

    $stmt->bind_param("ss", $_SESSION['user_id'], $pid);

    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 0) {

        $sql = "INSERT INTO adoption_application (user_id, pet_id, view_status) VALUES (?, ?, ?)";
        $stmt = $mysqli->stmt_init();

        if (!$stmt->prepare($sql)) {
            die("Error preparing statement: " . $mysqli->error);
        }


        $user_id = $_SESSION['user_id'];
        $view_status = 1;
        $stmt->bind_param("ssi", $user_id, $pid, $view_status);


        if ($stmt->execute() === TRUE) {
            header("Location: /Pawsitive_Home/pet/$pid");
            exit;
        }
    }
}