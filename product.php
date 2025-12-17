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



<style>
        body {
            margin: 0;
            padding: 40px;
            background-color: #ffffff;
            font-family: Arial, sans-serif;
        }

        .grid-container {
            max-width: 1200px;
            margin: auto;
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
        }

        .card {
            border: 1px solid #e0e0e0;
            background: #ffffff;
            padding: 10px;
        }

        .card img {
            width: 100%;
            height: 160px;
            object-fit: cover;
            display: block;
        }

        .card-title {
            font-size: 14px;
            font-weight: bold;
            margin: 8px 0 4px 0;
            color: #333333;
        }

        .card-text {
            font-size: 12px;
            color: #888888;
        }

        @media (max-width: 992px) {
            .grid-container {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 576px) {
            .grid-container {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>

    <div class="grid-container">

        <div class="card">
            <img src="./img/bag.jpg" alt="Laptop">
            <div class="card-title">Bags</div>
            <div class="card-text">Co-No:5342</div>
        </div>

        <div class="card">
            <img src="./img/tent.jpg" alt="Cloth">
            <div class="card-title">Tents</div>
            <div class="card-text">Co-No:7683</div>
        </div>

        <div class="card">
            <img src="./img/bysicles.jpg" alt="Laptop">
            <div class="card-title">Bysicle</div>
            <div class="card-text">Co-No:5749</div>
        </div>

        <div class="card">
            <img src="./img/boot.jpg" alt="Shoe">
            <div class="card-title">Boots</div>
            <div class="card-text">Co-No:5365</div>
        </div>

        <div class="card">
            <img src="./img/roasting pans.jpg" alt="Cloth">
            <div class="card-title">roasting pans</div>
            <div class="card-text">Co-No:53429</div>
        </div>

        <div class="card">
            <img src="./img/tree weel.jpg" alt="Shoe">
            <div class="card-title">tree weel</div>
            <div class="card-text">Co-No:5324</div>
        </div>

        <div class="card">
            <img src="./img/boat.jpg" alt="Laptop">
            <div class="card-title">Boat</div>
            <div class="card-text">Co-No:5340</div>
        </div>

        <div class="card">
            <img src="./img/toach.jpg" alt="Shoe">
            <div class="card-title">Torches</div>
            <div class="card-text">Co-No:5347</div>
        </div>

    </div>


<a href="order.php"><button class="call-btn"
style="border-radius:30px ; margin-left: 1200px; margin-top: 20px; background:#4a5d73; color: #ffffff;">Order Now...>>></button></a>


    
    <?php include 'footer.php'; ?>
</body>
</html>