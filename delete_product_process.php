<?php
$con = mysqli_connect("localhost","root","","slcamping_project");
if (!$con) {
    die("Connection error");
}

$id = $_POST['id'];

mysqli_query($con, "DELETE FROM products WHERE id='$id'");

header("Location: admin_price_update.php");
exit;
?>
