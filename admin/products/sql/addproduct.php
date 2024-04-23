<?php
    if (isset($_POST['submit'])) {

        include '../../../library/sql/dbconn.php';

        date_default_timezone_set("Asia/Colombo");

        $title = mysqli_real_escape_string($conn, $_POST['title']);
        $category = mysqli_real_escape_string($conn, $_POST['category']);
        $desc = mysqli_real_escape_string($conn, $_POST['desc']);
        $price = $_POST['price'];

        // Image upload
        $img_name = rand(10000, 99999) . '_' . basename($_FILES["image"]["name"]);
        if (!move_uploaded_file($_FILES["image"]["tmp_name"], "../../../images/uploads/items/" . $img_name)) {
            die("Error uploading image!");
        }

        $adddate = date("Y-m-d H:i:s");
        $status = "instock";


        $sql = "INSERT INTO `items` (`title`, `category`, `description`, `price`, `img`, `add_date`, `status`) VALUES ('$title', '$category', '$desc', '$price', '$img_name', '$adddate', '$status')";

        mysqli_query($conn, $sql);

        header("Location: ../");

    }
?>