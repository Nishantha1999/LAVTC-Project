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


<?php include 'hedear.php'; ?>



<div class="container min-vh-100 d-flex align-items-center justify-content-center">
    <div class="card shadow-lg border-0" style="max-width: 1100px; width: 100%;">
        <div class="row g-0">

            <!-- left includ Image  -->
            <div class="col-md-6 d-none d-md-block">
                <img
                style=" border-radius: 30px;"
                    src="./img/sigiriya.jpg"
                    alt="Office"
                    class="img-fluid h-100 w-100 object-fit-cover rounded-start"
                >
            </div>

            <!-- right include Section -->
            <div class="col-md-6 p-5">
                <h3 class="fw-bold mb-3">Contact us</h3>
                <p class="text-muted mb-4">
                    For all general inquiries, use this form. Throughout working hours, we continuously keep an eye on these responses.
                </p>

                <form>
                   
                    <div class="mb-3">
                        <label class="form-label">Full Name *</label>
                        <input type="text" class="form-control" placeholder="Enter your name" required>
                    </div>

                  
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Email *</label>
                            <input type="email" class="form-control" placeholder="Enter your email" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Phone Number *</label>
                            <input type="tel" class="form-control" placeholder="Enter your number" required>
                        </div>
                    </div>

                  
                    <div class="mb-4">
                        <label class="form-label">Message *</label>
                        <textarea class="form-control" rows="4" placeholder="Enter your message" required></textarea>
                    </div>

                    
                    <button
                        type="submit"
                        class="btn btn-primary px-4"
                        style="background-color: #8b5cf6; border: none;"
                    >
                        Send Your Message
                    </button>
                </form>
            </div>

        </div>
    </div>
</div>

<?php include 'footer.php'; ?>

<script src="js/main.js"></script>
</body>
</html>
