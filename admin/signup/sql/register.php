<?php
    if (isset($_POST['submit'])) {

        include '../../../library/sql/dbconn.php';

        date_default_timezone_set("Asia/Colombo");

        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = password_hash(mysqli_real_escape_string($conn, $_POST['password']), PASSWORD_DEFAULT);
        $status = "active";

        // Check if user is already exists
        $sql1 = "SELECT username FROM `admin` WHERE username='$username' AND status='active'";
        $username_result = mysqli_query($conn, $sql1);

        if (mysqli_num_rows($username_result) > 0) {

            header("Location: ../index.php?error=userexist");

        } else {

            $sql2 = "INSERT INTO `admin` (`username`, `password`, `status`) VALUES ('$username', '$password', '$status')";

            mysqli_query($conn, $sql2);

            // Get ID of user and start the session
            $sql3 = "SELECT id FROM `admin` WHERE username='$username'";
            $id_result = mysqli_query($conn, $sql3);
            $admin_id = mysqli_fetch_row($id_result)[0];

            session_start();
            $_SESSION['admin'] = $admin_id;

    
            header("Location: ../../");

        }

    }
?>