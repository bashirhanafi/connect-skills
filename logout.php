<?php
    session_start();

    function unsetSession() {
        unset($_SESSION['id']);
        unset($_SESSION['username']);
        unset($_SESSION['login']);
        unset($_SESSION['password']);
        unset($_SESSION['name']);
        unset($_SESSION['role']);
        unset($_SESSION['email']);

        return True;
    }

    $unset = unsetSession();
    echo $unset;

    header('location: index.php');
?>