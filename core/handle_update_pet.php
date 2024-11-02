<?php

session_start();

if(!isset($_SESSION['user_id'])){
    header('Location: /Pawsitive_Home/login');
    exit;
}

require('./functions.php');
$mysqli = require __DIR__ . '/../core/database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (
        empty($_POST['name']) || 
        empty($_POST['species']) || 
        empty($_POST['breed']) || 
        empty($_POST['age']) || 
        empty($_POST['size']) || 
        empty($_POST['color']) || 
        empty($_POST['temperament']) || 
        empty($_POST['health_status']) || 
        empty($_POST['adoption_fee']) || 
        empty($_POST['status']) || 
        empty($_POST['description']) || 
        !isset($_FILES['u_image']) || 
        $_FILES['u_image']['error'] !== 0
    ) {
        echo "<h3>Fill In All Fields</h3><br>";
    } else {
        $sql = "INSERT INTO pets (pet_id, name, species, breed, age, size, color, temperament, health_status, adoption_fee, status, description, img_url, owner_id)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $stmt = $mysqli->stmt_init();

        if (!$stmt->prepare($sql)) {
            throw new Exception("SQL error: " . $mysqli->error);
        }

        $pet_id = 'pi_' . generateId();
        $name = $_POST['name'];
        $species = $_POST['species'];
        $breed = $_POST['breed'];
        $age = (int)$_POST['age'];  
        $size = $_POST['size'];
        $color = $_POST['color'];
        $temperament = $_POST['temperament'];
        $health_status = $_POST['health_status'];
        $adoption_fee = (float)$_POST['adoption_fee'];  
        $status = $_POST['status'];
        $description = $_POST['description'];
        $img_url = saveUploadImg($_FILES['u_image'], $pet_id);
        $owner_id = $_SESSION['user_id'];

        $stmt->bind_param(
            "ssssissssdssss",
            $pet_id,
            $name,
            $species,
            $breed,
            $age,
            $size,
            $color,
            $temperament,
            $health_status,
            $adoption_fee,
            $status,
            $description,
            $img_url, 
            $owner_id 
        );

        if ($stmt->execute()) {
            header("Location: /Pawsitive_Home/");
            exit;
        } else {
            echo "<h3>Error Adding Pet: {$stmt->error}</h3><br>";
        }

        $stmt->close();
        $mysqli->close();
    }
}
?>
