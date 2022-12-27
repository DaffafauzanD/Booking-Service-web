<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT.Onder Jaya</title>
    <style>
    <?php include 'css/style.css';
    ?>
    </style>
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

</head>

<body>
    <section class="header">
        <a href="home.php" class="logo">PT.Onder Jaya</a>
        <nav class="navbar">
            <a href="read_mobil.php">add service</a>
            <a href="pending_service.php">pending service</a>
            <a href="pending_service.php">login</a>
        </nav>
        <div id="menu-btn" class="fas fa-bars"></div>
    </section>

    <section class="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide" style="background:url(image/img-1.jpg);">
                    <div class="content">
                        <span>aman,cepat,kencang</span>
                        <h3>memberikan service terbaik</h3>
                        <a href="" class="btn">service</a>
                    </div>
                </div>
                <div class="swiper-slide slide" style="background:url(image/img-2.jpg);">
                    <div class="content">
                        <span>aman,cepat,kencang</span>
                        <h3>bersih seperti sediakala</h3>
                        <a href="" class="btn">service</a>
                    </div>
                </div>
                <div class="swiper-slide slide" style="background:url(image/img-3.jpg);">
                    <div class="content">
                        <span>aman,cepat,kencang</span>
                        <h3>tepercaya dan profesional</h3>
                        <a href="" class="btn">service</a>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>





    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>