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
    <!-- Shopping Cart -->
    <div class="container px-5 n-5">
        <h1 class="text-center mt-3 p-5"></h1>
        <h1 class="text-center mt-3 p-5">Shopping Cart</h1>
        <?php
        if (!empty($_SESSION["cart"])) {
        ?>
            <a href="courses.php" class="btn btn-success my-3">
                < Back</a>
                    <table class="table caption-top my-5">
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Thumbnail</th>
                                <th scope="col">Course Name</th>
                                <th scope="col">Company</th>
                                <th scope="col">Price</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Subtotal</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = "SELECT * FROM user WHERE username='$_SESSION[username]'";
                            $sql = mysqli_query($connection, $query);
                            $data = mysqli_fetch_assoc($sql);
                            $saldo_total = 0;

                            if ($data) {
                                $saldo_total = $data['saldo'];
                            } else {
                            }

                            $no = 1;
                            $grandtotal = 0;
                            foreach ($_SESSION["cart"] as $cart => $val) {
                                # code...
                                $subtotal = $val['price'] * $val['quantity'];
                                $grandtotal = $grandtotal + $subtotal;
                            ?>
                                <tr>
                                    <th scope="row"><?php echo $no++ ?></th>
                                    <td><img src="../uploaded/<?php echo $val['photo'] ?>" alt="" width="`00" height="80"></td>
                                    <td><?php
                                    echo $val['course_name'] ?></td>
                                    <td><?php 
                                    echo $val['company'] ?></td>
                                    <td><?php
                                        if (!(function_exists('rupiah'))) {
                                            function rupiah($angka)
                                            {
                                                $hasil_rupiah = "Rp " . number_format($angka, 2, ',', '.');
                                                return $hasil_rupiah;
                                            }
                                        }
                                        echo rupiah($val['price']) ?></td>
                                    <td><?php echo $val['quantity'] ?></td>
                                    <td><?php
                                        if (!(function_exists('rupiah'))) {
                                            function rupiah($angka)
                                            {
                                                $hasil_rupiah = "Rp " . number_format($angka, 2, ',', '.');
                                                return $hasil_rupiah;
                                            }
                                        }
                                        echo rupiah($subtotal) ?></td>
                                    <td><a href="delete_from_cart.php?id=<?php echo $cart ?>" class="btn btn-outline-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"></path>
                                                <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"></path>
                                            </svg>
                                        </a></td>
                                </tr>
                            <?php
                            }
                            ?>
                            <tr>
                                <th style="text-align: right;" colspan="6">Grand Total</th>
                                <th><?php
                                    if (!(function_exists('rupiah'))) {
                                        function rupiah($angka)
                                        {
                                            $hasil_rupiah = "Rp " . number_format($angka, 2, ',', '.');
                                            return $hasil_rupiah;
                                        }
                                    }
                                    echo rupiah($grandtotal) ?></th>
                                <th></th>
                            </tr>
                            <tr>
                                <th style="text-align: right;" colspan="6"></th>
                                <th><?php
                                    $total = $saldo_total - $grandtotal;
                                    
                                    if (!(function_exists('rupiah'))) {
                                    function rupiah($angka) {
                                            $hasil_rupiah = "Rp " . number_format($angka, 2, ',', '.');
                                            return $hasil_rupiah;
                                        } 
                                    }

                                    if ($saldo_total < $grandtotal) {
                                        echo "<p class='fs-6 text-danger'>".rupiah($total)."</p>";
                                    } else if ($saldo_total > $grandtotal) {
                                        echo "<p class='fs-6 text-success'>".rupiah($total)."</p>";;
                                    }
                                    ?></th>
                                <th></th>
                            </tr>
                        </tbody>
                    </table>
                    <div>
                        <?php
                        $total = $saldo_total - $grandtotal;
                        if ($saldo_total < $grandtotal) {
                        ?>
                            <button class="btn btn-warning" disabled><img class="mx-0" width="20" height="20" src="https://img.icons8.com/arcade/64/checkout.png" alt="checkout" /><?php echo " " ?><b>Checkout</b></button>
                        <?php
                        } else if ($saldo_total > $grandtotal) {
                            $_SESSION['saldo'] = $saldo_total;
                            $_SESSION['grandtotal'] = $grandtotal;
                        ?>
                            <a href="checkout.php" class="btn btn-warning" name='checkout'><img class="mx-0" width="20" height="20" src="https://img.icons8.com/arcade/64/checkout.png" alt="checkout" /><?php echo " " ?><b>Checkout</b></a>
                        <?php
                        } else {
                        ?>
                            <button class="btn btn-warning" disabled><img class="mx-0" width="20" height="20" src="https://img.icons8.com/arcade/64/checkout.png" alt="checkout" /><?php echo " " ?><b>Checkout</b></button>
                        <?php
                        }
                        ?>
                    </div>
                    <h1 class="py-5"></h1>
                <?php
            } else {
                ?>
                    <div class="m-5 d-flex justify-content-center">
                        <img class="" src="..\assets\img\cart-is-empty.svg" style="width: 300px; height:auto;" alt=""> <br>
                    </div>
                    <h4 class="text-center">Your cart is empty!</h4>
                    <div class="m-5 d-flex justify-content-center">
                        <button type="button" class="btn btn-warning btn-lg" onclick="window.location.href = 'courses.php'">Let's explore!</button>
                    </div>
                <?php
            }
                ?>
    </div>
    <!-- Shopping Cart -->
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