<?php

if (isset($_POST['loginbtn'])) {

    include '../../library/sql/dbconn.php';

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $sql1 = "SELECT id, email, password FROM `admin` WHERE email='$email' AND status='active'";

    $admin_result = mysqli_query($conn, $sql1);

    if (mysqli_num_rows($admin_result) > 0) {
        while ($row = mysqli_fetch_assoc($admin_result)) {
            if (password_verify($password, $row['password'])) {
                session_start();
                $_SESSION['admin'] = $row['id'];
                header("Location: ../../admin");
            } else {
                header("Location: ../index.php?error=1");
            }
        }
    } else {
        $sql2 = "SELECT id, email, password FROM `users` WHERE email='$email' AND status='active'";

        $user_result = mysqli_query($conn, $sql2);
    
        if (mysqli_num_rows($user_result) > 0) {
            while ($row = mysqli_fetch_assoc($user_result)) {
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



}

?>