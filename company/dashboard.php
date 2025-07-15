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
    <!-- Navbar -->
    <?php include 'navbar.php'; ?>
    <div class="container p-5">
        <div class="row gx-5 align-items-center">
            <h2 class="m-4"></h2>
            <div class="col-lg-6">
                <h2 class="m-5"></h2>
                <!-- Mashead text and app badges-->
                <div class="mb-5 mb-lg-0 text-center text-lg-start">
                    <h1 class="p-5"></h1>
                    <h1 class="px-5">Hi,
                        <?php
                        include '../connection.php';

                        if (isset($_SESSION['username'])) {
                            $name = $_SESSION['name'];
                            echo $name;
                        }
                        ?>
                    </h1>
                    <h5 class="px-5">Welcome to instructor dashboard!</h5>
                    <p class="px-5">Here, you can create, manage, and sell courses to users.</p>
                </div>
                <h2 class="m-5"></h2>
            </div>
            <div class="col-lg-6">
                <!-- Masthead device mockup feature-->
                <div class="masthead-device-mockup">
                    <div style="display:inline-block;position:relative"><img class="p-5" style="width:600px; height:auto;" src="https://doodleipsum.com/700?i=93edffde9cb584da90241b8253cf2de3" alt="Date Night by Cezar Berje" />
                        <p style="position:absolute;bottom:.5rem;right:.5rem;font-family:sans-serif;color:black;"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container p-5">
        <h5 class="my-2">TRANSACTION</h5>
        <a href="print.php" class="btn btn-success my-3 "><img width="20" height="20" src="https://img.icons8.com/fluency/48/pdf.png" alt="pdf"/> Print</a>

        <a href="phpspreadsheet.php" class="btn btn-success my-3 "><img width="20" height="20" src="https://img.icons8.com/color/20/ms-excel.png" alt="ms-excel"/>  Report</a>
        <table class="table table-striped px-5">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Transaction ID</th>
                    <th scope="col">Course ID</th>
                    <th scope="col">Course Name</th>
                    <th scope="col">Customer</th>
                    <th scope="col">Timestamp</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Price</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include '../connection.php';

                $fullname = $_SESSION['name'];

                $sql = "SELECT * FROM detail_transaction INNER JOIN header_transaction ON detail_transaction.id_header_transaction = header_transaction.id_header_transaction INNER JOIN course ON detail_transaction.course_id = course.id WHERE detail_transaction.company='$fullname'";
                $query = mysqli_query($connection, $sql);

                $no = 1;
                foreach ($query as $row) {
                    # code...
                ?>
                    <tr>
                        <th scope="row"><?php echo $no++ ?></th>
                        <td><?php echo $row['id_header_transaction'] ?></td>
                        <td><?php echo $row['course_id'] ?></td>
                        <td><?php echo $row['course_name'] ?></td>
                        <td><?php echo $row['customer'] ?></td>
                        <td><?php echo $row['date']." ".$row['time']?></td>
                        <td><?php echo $row['quantity'] ?></td>
                        <td><?php 
                        if (!(function_exists('rupiah'))) {
                            function rupiah($angka) {
                                    $hasil_rupiah = "Rp " . number_format($angka, 2, ',', '.');
                                    return $hasil_rupiah;
                                } 
                        }

                        echo rupiah($row['price']) ?></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
            <?php
                include "../connection.php";

                $sql = "SELECT SUM(quantity) as total_quantity, SUM(price) as total_price FROM detail_transaction INNER JOIN course ON detail_transaction.course_id = course.id WHERE detail_transaction.company = '$fullname';";
                $result = mysqli_query($connection, $sql);
                $row = mysqli_fetch_array($result);

                if ($row['total_quantity'] > 0) {
                ?>
                    <tr>
                        <td colspan="5"></td>
                        <td>Total</td>
                        <td><?php echo $row['total_quantity']; ?></td>
                        <td><?php echo rupiah($row['total_price']); ?></td>
                    </tr>

                    <?php
                        // Update saldo hanya jika ada transaksi
                        $updateSaldo = "UPDATE user SET saldo = '{$row['total_price']}' 
                                        WHERE username='{$_SESSION['username']}' AND role='company'";
                        mysqli_query($connection, $updateSaldo);
                } ?>
                </td>
        </table>
    </div>
    </div>
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