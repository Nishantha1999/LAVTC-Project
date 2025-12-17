<!DOCTYPE html>
<html lang="en">
     <meta charset="UTF-8">
    <title>Reset Password</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">   <!-- Bootstrap Icons -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
<head>
   

    <style>
        body {
            background: transparent;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .reset-card {
            width: 100%;
            max-width: 420px;
            background: rgba(255, 255, 255, 0.95);
            border-radius: 16px;
            padding: 30px;
            box-shadow: 0 15px 40px rgba(0,0,0,0.15);
        }

        .icon-circle {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            border: 2px solid #dee2e6;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 15px;
        }

        .icon-circle i {
            font-size: 32px;
            color: #1f2a44;
        }

        .btn-dark-custom {
            background-color: #3d4658;
            border: none;
            padding: 12px;
            font-size: 16px;
        }

        .btn-dark-custom:hover {
            background-color: #2f3746;
        }

        .back-arrow {
            font-size: 22px;
            color: #6c757d;
            cursor: pointer;
        }
    </style>
</head>
<body>


<div class="reset-card">

 
    <div class="mb-3">
       <a href="login.php"> <i class="bi bi-arrow-left back-arrow"></i></a>
    </div>

    
    <div class="icon-circle">
        <i class="bi bi-lock"></i>   <!-- Icon -->
    </div>


    <h4 class="text-center fw-bold mt-3">Reset your password</h4>
    <p class="text-center text-muted mb-4">
        Enter your registered email address.
    </p>

    <div class="mb-4">
        <label class="form-label fw-medium">Email</label>
        <input type="email" class="form-control form-control-lg"
               placeholder="Enter your email address">
    </div>

    <
    <div class="d-grid">
        <button class="btn btn-dark-custom btn-lg">
            Send Code
        </button>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
