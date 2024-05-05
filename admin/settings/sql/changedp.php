<?php

session_start();

if (isset($_SESSION['admin'])) {

    include '../../../library/sql/dbconn.php';

    $delivery = mysqli_real_escape_string($conn, $_POST['delivery']);

    $sql = "UPDATE service_prices SET delivery = '$delivery' WHERE id = 1";

    mysqli_query($conn, $sql);

    header("Location: ../delivery.php");

}


?>