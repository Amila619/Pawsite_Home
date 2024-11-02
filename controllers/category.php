<?php

$mysqli = require __DIR__ . '/../core/database.php';


if (isset($params[0])) {
    $search_query = $params[0];

    $sql = 'SELECT * FROM pets WHERE species = ?';
    $stmt = $mysqli->stmt_init();

    if (!$stmt->prepare($sql)) {
        throw new Exception("SQL error: " . $mysqli->error);
    }

    $stmt->bind_param("s", $search_query);

    $stmt->execute();
    $result = $stmt->get_result();

    $data = [];
    while ($res = $result->fetch_assoc()) {
        array_push($data, $res);
    }
}

$title = "Category";

require('./views/category.view.php');
