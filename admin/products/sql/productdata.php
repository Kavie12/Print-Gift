<?php

session_start();

if (isset($_SESSION['admin'])) {
    include '../../../library/sql/dbconn.php';

    $id = $_GET['id'];
    
    $sql = "SELECT title, category, description, price FROM `items` WHERE id='$id'";
    
    $result = mysqli_query($conn, $sql);
    
    $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
    
    echo json_encode($data);
}



?>