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
            font-family: Arial, sans-serif;
            background: #ffffff;
            margin: 0;
            padding: 0;
        }

        .section-title {
            text-align: center;
            font-size: 26px;
            margin: 40px 0;
            color: #3a5a78;
            text-transform: lowercase;
        }

        .product-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 30px;
            max-width: 1200px;
            margin: auto;
            padding-bottom: 60px;
        }

        .product-card {
            border: 1px solid #3a5a78;
            padding: 20px;
            text-align: center;
        }

        .product-card img {
            width: 150px;
            height: 150px;
            object-fit: contain;
            margin-bottom: 15px;
        }

        .product-title {
            font-size: 18px;
            color: #3a5a78;
            margin-bottom: 8px;
        }

        .product-price {
            color: #1ecb00;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .stars i {
            color: #4a5d73;
            font-size: 14px;
        }

        @media (max-width: 992px) {
            .product-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 576px) {
            .product-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>

    <h2 class="section-title">popular camping sites in Hulangala, Sri Lanka</h2>

    <div class="product-grid">

        <div class="product-card">
            <img src="./img/Hulangala Mini World’s End (Summit Camping).jpg">
            <div class="product-title">Hulangala Mini World’s End (Summit Camping)</div>
            <div class="product-price">Free</div>
            <div class="stars">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star"></i>
            </div>
        </div>

        <div class="product-card">
            <img src="./img/Adjacent Hilltop Spots (Unnamed Clearings).jpg">
            <div class="product-title">Adjacent Hilltop Spots (Unnamed Clearings)</div>
            <div class="product-price">Free</div>
            <div class="stars">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star"></i>
                <i class="bi bi-star"></i>
            </div>
        </div>

        <div class="product-card">
            <img src="./img/Estate Line House Camps.jpg">
            <div class="product-title">Estate Line House Camps</div>
            <div class="product-price">Free</div>
            <div class="stars">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
               <i class="bi bi-star"></i>
                <i class="bi bi-star"></i>
                <i class="bi bi-star"></i>
            </div>
        </div>

        <div class="product-card">
            <img src="./img/Knuckles Foothills Nearby.webp">
            <div class="product-title">Knuckles Foothills Nearby</div>
            <div class="product-price">Free</div>
            <div class="stars">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star"></i>
                <i class="bi bi-star"></i>
            </div>
        </div>

        <div class="product-card">
            <img src="./img/Hulangala Ridge Camps.jpg">
            <div class="product-title">Hulangala Ridge Camps</div>
            <div class="product-price">Free</div>
            <div class="stars">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                 <i class="bi bi-star-fill"></i>
            </div>
        </div>

        <div class="product-card">
            <img src="./img/Yatawatta Biso Ella Waterfall Camping.jpg">
            <div class="product-title">Yatawatta Biso Ella Waterfall Camping</div>
            <div class="product-price">Free</div>
            <div class="stars">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star"></i>
            </div>
        </div>

        <div class="product-card">
            <img src="./img/Tea Estate Clearing Camps.jpg">
            <div class="product-title">Tea Estate Clearing Camps</div>
            <div class="product-price">Free</div>
            <div class="stars">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star"></i>
            </div>
        </div>

        <div class="product-card">
            <img src="./img/Hulangala Base Camp (Trailhead Flats).jpg">
            <div class="product-title">Hulangala Base Camp (Trailhead Flats)</div>
            <div class="product-price">Free</div>
            <div class="stars">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star"></i>
            </div>
        </div>

    </div>
<a href="product.php"><button class="call-btn"
style="border-radius:30px ; margin-left: 1200px; background:#4a5d73; color: #ffffff;">Product Order...>>></button></a>


    <?php include 'footer.php'; ?>
</body>
</html>