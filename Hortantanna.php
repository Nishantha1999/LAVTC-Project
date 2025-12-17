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

    <h2 class="section-title">popular camping sites in Hortanthanna, Sri Lanka</h2>

    <div class="product-grid">

        <div class="product-card">
            <img src="./img/Forest department camp site Ohiya.jpg">
            <div class="product-title">Forest department camp site Ohiya</div>
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
            <img src="./img/Bambara Ella Agro Resort & Camping.jpg">
            <div class="product-title">Bambara Ella Agro Resort & Camping</div>
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
            <img src="./img/Teepee The Camp Site.jpg">
            <div class="product-title">Teepee The Camp Site</div>
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
            <img src="./img/Idalgashinna campsite.jpg">
            <div class="product-title">Idalgashinna campsite</div>
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
            <img src="./img/Wewatenna Camping Site.jpg">
            <div class="product-title">Wewatenna Camping Site</div>
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
            <img src="./img/Bopaththalawa famous campsite.jpg">
            <div class="product-title">Bopaththalawa famous campsite</div>
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
            <img src="./img/Horton Plains Camp Site 2.jpg">
            <div class="product-title">Horton Plains Camp Site 2</div>
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
            <img src="./img/Horton Plains Camp Site 1.jpg">
            <div class="product-title">Horton Plains Camp Site 1</div>
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