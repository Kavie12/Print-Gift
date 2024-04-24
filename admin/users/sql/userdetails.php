<?php

session_start();

if (isset($_SESSION['admin'])) {

    include '../../../library/sql/dbconn.php';

    $id = $_GET['id'];

    $sql = "SELECT fname, lname, phone, dob, address, city, postalcode FROM users WHERE id = $id";

    $result = mysqli_query($conn, $sql);

    echo json_encode(mysqli_fetch_assoc($result));

}


?>