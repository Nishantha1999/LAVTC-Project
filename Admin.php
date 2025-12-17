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
<title>Campie | Login</title>
</head>

<body>

<!-- HEADER -->

<?php include 'hedear.php'; ?>



    <style>
        body {
            background-color: #ffffff;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            min-height: 100vh;
            padding-top: 50px;
        }
        .container {
            max-width: 900px;
            background-color: #f8f9fa;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.1);
        }
        .table img {
            width: 100px;
            height: auto;
            border-radius: 8px;
        }
        .modal-header {
            background-color: #0d6efd;
            color: white;
        }
        .btn-add {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2 class="text-center mb-4">Admin Panel - Manage Items</h2>
    <button class="btn btn-primary btn-add" data-bs-toggle="modal" data-bs-target="#addModal">Add New Item</button>
    
    <table class="table table-bordered table-hover">
        <thead class="table-dark">
            <tr>
                <th>Image</th>
                <th>Price (LKR)</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody id="itemTable">
            <!-- Items will be dynamically added here -->
        </tbody>
    </table>
</div>

<!-- Add Item Modal -->
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addModalLabel">Add New Item</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="addForm">
            <div class="mb-3">
                <label for="imageURL" class="form-label">Image URL</label>
                <input type="text" class="form-control" id="imageURL" required>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price (LKR)</label>
                <input type="number" class="form-control" id="price" required>
            </div>
            <button type="submit" class="btn btn-success w-100">Add Item</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Update Item Modal -->
<div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="updateModalLabel">Update Item</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="updateForm">
            <div class="mb-3">
                <label for="updateImageURL" class="form-label">Image URL</label>
                <input type="text" class="form-control" id="updateImageURL" required>
            </div>
            <div class="mb-3">
                <label for="updatePrice" class="form-label">Price (LKR)</label>
                <input type="number" class="form-control" id="updatePrice" required>
            </div>
            <input type="hidden" id="updateIndex">
            <button type="submit" class="btn btn-primary w-100">Update Item</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap JS & Dependencies -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>




    <br>


<!--Footer-->
<?php include 'footer.php'; ?>


<script src="js/main.js"></script>

</body>
</html>
