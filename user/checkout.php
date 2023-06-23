<?php
    include '../connection.php';
    session_start();
    date_default_timezone_set("Asia/Jakarta");

    $id = "#".bin2hex(random_bytes(3));
    $id_transaction = "";
    $date =  date("Y/m/d");
    $time = date("H:i:s");

    $sql = "INSERT INTO header_transaction VALUES('$id','$date','$time');";
    $sql2 = "UPDATE user SET saldo='$_SESSION[saldo]'- '$_SESSION[grandtotal]' WHERE username='$_SESSION[username]'";    
    $query = mysqli_query($connection, $sql);
    $query2 = mysqli_query($connection, $sql2);
    $id_header_transaction = $id;

    foreach ($_SESSION["cart"] as $cart => $val) {
        # code...
        $sql = "INSERT INTO detail_transaction VALUES('$id_transaction', '$id_header_transaction', '$cart', '{$val['customer']}', '{$val['company']}', '{$val['quantity']}');";
        $query = mysqli_query($connection, $sql);
    }

    unset($_SESSION["cart"]);    
    echo "<script>alert('Success!'); window.location.href='cart.php'; </script>";
?>  