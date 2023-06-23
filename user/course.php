<?php
include '../connection.php';
?>

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
        <div class="card mb-3">
            <?php
            $query = "SELECT *, course.id AS id_course FROM course INNER JOIN user ON course.user_id = user.id WHERE course.id='$_GET[id]'";
            $data = mysqli_query($connection, $query);

            if (mysqli_num_rows($data) > 0) {
                while ($row = mysqli_fetch_array($data)) {
            ?>
                    <img src="../uploaded/<?php echo $row['photo'] ?>" class="card-img-top" alt="..." width="w-full" height="auto">
                    <div class="card-body">
                        <h2 class="card-title mx-3 my-2"><?php echo $row['course_name']; ?></h2>
                        <p class="fw-normal mx-3">Created by <b><?php echo $row['fullname']?></b>, Instructor by: <?php echo $row['instructor']?></p>
                        <p class="fw-normal mx-3 my-0">Description:</p>
                        <p class="fw-light mx-3"><?php echo $row['description']; ?></p>
                        <h3 class="mx-3"><?php
                                if (!(function_exists('rupiah'))) {
                                    function rupiah($angka) {
                                            $hasil_rupiah = "Rp " . number_format($angka, 2, ',', '.');
                                            return $hasil_rupiah;
                                } 
                        } echo rupiah($row['price']) ?></h3>
                        <div class="mt-3 mx-3 d-grid gap-2">
                            <div class="row">
                                <div class="col-md-6">
                                    <a href="./add_to_cart.php?id=<?php echo $row['id_course'] ?>" class="btn btn-success btn-lg">Buy this course</a>
                                </div>
                            </div>
                        </div>
                    </div> <?php
                        }
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