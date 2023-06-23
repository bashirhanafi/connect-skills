<?php
    include '../connection.php';
    session_start();

    // upload file
    $extAllow = array('png','jpg','jpeg');
    $namaFile = $_FILES['berkas']['name'];
    $x = explode('.',$namaFile);
    $ext = strtolower(end($x));
    $size = $_FILES['berkas']['size'];
    $namaSementara = $_FILES['berkas']['tmp_name'];
    $dir = "../uploaded/";

    $id = random_int(40000, 49999);
    $company = $_SESSION['username'];
    $photo = $namaFile;
    $course_name = $_POST['title'];
    $category = $_POST['category'];
    $description = $_POST['description'];
    $instructor = $_POST['instructor'];
    $price = $_POST['price'];
    $total_clicked = 0;
    $user_id = $_SESSION['id'];

    if(in_array($ext, $extAllow) == true) {
        if($size < 10000000) {
            move_uploaded_file($namaSementara, $dir.$namaFile);

            $query = "INSERT INTO course VALUES('$id', '$company', '$photo', '$course_name', '$category', '$description','$instructor', '$price', $total_clicked, '$user_id')";
            mysqli_query($connection, $query);

            header('location: ../index.php');
        } else {
            echo 'size is too big!';
        }
    }
?>