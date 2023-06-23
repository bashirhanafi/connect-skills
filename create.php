<?php
    include 'connection.php';
    $id = "";
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $hash_sha = sha1($password);
    $saldo = 1000000;

    function role() {
        if(isset($_POST['signupUser'])) {
            $role = 'user';
        } else if(isset($_POST['signupCompany'])) {
            $role = 'company';
        }

        return $role;
    }

    $role = role();

    $query_username = "SELECT * FROM user WHERE username = '$username'";
    $query_email = "SELECT * FROM user WHERE email = '$email'";
    $result_email = mysqli_query($connection, $query_email);
    $result_username = mysqli_query($connection, $query_username);

    if(mysqli_num_rows($result_email) > 0 || mysqli_num_rows($result_username) > 0) {
        if(mysqli_num_rows($result_username) > 0 && mysqli_num_rows($result_email) > 0) {
            echo "<script>alert('Username and email already exists.'); window.location.href='index.php'; </script>";
        } else if(mysqli_num_rows($result_username) > 0) {
            echo "<script>alert('Username already exists.'); window.location.href='index.php'; </script>";
        } else if(mysqli_num_rows($result_email) > 0) {
            echo "<script>alert('Email already exists.'); window.location.href='index.php'; </script>";
        }
    } else {
        if(empty($fullname) or empty($username) or empty($email) or empty($password)) {

        } else {
            $query = "INSERT INTO user VALUES('$id','$fullname', '$username', '$email', '$hash_sha', '$role','$saldo')";
            mysqli_query($connection, $query);
            echo "<script>alert('New account is successfully created! Please login'); window.location.href='index.php'; </script>";
        }
    }
?>