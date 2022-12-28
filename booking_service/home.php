<?php
session_start();
if (!isset($_SESSION['login'])) {
    echo "<script>window.location.replace('login.php'); alert('Login first. Access denied');</script>";
}
?>
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
    <!-- header section -->
    <section class="header">
        <a href="home.php" class="logo">PT.Onder Jaya</a>
        <nav class="navbar">
            <?php if ($_SESSION['usertype'] == 'admin') { ?>
            <a href="read_mobil.php">add service</a>
            <?php } ?>
            <a href="add_mobil.php">booking service</a>
            <a href="pending_service.php">pending service</a>
            <?php if ($_SESSION['usertype'] == 'admin,user') { ?>
            <a href="login.php">login</a>
            <?php } ?>
            <a href="logout.php">logout</a>
        </nav>
        <div id="menu-btn" class="fas fa-bars"></div>
    </section>
    <!-- end header section -->

    <!-- home section -->
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
    <!-- end home section -->

    <!-- service section -->

    <section class="services">
        <h1 class="heading-title"> struk booking
            <div class="box-container">
                <div class="box">
                    <img src="image/icon-1.png" alt="">
                    <h3>struk booking</h3>
                    <?php
                    include 'connection.php';
                    $query = 'SELECT * FROM mobil_tb';
                    $mobils = mysqli_query($db_connection, $query);
                    $i = 1;
                    foreach ($mobils as $data): ?>
                    <!-- <p><?php echo $i++; ?></p>
                    <p><?php echo $data['mobil_type']; ?></p>
                    <p><?php echo $data['mobil_no_plat']; ?></p>
                    <p><?php echo $data['mobil_komplain']; ?></p>
                    <p><?php echo $data['mobil_owner']; ?></p>
                    <p><?php echo $data['mobil_address']; ?></p>
                    <p><?php echo $data['mobil_phone']; ?></p>
                    <p><?php echo $data['mobil_booking_tgl']; ?></p>
                    <p><?php echo $data['mobil_booking_wkt']; ?></p> -->
                    <?php endforeach;
                    ?>
                </div>

                <div class="box">
                    <img src="image/icon-2.png" alt="">
                    <h3>struk booking</h3>
                    <?php
                    include 'connection.php';
                    $query = 'SELECT * FROM mobil_tb';
                    $mobils = mysqli_query($db_connection, $query);

                    $i = 1;
                    foreach ($mobils as $data): ?>
                    <?php endforeach;
                    ?>
                </div>

                <div class="box">
                    <img src="image/icon-3.png" alt="">
                    <h3>struk booking</h3>
                    <?php
                    include 'connection.php';
                    $query = 'SELECT * FROM mobil_tb';
                    $mobils = mysqli_query($db_connection, $query);

                    $i = 1;
                    foreach ($mobils as $data): ?>
                    <?php endforeach;
                    ?>
                </div>

                <div class="box">
                    <img src="image/icon-3.png" alt="">
                    <h3>struk booking</h3>
                    <?php
                    include 'connection.php';
                    $query = 'SELECT * FROM mobil_tb';
                    $mobils = mysqli_query($db_connection, $query);

                    $i = 1;
                    foreach ($mobils as $data): ?>
                    <?php endforeach;
                    ?>
                </div>

                <div class="box">
                    <img src="image/icon-4.png" alt="">
                    <h3>struk booking</h3>
                    <?php
                    include 'connection.php';
                    $query = 'SELECT * FROM mobil_tb';
                    $mobils = mysqli_query($db_connection, $query);

                    $i = 1;
                    foreach ($mobils as $data): ?>
                    <?php endforeach;
                    ?>
                </div>

            </div>
        </h1>
    </section>

    <!-- end service section -->


    <!-- footer section -->
    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>quick link</h3>
                <a href="read_mobil.php"> <i class="fas fa-angle-right"></i> add service</a>
                <a href="pending_service.php"> <i class="fas fa-angle-right"></i> pending service</a>
                <a href="pending_service.php"> <i class="fas fa-angle-right"></i> login</a>
            </div>

            <div class="box">
                <h3>extra link</h3>
                <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="#"> <i class="fas fa-phone"></i> +62 8653 9231 32</a>
                <a href="#"> <i class="fas fa-envelope"></i> daffafauzand24@gmail.com</a>
                <a href="#"> <i class="fas fa-envelope"></i> rizky.......@gmail.com</a>
                <a href="#"> <i class="fas fa-map"></i> Bandung, indonesia - 40112</a>
            </div>

            <div class="box">
                <h3>follow us</h3>
                <a href="#"> <i class="fab fa-facebook-f"></i> facebook</a>
                <a href="#"> <i class="fab fa-instagram"></i> instagram</a>
                <a href="#"> <i class="fab fa-twitter"></i> twitter</a>
                <a href="#"> <i class="fab fa-github"></i> github</a>
            </div>
        </div>
    </section>
    <!-- end footer section -->




    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>