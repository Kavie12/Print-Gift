<?php

session_start();

if (isset($_SESSION['user'])) {

    include '../../library/sql/dbconn.php';

    $user_id = $_SESSION['user'];

    $sql = "SELECT fname, lname, phone, dob, address, city, postalcode FROM `users` WHERE id='$user_id'";

    $result = mysqli_query($conn, $sql);

    $data = mysqli_fetch_all($result, MYSQLI_ASSOC);

    echo json_encode($data);


    
}


?>
