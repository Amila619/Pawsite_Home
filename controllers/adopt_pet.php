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

    if ($result->num_rows === 0) {

        $sql = "INSERT INTO adoption_application (user_id, pet_id) VALUES (?, ?)";

        $stmt = $mysqli->prepare($sql);

        if ($stmt === false) {
            die("Error preparing statement: " . $mysqli->error);
        }


        $user_id = $_SESSION['user_id'];

        $stmt->bind_param("ss", $user_id, $id);


        if ($stmt->execute() === TRUE) {
            header("Location: /Pawsitive_Home/pet/$id");
            exit;
        } else {
            echo "Error inserting user: " . $stmt->error . "<br>";
        }
    }else{
        header("Location: /Pawsitive_Home/pet/$id");
        exit;
    }
}
