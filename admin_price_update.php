<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="icon" href="./img/logo.png" type="icon/x-image">
<title>Admin | Product Management</title>

<style>
table {
    width: 100%;
    border-collapse: collapse;
    font-size: 14px;
    background-color: #ffffff;
}
table th {
    background-color: #1f8fa3;
    color: #ffffff;
    padding: 12px 10px;
    border: 1px solid #d0e4ea;
}
table td {
    padding: 10px;
    border: 1px solid #d0e4ea;
}
table tr:nth-child(even) td { background-color: #f0f0f0; }
table tr:hover td { background-color: #e6f4f7; }
</style>
</head>

<body>

<?php include 'Admin_header.php'; ?>

<div class="container mt-4">

<!-- 🔹 ADD PRODUCT FORM -->
<h4 class="mb-3">Add New Product</h4>
<form method="post" action="add_product_process.php" class="row g-2 mb-4">

    <div class="col-md-3">
        <input type="text" name="name" class="form-control" placeholder="Product Name" required>
    </div>

    <div class="col-md-2">
        <input type="text" name="code" class="form-control" placeholder="Code" required>
    </div>

    <div class="col-md-3">
        <input type="text" name="image" class="form-control" placeholder="Image name (example.jpg)" required>
    </div>

    <div class="col-md-2">
        <input type="number" step="0.01" name="price" class="form-control" placeholder="Price" required>
    </div>

    <div class="col-md-2">
        <button type="submit" class="btn btn-success w-100">Add Item</button>
    </div>

</form>

<!-- 🔹 PRODUCT TABLE -->
<h4 class="mb-3">Update / Delete Products</h4>

<?php
$con = mysqli_connect("localhost","root","","slcamping_project");
if (!$con) { die("Database connection error"); }

$res = mysqli_query($con, "SELECT * FROM products");

echo "<table>";
echo "<tr>
        <th>Name</th>
        <th>Code</th>
        <th>Price</th>
        <th>Update</th>
        <th>Delete</th>
      </tr>";

while ($row = mysqli_fetch_assoc($res)) {
    echo "<tr>

    <!-- UPDATE -->
    <form method='post' action='update_price_process.php'>
        <td>{$row['name']}</td>
        <td>{$row['code']}</td>
        <td>
            <input type='number' step='0.01' name='price'
                   value='{$row['price']}'
                   class='form-control form-control-sm'>
            <input type='hidden' name='id' value='{$row['id']}'>
        </td>
        <td>
            <button class='btn btn-sm btn-primary'>Update</button>
        </td>
    </form>

    <!-- DELETE -->
    <form method='post' action='delete_product_process.php'
          onsubmit=\"return confirm('Delete this product?');\">
        <input type='hidden' name='id' value='{$row['id']}'>
        <td>
            <button class='btn btn-sm btn-danger'>Delete</button>
        </td>
    </form>

    </tr>";
}

echo "</table>";
?>

</div>

<?php include 'footer.php'; ?>
</body>
</html>
