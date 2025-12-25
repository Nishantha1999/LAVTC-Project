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
    cursor: pointer; /* cursor indicates clickable */
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
    .product-grid { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 576px) {
    .product-grid { grid-template-columns: 1fr; }
}
#mapContainer {
    display: none;
    margin: 50px auto;
    max-width: 1000px;
}
</style>
</head>

<body>
<?php include 'hedear.php'; ?>

<h2 class="section-title">popular camping sites in Narangala, Sri Lanka</h2>

<div class="product-grid">

    <!-- Each image now has a data-location attribute -->
    <div class="product-card">
        <img src="./img/Narangala1.jpg"
             data-location="Local Village Field Camps, Narangala, Sri Lanka"
             onclick="showMap(this)">
        <div class="product-title">Local Village Field Camps</div>
        <div class="product-price">Free</div>
        <div class="stars">
            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            <i class="bi bi-star"></i>
        </div>
    </div>

    <div class="product-card">
        <img src="./img/Narangala2.jpg"
             data-location="Grassland Overlook Spots, Narangala, Sri Lanka"
             onclick="showMap(this)">
        <div class="product-title">Grassland Overlook Spots</div>
        <div class="product-price">Free</div>
        <div class="stars">
            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i><i class="bi bi-star"></i>
            <i class="bi bi-star"></i>
        </div>
    </div>

    <div class="product-card">
        <img src="./img/Wewatenna Camping site1.jpg"
             data-location="Wewatenna Camping site1, Narangala, Sri Lanka"
             onclick="showMap(this)">
        <div class="product-title">Wewatenna Camping site1</div>
        <div class="product-price">Free</div>
        <div class="stars">
            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            <i class="bi bi-star"></i><i class="bi bi-star"></i>
            <i class="bi bi-star"></i>
        </div>
    </div>

    <div class="product-card">
        <img src="./img/Keenakele Trailhead Camps.jpg"
             data-location="Keenakele Trailhead Camps, Narangala, Sri Lanka"
             onclick="showMap(this)">
        <div class="product-title">Keenakele Trailhead Camps</div>
        <div class="product-price">Free</div>
        <div class="stars">
            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i><i class="bi bi-star"></i>
            <i class="bi bi-star"></i>
        </div>
    </div>

    <div class="product-card">
        <img src="./img/Narangala3.jpg"
             data-location="Thangamale Hike Base Camp, Narangala, Sri Lanka"
             onclick="showMap(this)">
        <div class="product-title">Thangamale Hike Base Camp</div>
        <div class="product-price">Free</div>
        <div class="stars">
            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
        </div>
    </div>

    <div class="product-card">
        <img src="./img/Summit Ridge Campsites.jpg"
             data-location="Narangale main, Narangala, Sri Lanka"
             onclick="showMap(this)">
        <div class="product-title">Narangale main</div>
        <div class="product-price">Free</div>
        <div class="stars">
            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            <i class="bi bi-star"></i>
        </div>
    </div>

    <div class="product-card">
        <img src="./img/Narangala.jpg"
             data-location="Narangala, Sri Lanka"
             onclick="showMap(this)">
        <div class="product-title">Narangala</div>
        <div class="product-price">Free</div>
        <div class="stars">
            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            <i class="bi bi-star"></i>
        </div>
    </div>

    <div class="product-card">
        <img src="./img/Narangala Mountain Campground.jpg"
             data-location="Narangala Mountain Campground, Sri Lanka"
             onclick="showMap(this)">
        <div class="product-title">Narangala Mountain Campground</div>
        <div class="product-price">Free</div>
        <div class="stars">
            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            <i class="bi bi-star"></i>
        </div>
    </div>

</div>

<!-- MAP CONTAINER -->
<div id="mapContainer">
    <h4 style="text-align:center; color:#3a5a78;">Selected Location</h4>
    <iframe id="mapFrame" width="100%" height="400" style="border:0;" loading="lazy"></iframe>
</div>



<?php include 'footer.php'; ?>

<script>
function showMap(img) {
    const location = img.getAttribute("data-location");
    document.getElementById("mapContainer").style.display = "block";
    document.getElementById("mapFrame").src =
        "https://www.google.com/maps?q=" + encodeURIComponent(location) + "&output=embed";
    document.getElementById("mapContainer").scrollIntoView({ behavior: "smooth" });
}
</script>

</body>
</html>
