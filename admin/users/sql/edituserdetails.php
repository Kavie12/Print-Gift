<?php

    session_start();

    if (isset($_SESSION['admin']) && isset($_POST['submit'])) {

        include '../../../library/sql/dbconn.php';

        date_default_timezone_set("Asia/Colombo");

        $id = $_GET['id'];

        $fname = mysqli_real_escape_string($conn, $_POST['fname']);
        $lname = mysqli_real_escape_string($conn, $_POST['lname']);
        $tel = mysqli_real_escape_string($conn, $_POST['tel']);
        $dob = date_format(date_create($_POST['dob']), "Y-m-d");
        $address = mysqli_real_escape_string($conn, $_POST['address']);
        $city = mysqli_real_escape_string($conn, $_POST['city']);
        $postalcode = mysqli_real_escape_string($conn, $_POST['postalcode']);

        $updatedate = date("Y-m-d H:i:s");

        if ($_POST['password'] == "") {

            $sql = "UPDATE `users` SET fname='$fname', lname='$lname', phone='$tel', dob='$dob', address='$address', city='$city', postalcode='$postalcode', updatedate='$updatedate' WHERE id='$id'";

        } else {

            $password = password_hash(mysqli_real_escape_string($conn, $_POST['password']), PASSWORD_DEFAULT);
            
            $sql = "UPDATE `users` SET fname='$fname', lname='$lname', phone='$tel', dob='$dob', address='$address', city='$city', postalcode='$postalcode', password='$password', updatedate='$updatedate' WHERE id='$id'";

        }

        mysqli_query($conn, $sql);


        header("Location: ../userprofile.php?id=$id");

    }
?>