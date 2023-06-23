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
<body>
</html>
<div>
<h2>History Transaction <?php session_start();
echo $_SESSION['name']?></h2>
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
                        
                        echo rupiah($row['price']);
                        ?></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
            <?php
                include "../connection.php";

                $sql = "SELECT SUM(quantity) as total_quantity, SUM(price) as total_price FROM detail_transaction INNER JOIN course ON detail_transaction.course_id = course.id WHERE detail_transaction.company = '$fullname';";
                $result = mysqli_query($connection, $sql);
            ?>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>Total</td>
            <td><?php 
                $row = mysqli_fetch_array($result);
                echo $row['total_quantity'];                
            ?></td>
            <td><?php
                if (!(function_exists('rupiah'))) {
                function rupiah($angka) {
                        $hasil_rupiah = "Rp " . number_format($angka, 2, ',', '.');
                        return $hasil_rupiah;
                    } 
                }

                echo rupiah($row['total_price']);

                $updateSaldo = "UPDATE user SET saldo = '$row[total_price]' WHERE username='$_SESSION[username]' AND role='company'";
                mysqli_query($connection, $updateSaldo);
            ?></td>
        </table>
</div>
</body>

<script>
    window.print();
</script>