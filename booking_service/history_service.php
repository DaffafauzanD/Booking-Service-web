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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
</head>

<body>
    <!-- header section -->
    <section class="header">
        <a href="home.php" class="logo">PT.Onder Jaya</a>
        <nav class="navbar">
            <a href="home.php">home</a>
            <?php if ($_SESSION['usertype'] == 'admin') { ?>
            <a href="read_mobil.php">report service</a>
            <?php } ?>
            <a href="add_mobil.php">booking service</a>
            <?php if ($_SESSION['usertype'] == 'user') { ?>
            <a href="history_service.php">history service</a>
            <?php } ?>
            <a href="logout.php">logout</a>
        </nav>
        <div id="menu-btn" class="fas fa-bars"></div>
    </section>
    <!-- end header section -->

    <!-- awal history section -->

    <section class="container-history">
        <div class="box-history">
            <div class="history">
                <div class="history-content">
                    <label></label>
                </div>
            </div>
        </div>
    </section>

    <!-- akhir history section -->

    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/63807ffb7d.js" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>

</html>