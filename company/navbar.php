<!-- Navigation-->
<?php
    include '../connection.php';
?>

<nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm" id="mainNav">
        <div class="container px-5">
            <a class="navbar-brand fw-bold text-success" href="#page-top">Connect Skills for Instructor</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="bi-list"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0">
                    <li class="nav-item"><a class="nav-link" href="dashboard.php">Dashboard</a></li>
                </ul>
                <ul class="navbar-nav me-4 my-3 my-lg-0">
                    <li class="nav-item"><a class="nav-link" href="courses.php">My Courses</a></li>
                </ul>
                <ul class="navbar-nav me-2 my-3 my-lg-0">
                </ul>
                <ul class="navbar-nav me-2 my-3 my-lg-0 bg-primary rounded px-2">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="logout.php" data-bs-toggle="modal" data-bs-target="#loginModal">
                            <?php
                            include '../connection.php';
                            session_start();

                            if (isset($_SESSION['username'])) {
                                $username = $_SESSION['username'];
                                echo $username;
                            }
                            ?></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
