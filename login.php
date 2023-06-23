<?php
include 'connection.php';
    if (isset($_POST['login'])) {
        $username = $_POST['usernameLogin'];
        $password = $_POST['passwordLogin'];
        $hash_sha = sha1($password);

        $query = "SELECT * FROM user WHERE username='$username'";
        $result = mysqli_query($connection, $query) or die("Error");
        $data = mysqli_fetch_array($result);

            if($username == $data['username'] && $hash_sha == $data['password']) {
                $_SESSION['id'] = $data['id'];
                $_SESSION['login'] = true;
                $_SESSION['username'] = $data['username'];
                $_SESSION['password'] = $data['password'];
                $_SESSION['name'] = $data['fullname'];
                $_SESSION['role'] = $data['role'];
                $_SESSION['email'] = $data['email'];
                header('location: index.php');
            } else {
                echo "<script>alert('Username or password is wrong!'); window.location.href='index.php'; </script>";
            }
        }
?>