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
    <!-- Navigation-->
    <?php include 'navbar.php'?>
    <!-- Top Courses -->
    <div class="container px-5 ">
        <h1 class="text-center mt-3 p-5"></h1>
        <h1 class="text-center mt-3 p-5">New Course</h1>
        <form action="create_course.php" method="post" enctype="multipart/form-data">
        <div class="row g-7">
            <div class="col-6 mx-auto">
                <div class="mb-3">
                    <label for="formFile" class="form-label">Preview Image</label>
                    <input class="form-control" type="file" id="formFile" name="berkas" required>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Title</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="title" required>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Category</label>
                    <select class="form-select" name="category" required>
                        <option>Choose a category</option>
                        <option>Development</option>
                        <option>Business</option>
                        <option>Finance &amp; Accounting</option>
                        <option>IT &amp; Software</option>
                        <option>Office Productivity</option>
                        <option>Personal Development</option>
                        <option>Design</option>
                        <option>Marketing</option>
                        <option>Lifestyle</option>
                        <option>Photography &amp; Video</option>
                        <option>Health &amp; Fitness</option>
                        <option>Music</option>
                        <option>Teaching &amp; Academics</option>
                        <option>I don't know yet</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="6" name="description" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Instructor</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="instructor" required>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Price</label>
                    <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="" name="price" required>
                </div>
                <input type="submit" class="btn btn-success mb-5" name="submit" value="Create">
                <a href="courses.php">
                    <input type="button" class="btn btn-danger mb-5" name="cancel" value="Cancel">
                </a>
                <h1 class="text-center mt-3 p-5"></h1>
            </div>
        </div>
        </form>
    </div>
    <!-- Top Courses -->
    <!-- Login Modal-->
    <?php include 'logout.php'?>
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