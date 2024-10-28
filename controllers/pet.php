<?php

$title = 'pet';

$mysqli = require __DIR__ . '/../core/database.php';

if (isset($params[0])) {
    $id = $params[0];

    try {
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

    } catch (Exception $e) {
        die($e->getMessage());
    }
}

require './views/pet.view.php';
