<?php
    include '../connection.php';
    session_start();

    $id = $_GET['id'];
    $_SESSION['cid'] = $id;
    
    // total click
    $query_click = "UPDATE course SET total_clicked = total_clicked + 1 WHERE id='$id';";
    mysqli_query($connection, $query_click);
    
    $sql = "SELECT *, course.id AS id_course FROM course INNER JOIN user ON course.user_id = user.id WHERE course.id='$id'";
    $query = mysqli_query($connection, $sql);
    $result = mysqli_fetch_array($query);
    
    $_SESSION["cart"][$id] = [
        'photo' => $result['photo'],
        'course_name' => $result['course_name'],
        'company' => $result['fullname'],
        'price' => $result['price'],
        'customer' => $_SESSION['username'],
        'quantity' => 1,
    ];

    header("location: ./cart.php");
?>