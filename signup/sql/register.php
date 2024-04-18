<?php
    if (isset($_POST['submit'])) {

        include '../../library/dbconn.php';

        date_default_timezone_set("Asia/Colombo");

        $fName = mysqli_real_escape_string($conn, $_POST['fname']);
        $lName = mysqli_real_escape_string($conn, $_POST['lname']);
        $tel = mysqli_real_escape_string($conn, $_POST['tel']);
        $dob = mysqli_real_escape_string($conn, date_format(date_create($_POST['dob']), "Y-m-d"));
        $address = mysqli_real_escape_string($conn, $_POST['address']);
        $city = mysqli_real_escape_string($conn, $_POST['city']);
        $postalcode = mysqli_real_escape_string($conn, $_POST['postalcode']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, password_hash($_POST['password'], PASSWORD_DEFAULT));
        $regdate = mysqli_real_escape_string($conn, date("Y-m-d H:i:s"));
        $status = "active";

        // Check if user is already exists
        $sql1 = "SELECT email FROM `users` WHERE email='$email'";
        $email_result = mysqli_query($conn, $sql1);

        if (mysqli_num_rows($email_result) > 0) {

            header("Location: ../index.php?error=userexist");

        } else {

            $sql2 = "INSERT INTO `users` (`fname`, `lname`, `phone`, `dob`, `address`, `city`, `postalcode`, `email`, `password`, `regdate`, `status`) VALUES ('$fName', '$lName', '$tel', '$dob', '$address', '$city', '$postalcode', '$email', '$password', '$regdate', '$status')";

            mysqli_query($conn, $sql2);

            // Get ID of user and start the session
            $sql3 = "SELECT id FROM `users` WHERE email='$email'";
            $id_result = mysqli_query($conn, $sql1);
            $user_id = mysqli_fetch_row($id_result)[0];

            session_start();
            $_SESSION['user'] = $user_id;

    
            header("Location: ../../products");

        }

    }
?>