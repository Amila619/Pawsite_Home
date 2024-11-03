<?php

session_start();

if(isset($_SESSION['user_id'])){
    header('Location: /Pawsitive_Home/');
    exit;
}

$mysqli = require __DIR__ . '/../core/database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (empty($_POST['email']) || empty($_POST['password'])) {
        echo "<h3>Fill In All Fields</h3><br>";
    } else {

        $sql = "SELECT * FROM users WHERE email = ?";
        $stmt = $mysqli->prepare($sql);

        if ($stmt === false) {
            die("Error preparing statement: " . $mysqli->error);
        }

        $stmt->bind_param("s", $_POST['email']);

        if ($stmt->execute() === TRUE) {
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                $user = $result->fetch_assoc();
                if (password_verify($_POST['password'], $user['password_hash'])) {
                // if ($_POST['password'] === $user['password_hash']) {
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
?>
