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
<title>www.SriLankan Camping.lk</title>
<head>
   

  <style>
        

        .reset-box {
            margin-left: 500px;    
            background: #fff;
            padding: 30px;
            border-radius: 6px;
            box-shadow: 0 0 10px rgba(240, 5, 5, 0.15);
            max-width: 600px;
            width: 100%;
        }

        .lock-icon {
            font-size: 120px;
            color: #ccc;
            text-align: center;
        }

        .btn-continue {
            background-color: #212529;
            color: white;
        }

        .btn-continue:hover {
            background-color: #000;
            color: white;
        }
    </style>
</head>
<body>


<div class="reset-card">

 
    <div class="reset-box">
        <h2 style="margin-left: 100px;">Welcome Back to camp life</h2>
    <h2 class="text-center mb-4 fw-bold">Reset Password</h2>

    <div class="row align-items-center">
        <!-- Lock Icon -->
        <div class="col-md-4 text-center mb-3 mb-md-0">
            <i class="bi bi-lock-fill lock-icon"></i>
        </div>



       <form action="forget_process.php" method="post">
        <div class="col-md-8">

        <div class="mb-3">
                <label class="form-label">Old Password</label>
                <input type="password" name="olpass" class="form-control" placeholder="Password">
            </div>
            <div class="mb-3">
                <label class="form-label">New Password</label>
                <input type="password" name="newpass" class="form-control" placeholder="Password">
            </div>

            <div class="mb-4">
                <label class="form-label">Confirm New Password</label>
                <input type="password" name="copass" class="form-control" placeholder="Password">
            </div>

            <div class="d-flex gap-3">
                <button class="btn btn-success px-4">Continue</button>
               
            </div>


            </form>


           
        </div>
         <div class="d-flex gap-3" style="margin-top: 40px; margin-left:450px">
                
                <a href="login.php"><button class="btn btn-outline-danger px-4" style="margin-bottom:20px" type="reset">Cancel</button></a>
            </div>
    </div>
</div>
 
<?php include 'footer.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
