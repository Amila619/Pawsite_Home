<?php

session_start();

$mysqli = require __DIR__ . '/../core/database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (empty($_POST['username']) || empty($_POST['password'])) {
        echo "<h3>Fill In All Fields</h3><br>";
    } else {

        $sql = "SELECT * FROM users WHERE username = ?";
        $stmt = $mysqli->prepare($sql);

        if ($stmt === false) {
            die("Error preparing statement: " . $mysqli->error);
        }

        $stmt->bind_param("s", $_POST['username']);

        if ($stmt->execute() === TRUE) {
            $stmt = $stmt->get_result();
            $result = $stmt->fetch_assoc();

            if ($result->num_rows > 0) {
                $user = $result->fetch_assoc();
                // if (password_verify($_POST['password'], $user['password'])) {
                if ($_POST['password'] === $user['password_hash']) {
                    $_SESSION['user_id'] = $user['user_id'];
                    $_SESSION['role'] = $user['role'];
                    header("Location: /Pawsitive_Home/");
                    exit;
                } else {
                    echo "<h3>Invalid password.</h3>";
                }
            } else {
                echo "<h3>Please enter a valid username</h3><br>";
            }
        }

        $stmt->close();
        $mysqli->close();
    }
}
