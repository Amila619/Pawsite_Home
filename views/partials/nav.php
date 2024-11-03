<?php

$img_url = './public/images/upload_users/blank_user.png';
$dashboard = 'user_dashboard';

$mysqli = require __DIR__ . '/../../core/database.php';

if (isset($_SESSION['user_id'])) {

    if ($_SESSION['role'] === 'admin') {
        $dashboard = 'admin_dashboard';
    }

    $sql = "SELECT img_url FROM users WHERE user_id = ?";
    $stmt = $mysqli->stmt_init();

    if (!$stmt->prepare($sql)) {
        throw new Exception("SQL error: " . $mysqli->error);
    }

    $id = $_SESSION['user_id'];
    $stmt->bind_param("s", $id);

    $stmt->execute();
    $result = $stmt->get_result();

    $result = $result->fetch_assoc();
    $img_url = $result['img_url'];

    $stmt->close();
    $mysqli->close();
}

?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="./public/images/logo/tplogo.png" alt="Site Logo" class="img-fluid" style="max-width: 80px;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="/Pawsitive_Home/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/Pawsitive_Home/category">Category</a>
                </li>
                <?php if (isset($_SESSION['user_id'])) { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="/Pawsitive_Home/<?php echo $dashboard ?>">Dashboard</a>
                    </li>
                <?php } ?>
            </ul>
            <div class="d-flex align-items-center gap-2">
                <?php if (isset($_SESSION['user_id'])) { ?>
                    <a class="btn btn-outline-primary me-2" href="/Pawsitive_Home/logout">Logout</a>
                <?php } else { ?>
                    <a class="btn btn-danger" href="/Pawsitive_Home/login">Login</a>
                <?php } ?>
                <img src="./<?php echo $img_url ?>" alt="User Image" class="user-image me-2">
            </div>
        </div>
    </div>
</nav>