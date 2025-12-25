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
</head>
  <style>
       

        .login-box {
            margin-left: 600px;
            width: 350px;
            background: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.15);
            overflow: hidden;
        }

        .welcome-bar {
            background: #2ecc71;
            color: white;
            text-align: center;
            padding: 10px;
            font-weight: bold;
        }

        .login-content {
            padding: 20px;
        }

        .login-logo {
            text-align: center;
            margin-bottom: 15px;
        }

        .login-logo img {
            width: 80px;
        }

        .form-control {
            border-radius: 0;
        }

        .btn-login {
            background: #461517ff;
            color: white;
            border-radius: 0;
        }

        .links {
            font-size: 14px;
            text-align: center;
        }

        .links a {
            text-decoration: none;
        }
    </style>
</head>
<body>

<!-- HEADER -->

<?php include 'hedear.php'; ?>

 <div class="login-box">

    <!-- Logo -->
    <div class="login-logo mt-3">
        <!-- Replace with your logo -->
        <img src="./img/logo.png" alt="Logo">
    </div>

    <!-- Welcome bar -->
    <div class="welcome-bar">
        👋 Welcome to camp life
    </div>


    <form action="login_prosses.php" method="post">
    <div class="login-content">
        <?php
        if (isset($_GET['error'])) {
            $err = $_GET['error'];
            if ($err === 'missing') {
                echo '<div class="alert alert-warning">Please enter username and password.</div>';
            } elseif ($err === 'badpass') {
                echo '<div class="alert alert-danger">Incorrect password.</div>';
            } elseif ($err === 'nouser') {
                echo '<div class="alert alert-danger">Username not found.</div>';
            } else {
                echo '<div class="alert alert-info">Login error.</div>';
            }
        }
        ?>
        <div class="input-group mb-3">
            <span class="input-group-text">
                <i class="bi bi-person"></i>
            </span>
            <input type="text" name="unam" class="form-control" placeholder="Username">
        </div>

        <div class="input-group mb-2">
            <span class="input-group-text">
                <i class="bi bi-key"></i>
            </span>
            <input type="password" name="upws" class="form-control" placeholder="Password">
        </div>
            <div class="d-grid">
            <button class="btn btn-login">Login</button>
        </div>

            </form>

        <div class="links mb-3">
            <a href="foget_pasword.php">Forgot Password?</a>
            &nbsp; | &nbsp;
            <a href="register1.php">Don't have an account?</a>
        </div>

        
    </div>

</div>

    <br>


<!--Footer-->
<?php include 'footer.php'; ?>


<script src="js/main.js"></script>

</body>
</html>
