<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Connect Skills - Build Up your 21st Century Skills with Us.</title>
    <link rel="icon" type="image/x-icon" href="https://doodleipsum.com/75/abstract?i=f8b1abea359b643310916a38aa0b0562" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,600;1,600&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,500;0,600;0,700;1,300;1,500;1,600;1,700&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;1,400&amp;display=swap" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="../css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation Bar -->
    <?php include 'navbar.php'; ?>
    <!-- Top Courses -->
    <div class="container px-5 ">
        <h1 class="text-center mt-3 p-5"></h1>
        <h1 class="text-center mt-3 p-5">Courses</h1>
            <form action="courses.php" method="get">
            <div class="d-flex justify-content-center">
            <div class="col-md-3">
                <input type="text" class="form-control form-input" placeholder="Search" name="search">
                <br>
                <?php
                $search = "";
                if (isset($_GET['search'])) {
                    $search = $_GET['search'];
                }
                ?>
            </div>
            </form>
        </div>
        <div class="card-group d-flex justify-content-left">
            <?php
            include '../connection.php';
            
            global $start, $pages;
            if($search != "") {
                $query = mysqli_query($connection, "SELECT *, course.id AS id_course FROM course INNER JOIN user ON course.user_id = user.id WHERE course.course_name like '%".$search."%'");
            } else {
                $query = mysqli_query($connection, "SELECT *, course.id AS id_course FROM course INNER JOIN user ON course.user_id = user.id ORDER BY course_name ASC");
                $perPage = 6;
                $page = isset($_GET['page']) ? (int) $_GET['page'] : 1;
                $start = $perPage*($page-1);
                $get = mysqli_fetch_array(mysqli_query($connection, "SELECT COUNT(*) total FROM course INNER JOIN user ON course.user_id = user.id "));
                $total = $get['total'];
                $pages = ceil($total/$perPage);
                $query = mysqli_query($connection, "SELECT *, course.id AS id_course FROM course INNER JOIN user ON course.user_id = user.id ORDER BY course_name ASC LIMIT $start, $perPage");
            }

            $maxCards = 6;
            $cardCount = 0;

            if (mysqli_num_rows($query) > 0) {
                while ($row = mysqli_fetch_array($query)) { ?>
                    <div class="row">
                        <div class="col md-4">
                            <div class="card m-5 border border-2 rounded" style="width: 19rem;">
                                <img src="../uploaded/<?php echo $row['photo'] ?>" class="card-img-top" alt="..." style="width: w-full; height: auto;">
                                <div class="card-body">
                                    <h5 class="m-0"><?php echo $row['course_name'] ?></h5>
                                    <p class="m-0 fw-normal"><?php echo $row['fullname'] ?></p>
                                    <p class="mt-3"><?php
                                    $description = $row['description'];
                                    $cut = strlen($description) > 70 ? substr($description, 0, 70) . " ..." : $description;
                                    echo $cut;
                                    ?></p>
                                    <h5 class="card-title"><?php
                                            if (!(function_exists('rupiah'))) {
                                            function rupiah($angka) {
                                                    $hasil_rupiah = "Rp " . number_format($angka, 2, ',', '.');
                                                    return $hasil_rupiah;
                                            }
                                    }
                                    echo rupiah($row['price']) ?></h5>
                                    <a href="course.php?id=<?php echo $row['id_course']; ?>" class="btn btn-success mt-1">Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php
                }
            } else {
            }
            ?>
        </div>
        <div class="container py-3 px-5 d-flex justify-content-center">
        <?php
            for($i=1; $i<=$pages; $i++) {
                ?> 
                    <a href="?page= <?php echo $i?>" class="mx-1 btn btn-outline-warning" role="button" aria-pressed="true"><?php echo $i?></a>
                <?php
            }
        ?>
        </div>
        <!-- Top Courses -->
        <!-- Login Modal-->
        <?php include 'logout.php'; ?>
            <!-- Bootstrap core JS-->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
            <!-- Core theme JS-->
            <script src="js/scripts.js"></script>
            <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
            <!-- * *                               SB Forms JS                               * *-->
            <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
            <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
            <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>