<?php
    include '../connection.php';
    session_start();
    
    $id = $_GET['id'];

    $query = "DELETE FROM course WHERE course.id='$id';";
    mysqli_query($connection, $query);

    if(mysqli_affected_rows($connection) > 0) {
        echo "<script>
        function alertDelete() {
            return alert('Delete succesfully!');
        }

        alertDelete();
        window.location.href='courses.php'; </script>";
    } else {
        echo 'Terjadi kesalahan saat menghapus data.';
    }
?>