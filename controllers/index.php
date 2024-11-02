<?php

session_start();

$mysqli = require __DIR__ . '/../core/database.php';

$sql = 'SELECT * FROM pets';
$result = $mysqli->query($sql);

if (!$result) {
    throw new Exception("SQL error: " . $mysqli->error);
}

$data = []; // Initialize the array
while ($res = $result->fetch_assoc()) {
    array_push($data, $res);
}

$title = 'home';

require './views/index.view.php';
