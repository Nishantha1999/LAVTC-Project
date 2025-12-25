<?php
$con = mysqli_connect("localhost","root","","slcamping_project");
if (!$con) {
    die("Connection error");
}

$name  = $_POST['name'];
$code  = $_POST['code'];
$image = $_POST['image'];
$price = $_POST['price'];

$query = "INSERT INTO products (name, code, image, price)
          VALUES ('$name', '$code', '$image', '$price')";

mysqli_query($con, $query);

header("Location: admin_price_update.php");
exit;
?>
