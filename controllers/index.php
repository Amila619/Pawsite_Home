<?php

$mysqli = require __DIR__ . '/../core/database.php';

try {
    $sql = 'SELECT * FROM pets';
    $result = $mysqli->query($sql);

    if (!$result) {
        throw new Exception("SQL error: " . $mysqli->error);
    }

    $data = []; // Initialize the array
    while ($res = $result->fetch_assoc()) {
        array_push($data, $res);
    }
    
} catch (Exception $e) {
    die($e->getMessage());
}

$title = 'home';

require './views/index.view.php';
