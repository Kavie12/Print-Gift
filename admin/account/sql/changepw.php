<?php

session_start();

if (isset($_SESSION['admin'])) {

    include '../../../library/sql/dbconn.php';

    $password = password_hash(mysqli_real_escape_string($conn, $_POST['password']), PASSWORD_DEFAULT);

    $sql = "UPDATE admin SET password = '$password' WHERE id = 1";

    mysqli_query($conn, $sql);


    header("Location: ../");

}


?>