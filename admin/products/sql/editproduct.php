<?php
    if (isset($_POST['submit'])) {

        include '../../../library/sql/dbconn.php';

        date_default_timezone_set("Asia/Colombo");

        $title = mysqli_real_escape_string($conn, $_POST['title']);
        $category = mysqli_real_escape_string($conn, $_POST['category']);
        $desc = mysqli_real_escape_string($conn, $_POST['desc']);
        $price = $_POST['price'];
        $updatedate = date("Y-m-d H:i:s");

        if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
            $img_name = rand(10000, 99999) . '_' . basename($_FILES["image"]["name"]);
            if (!move_uploaded_file($_FILES["image"]["tmp_name"], "../../../images/uploads/items/" . $img_name)) {
                die("Error uploading image!");
            }
    
            $sql = "UPDATE `items` SET title='$title', category = '$category', description = '$desc', price = '$price', img = '$img_name', updated_date = '$updatedate'";
        } else {
            $sql = "UPDATE `items` SET title='$title', category = '$category', description = '$desc', price = '$price', updated_date = '$updatedate'";
        }

        mysqli_query($conn, $sql);

        header("Location: ../");

    }
?>