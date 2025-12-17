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
<!-- HEADER -->

<?php include 'hedear.php'; ?>



<body>

<div class="container-fluid min-vh-100">
    <div class="row min-vh-100">

        <!-- LEFT: Registration Form -->
        <div class="col-md-6 d-flex justify-content-center align-items-center bg-white">
            <div class="w-75">

                <h6 class="fw-bold mb-4">Life in the camp</h6>

                <h3 class="fw-bold">Sign up now</h3>
                <p class="text-muted mb-4">Create a free account</p>

                <button class="btn btn-outline-secondary w-100 mb-3">
                    <img src="https://www.gstatic.com/firebasejs/ui/2.0.0/images/auth/google.svg"
                         width="18" class="me-2">
                    Sign Up With Google
                </button>

                <div class="d-flex align-items-center my-3">
                    <hr class="flex-grow-1">
                    <span class="px-2 text-muted">or</span>
                    <hr class="flex-grow-1">
                </div>

                <form>
                    <div class="mb-3">
                        <label class="form-label">Email address</label>
                        <input type="email" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control">
                    </div>

                    <div class="mb-4">
                        <label class="form-label">Repeat password</label>
                        <input type="password" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-dark w-100">
                        Sign Up
                    </button>
                </form>

            </div>
        </div>

        <!-- RIGHT: Image Section -->
        <div class="col-md-6 d-none d-md-flex text-white align-items-end"
             style="
                background-image: url('./img/r1.jpg');
                background-size: cover;
                background-position: center;
                 border-radius: 30px;
             ">
            <div class="p-5"
            style="color:#ffff">
                <h2 class="fw-bold">Bring your ideas to life.</h2>
                <p>Build today what tomorrow will remember.</p>
            </div>
        </div>

    </div>
</div>






<!--Footer-->
<?php include 'footer.php'; ?>
<script src="js/main.js">
    
</script>
</body>
</html>
