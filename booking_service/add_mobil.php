<?php
session_start();
if (!isset($_SESSION['login'])) {
    echo "<script>window.location.replace('login.php'); alert('Login first. Access denied');</script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>PT.Onder Jaya</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

    <section class="booking">
        <h1 class="heading-title">Form service mobil</h1>
        <form method="post" action="create_mobil.php" class="book-form">
            <div class="flex">
                <!-- input starts -->
                <div class="inputBox">
                    <label>Tipe mobil</label>
                    <input type="text" name="mobil_type" placeholder="Tipe Mobil Anda" require>
                </div>
                <div class="inputBox">
                    <label>No plat mobil</label>
                    <input type="text" name="mobil_no_plat" placeholder="B 1234 TES" required>
                </div>
                <div class="inputBox">
                    <label>layanan servis</label>
                    <input type="text" name="mobil_komplain" placeholder="kerusakan mobil" require>
                </div>
                <div class="inputBox">
                    <label>nama owner</label>
                    <input type="text" name="mobil_owner" placeholder="Nama owner harus sama dengan user login" require>
                </div>
                <div class="inputBox">
                    <label>Address</label>
                    <input type="text" name="mobil_address" placeholder="Masukan Alamat Anda" required></input>
                </div>
                <div class="inputBox">
                    <label>Phone</label>
                    <input type="number" name="mobil_phone" placeholder="Nomor Telepon Anda" require>
                </div>
                <div class="inputBox">
                    <label>tgl booking</label>
                    <input type="date" name="mobil_booking_tgl" require>
                </div>
                <div class="inputBox">
                    <label>jam booking</label>
                    <input type="time" name="mobil_booking_wkt" require>
                </div>
            </div>
            <!-- end input -->
            <input type="submit" name="save" value="save" class="btn" require>
            <input type="reset" name="reset" value="reset" class="btn" require>
            <p><a href="read_mobil.php">CANCEL</a></p>
        </form>
    </section>

    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/63807ffb7d.js" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>

</html>