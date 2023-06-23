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
    <!-- Mashead header-->
    <header class="masthead">
        <div class="container px-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6">
                    <div style="display:inline-block;position:relative"><img src="https://doodleipsum.com/600x600?i=9f2e40101aa69f0193496e444268ec83" alt="UI Design by Cezar Berje" />
                        <p style="position:absolute;bottom:.5rem;right:.5rem;font-family:sans-serif;color:black"></p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <!-- Mashead text and app badges-->
                    <div class="mb-0 mb-lg-0 text-center text-lg-start">
                        <h1 class="display-3 lh-1 mb-3">Welcome!</h1>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Id, praesentium dolor voluptate fugiat esse optio consequuntur vel, magnam et eius, saepe veniam quis! Mollitia recusandae deleniti libero ratione hic autem illo, officiis velit nesciunt numquam, suscipit quisquam adipisci quaerat dolor vitae id minus deserunt cum! Cupiditate dolor blanditiis laboriosam aliquid?</p>
                        <button type="button" class="btn btn-warning btn-lg" onclick="window.location.href = '#topsubjects'">Let's explore!</button>
                    </div>
                </div>
            </div>
    </header>
    <!-- Top Courses -->
    <div class="container p-5" id="topsubjects">
        <h1 class="text-center p-3">Top Subjects</h1>
        <div class="card-group d-flex justify-content-center">
            <?php
            include '../connection.php';

            $query = "SELECT *, course.id AS id_course FROM course INNER JOIN user ON course.user_id = user.id ORDER BY total_clicked DESC LIMIT 3";
            $data = mysqli_query($connection, $query);
            $maxCards = 3;
            $cardCount = 0;

            if (mysqli_num_rows($data) > 0) {
                while ($row = mysqli_fetch_array($data)) { ?>
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
                                                function rupiah($angka)
                                                    {
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
            }
            ?>
        </div>
    </div>
    <!-- Top Courses -->
    <div class="container rounded mt-5 mb-5 p-3 bg-warning">
        <h1 class="text-center p-5 text-black"><u>Testimonials</u></h1>
        <div class="row g-2 d-flex justify-content-center">
            <div class="col-md-3">
                <div class="card p-3 text-center px-4">
                    <div class="user-image my-2">
                        <img src="https://i.imgur.com/PKHvlRS.jpg" class="rounded-circle" width="80">
                    </div>

                    <div class="user-content">
                        <h5 class="mb-0">Bruce Hardy</h5>
                        <span>Software Developer</span>
                        <p class="mt-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatum perferendis facilis eaque quia omnis et quidem excepturi vitae laborum rerum?</p>
                    </div>

                    <div class="ratings">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>

                </div>
            </div>

            <div class="col-md-3">
                <div class="card p-3 text-center px-4">
                    <div class="user-image my-2">
                        <img src="https://i.imgur.com/w2CKRB9.jpg" class="rounded-circle" width="80">
                    </div>

                    <div class="user-content">
                        <h5 class="mb-0">Mark Smith</h5>
                        <span>Web Developer</span>
                        <p class="mt-3">.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatum perferendis facilis eaque quia omnis et quidem excepturi vitae laborum rerum?</p>
                    </div>

                    <div class="ratings">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>

                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card p-3 text-center px-4">
                    <div class="user-image my-2">
                        <img src="https://i.imgur.com/ACeArwY.jpg" class="rounded-circle" width="80">
                    </div>

                    <div class="user-content">
                        <h5 class="mb-0">Veera Duncan</h5>
                        <span>Software Architect</span>
                        <p class="mt-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatum perferendis facilis eaque quia omnis et quidem excepturi vitae laborum rerum?</p>
                    </div>

                    <div class="ratings">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                </div>
            </div>
            <h1 class="text-center p-5 text-white"></h1>
        </div>
    </div>
    <h1 class="text-center p-5 text-white"></h1>
    <!-- Footer-->
    <footer class="bg-black text-center py-5">
        <div class="container px-5">
            <div class="text-white-50 small">
                <div class="mb-2">&copy; Connect Skills 2023. All Rights Reserved.</div>
                <a href="#!">Privacy</a>
                <span class="mx-1">&middot;</span>
                <a href="#!">Terms</a>
                <span class="mx-1">&middot;</span>
                <a href="#!">FAQ</a>
            </div>
        </div>
    </footer>
    <!-- Sign Up Modal-->
    <div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="feedbackModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-gradient-primary-to-secondary p-4">
                    <h5 class="modal-title font-alt text-white" id="feedbackModalLabel">Sign Up</h5>
                    <button class="btn-close btn-close-white" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
            </div>
        </div>
    </div>
    <!-- Sign Up Modal -->
    <?php include 'logout.php'; ?>
        <!-- Login Modal -->
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