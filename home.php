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
<style>
        body {
            margin: 0;
            font-family: 'Georgia', serif;
        }

        .hero {
            min-height: 100vh;
        }

        .hero-img {
            background: url("./img/regisrer2.jpg") center/cover no-repeat;
            min-height: 100vh;
            border-radius: 40px;
            width: 700px;
            height: 200px;
        }

        .hero-content {
            padding: 100px 60px;
        }

        .hero-title {
            font-size: 2.8rem;
            font-weight: bold;
        }

        .script-text {
            font-family: 'Brush Script MT', cursive;
            font-size: 1.4rem;
        }

        .call-btn {
            background: #d9905b;
            color: white;
            border-radius: 30px;
            padding: 10px 25px;
            border: none;
        }

        .social-icons a {
            color: #000;
            margin-right: 15px;
            font-size: 1.1rem;
        }
        .call-btn{
            margin-bottom: 15px;
        }
    </style>
<body>
<!-- HEADER -->

<?php include 'hedear.php'; ?>


<div class="container-fluid hero">
    <div class="row g-0">
        
        <!-- LEFT IMAGE -->
        <div class="col-lg-6 hero-img"></div>

        <!-- RIGHT CONTENT -->
        <div class="col-lg-6 hero-content">
            <h1 class="hero-title">It's time to <span>Travel</span></h1>
            <p class="script-text">Come join us. The joy of camping.!</p>

            <div class="my-4">
                <p class="small text-muted">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.
                </p>
            </div>

            <p class="fw-bold">www.SriLankan Camping.lk</p>

            <div class="social-icons my-3">
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-twitter"></i></a>
            </div>

            <a href="location.php"><button class="call-btn">Read more...</button></a>
             <!--location find-->
             <div class="map-container">

       <!-- <h2 class="location-title">Colombo, Sri Lanka</h2>-->

        <div class="map-box">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31686.9316468356!2d79.850000!3d6.927079!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2593c8c0d3f1f%3A0x8c4d9c53b0b4c4b!2sColombo!5e0!3m2!1sen!2slk!4v1710000000000"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>
        </div>

    </div>
</div>
<!-- LANDING -->

 <!-- Middle Gallery Section -->






<!--Footer-->
<?php include 'footer.php'; ?>
<script src="js/main.js">
    
</script>
</body>
</html>
