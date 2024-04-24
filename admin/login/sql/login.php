<?php

if (isset($_POST['submit'])) {

    include '../../../library/sql/dbconn.php';

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $sql = "SELECT id, username, password FROM `admin` WHERE username='$username' AND status='active'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            if (password_verify($password, $row['password'])) {
                session_start();
                $_SESSION['admin'] = $row['id'];
                header("Location: ../../");
            } else {
                header("Location: ../index.php?error=1");
            }
        }
    } else {
        header("Location: ../index.php?error=1");
    }



}

?>