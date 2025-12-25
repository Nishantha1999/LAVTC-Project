<?php
session_start();

if (!isset($_SESSION['user_id']) && !isset($_SESSION['username'])) {
    header('Location: login.php');
    exit;
}

$con = mysqli_connect("localhost","root","","slcamping_project");
if (!$con) {
    die("Database connection error");
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="css/styles.css">
<link rel="icon" href="./img/logo.png" type="icon/x-image">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
<title>www.SriLankanCamping.lk</title>

<style>
body {
    margin: 0;
    padding: 40px;
    background-color: #ffffff;
    font-family: Arial, sans-serif;
}
.grid-container {
    max-width: 1200px;
    margin: auto;
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
}
.card {
    border: 1px solid #e0e0e0;
    background: #ffffff;
    padding: 10px;
}
.card img {
    width: 100%;
    height: 160px;
    object-fit: cover;
}
.card-title {
    font-size: 14px;
    font-weight: bold;
    margin: 8px 0 4px 0;
}
.card-text {
    font-size: 12px;
    color: #888888;
}
@media (max-width: 992px) {
    .grid-container { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 576px) {
    .grid-container { grid-template-columns: 1fr; }
}
</style>
<?php include 'hedear.php'; ?>
</head>

<body>

<hr>

<!-- PRODUCTS FROM DATABASE -->
<div class="grid-container">

<?php
$result = mysqli_query($con, "SELECT * FROM products");

while ($row = mysqli_fetch_assoc($result)) {
?>
    <div class="card">
        <img src="./img/<?php echo $row['image']; ?>">
        <div class="card-title"><?php echo $row['name']; ?></div>
        <div class="card-text">Co-No: <?php echo $row['code']; ?></div>
        <label class="fw-bold text-success">
            RS: <?php echo number_format($row['price'],2); ?>
        </label>
    </div>
<?php } ?>

</div>

<a href="order.php">
<button type="button" class="btn btn-outline-success"
style="margin-top:10px; float:right; margin-right:80px;">
Appointment Now
</button>
</a>

<?php include 'footer.php'; ?>

</body>
</html>
