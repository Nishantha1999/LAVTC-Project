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

<div class="container_login">
    <div class="row justify-content-center align-items-center min-vh-100">
        <div class="col-12 col-sm-10 col-md-6 col-lg-4">
            
            <div class="card shadow-sm border-0 p-4">
                <p class="text-muted mb-1">Please enter your details</p>
                <h3 class="fw-bold mb-4">Welcome to camp life</h3>

                <form>
                    <div class="mb-3">
                        <input type="email" class="form-control" placeholder="Email address">
                    </div>

                    <div class="mb-3">
                        <input type="password" class="form-control" placeholder="Password">
                    </div>

                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="remember">
                            <label class="form-check-label" for="remember">
                                Remember for 30 days
                            </label>
                        </div>
                        <a href="foget_pasword.php" class="text-decoration-none">Forgot password</a>
                    </div>

                    <div class="d-grid mb-3">
                        <button type="submit" class="btn btn-primary">
                            Log In
                        </button>
                    </div>

                    <div class="d-grid mb-3">
                        <button type="button" class="btn btn-outline-secondary">
                            <img src="https://www.svgrepo.com/show/475656/google-color.svg" alt="Google" width="18" class="me-2">
                            Sign in with Google
                        </button>
                    </div>

                    <p class="text-center text-muted mb-0">
                        Don’t have an account? please 
                        <a href="register1.php" class="text-decoration-none">Sign up</a>
                    </p>
                </form>
            </div>

        </div>
    </div>
</div>


    <br>


<!--Footer-->
<?php include 'footer.php'; ?>


<script src="js/main.js"></script>

</body>
</html>
