<?php
$con = mysqli_connect("localhost","root","","slcamping_project");
if (!$con) {
    die("Connection error");
}

$id = $_POST['id'];
$price = $_POST['price'];

$query = "UPDATE products SET price='$price' WHERE id='$id'";
mysqli_query($con, $query);

header("Location: admin_price_update.php");
exit;
?>
