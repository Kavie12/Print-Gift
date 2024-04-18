<?php

if (isset($_POST['loginbtn'])) {

    include '../../library/sql/dbconn.php';

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $sql = "SELECT id, email, password FROM `users` WHERE email='$email'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            if (password_verify($password, $row['password'])) {
                session_start();
                $_SESSION['user'] = $row['id'];
                header("Location: ../../products");
            } else {
                header("Location: ../index.php?error=1");
            }
        }
    } else {
        header("Location: ../index.php?error=1");
    }




}