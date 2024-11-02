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
                    <a class="nav-link" href="#">Register</a>
                </li>
            </ul>
            <div class="d-flex align-items-center gap-2">
                <?php if (isset($_SESSION['user_id'])): ?>
                    <a class="btn btn-outline-primary me-2" href="/Pawsitive_Home/logout">Logout</a>
                <?php else: ?>
                    <a class="btn btn-danger" href="/Pawsitive_Home/login">Login</a>
                <?php endif; ?>
                <img src="./public/images/upload_users/blank_user.png" alt="User Image" class="user-image me-2">
            </div>
        </div>
    </div>
</nav>