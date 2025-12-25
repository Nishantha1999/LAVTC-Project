<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <link rel="icon" href="./img/logo.png" type="icon/x-image">
    

    <title>Product Orders</title>
    <style>
/* Table base */
table {
    width: 100%;
    border-collapse: collapse;
    font-size: 14px;
    background-color: #ffffff;
}

/* Header */
table th {
    background-color: #1f8fa3;   /* teal-blue like image */
    color: #ffffff;
    padding: 12px 10px;
    text-align: left;
    font-weight: 600;
    border: 1px solid #d0e4ea;
}

/* Table cells */
table td {
    padding: 10px;
    color: #333333;
    border: 1px solid #d0e4ea;
}

/* Zebra striping */
table tr:nth-child(even) td {
    background-color: #f0f0f0;   /* light gray rows */
}

table tr:nth-child(odd) td {
    background-color: #ffffff;
}

/* Row hover */
table tr:hover td {
    background-color: #e6f4f7;
}

/* Rounded look like card */
table {
    border-radius: 6px;
    overflow: hidden;
}

/* Responsive text */
@media (max-width: 768px) {
    table {
        font-size: 12px;
    }
}
</style>

</head>
<body>
<?php include 'Admin_header.php'; ?>

         


<?php
$con = mysqli_connect("localhost","root","","slcamping_project");

if (!$con) {
    die("Connection error");
}

$res = mysqli_query($con, "SELECT * FROM  pro_order");

echo "<table>";
echo "<tr>
        <th>Full Name</th>
        <th>Email</th>
        <th>Phone Number</th>
        <th>Item Name</th>
        <th>Item Co-No</th>
        <th>How Mutch Item</th>
        <th>Message</th>
        
      </tr>";

while ($row = mysqli_fetch_assoc($res)) {
    echo "<tr>
            
            <td>{$row['Flname']}</td>
            <td>{$row['oemail']}</td>
            <td>{$row['number']}</td>
            <td>{$row['iname']}</td>
            <td>{$row['icono']}</td>
            <td>{$row['hmitem']}</td>
            <td>{$row['omassage']}</td>
          </tr>";
}

echo "</table>";
?>
<?php include 'footer.php'; ?>
</body>
</html>
