<?php

session_start();

if (isset($_SESSION['user'])) {

    $uid = $_SESSION['user'];
    $pid = $_GET['pid'];
    $text = $_POST['printing_text'];
    $color = $_POST['printing_text_color'];
    $wrap = 0;
    if (isset($_POST['item_wrap'])) {
        $wrap = 1;
    }
    $comments = $_POST['additional_info'];
    $qty = $_POST['item_qty'];

    include '../../library/sql/dbconn.php';

    if (!is_uploaded_file($_FILES['printing_image']['tmp_name'])) {
        $sql = "INSERT INTO cart (uid, pid, text, color, wrap, comments, qty) VALUES ('$uid', '$pid', '$text', '$color', '$wrap', '$comments', '$qty')";
    } else {
        $img = basename($_FILES['printing_image']['name']);
        move_uploaded_file($_FILES['printing_image']['tmp_name'], '../../images/uploads/printing_images/' . $img);

        $sql = "INSERT INTO cart (uid, pid, text, color, img, wrap, comments, qty) VALUES ('$uid', '$pid', '$text', '$color', '$img', '$wrap', '$comments', '$qty')";
    }

    mysqli_query($conn, $sql);

    header("Location: ../../cart/");

}




?>