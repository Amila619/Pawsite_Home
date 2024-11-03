<?php

session_start();

if (isset($_SESSION['user_id'])) {
    header('Location: /Pawsitive_Home/');
    exit;
}

$mysqli = require __DIR__ . '/../core/database.php';
require('./functions.php');

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $user_id = 'ui_' . generateId();
    $username = $_POST['username'];
    $email = $_POST['email'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $phone_number = $_POST['phone_number'];
    $address = $_POST['address'];
    $zip_code = $_POST['zip_code'];
    $password = $_POST['password'];
    $repeat_password = $_POST['repeat_password'];

    $password_hash = password_hash($password, PASSWORD_DEFAULT);

    if (!empty($_FILES['u_image']['name']) && $_FILES['u_image']['error'] === 0) {
        $img_url = saveUploadImg($_FILES['u_image'], $user_id);
    } else {
        $img_url = 'public/images/upload_users/blank_user.png'; // Default image if none uploaded
    }

    $sql = "INSERT INTO users (user_id, username, password_hash, email, first_name, last_name, phone_number, address, zip_code, role, img_url)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, 'user', ?)";

    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("ssssssssss", $user_id, $username, $password_hash, $email, $first_name, $last_name, $phone_number, $address, $zip_code, $img_url);

    if ($stmt->execute()) {
        header("Location: /Pawsitive_Home/login");
        exit;
    } else {
        echo "<h3>Error: " . $stmt->error . "</h3><br>";
    }

    $stmt->close();
    $mysqli->close();
}
?>