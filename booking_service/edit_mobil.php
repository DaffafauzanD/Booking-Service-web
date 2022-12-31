<?php
session_start();
if (!isset($_SESSION['login'])) {
    echo "<script>alert ('Please login first !');window.location.replace('form_login_0014.php');</script>";
}
if ($_SESSION['usertype'] != 'admin') {
    echo "<script>alert ('Access Forbiden !');window.location.replace('index.php');</script>";
    header('location:home.php');
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
            <a href="home.php">home</a>
            <?php if ($_SESSION['usertype'] == 'admin') { ?>
            <a href="read_mobil.php">add service</a>
            <?php } ?>
            <a href="add_mobil.php">booking service</a>
            <?php if ($_SESSION['usertype'] == 'user') { ?>
            <a href="pending_service.php">pending service</a>
            <?php } ?>
            <a href="logout.php">logout</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>
    </section>
    <!-- end header section -->



    <?php
    include 'connection.php';
    $query = "SELECT * FROM mobil_tb WHERE no_id_kendaraan='$_GET[id]'";
    $mobils = mysqli_query($db_connection, $query);
    $data = mysqli_fetch_assoc($mobils);
    ?>
    <section class="booking">
        <h1 class="heading-title">Form edit mobil</h1>
        <form method="post" action="update_mobil.php" class="book-form">
            <div class="flex">
                <!-- input starts -->
                <div class="inputBox">
                    <label>tipe mobil </label>
                    <input type="text" name="mobil_type" value="<?= $data[
                        'mobil_type'
                    ] ?>" require>
                </div>
                <div class="inputBox">
                    <label>no plat mobil </label>
                    <input type="text" name="mobil_no_plat" value="<?= $data[
                        'mobil_no_plat'
                    ] ?>" require>
                </div>

                <div class="inputBox">
                    <label>layanan servis </label>
                    <input type="text" name="mobil_komplain" value="<?= $data[
                        'mobil_komplain'
                    ] ?>" require>
                </div>

                <div class="inputBox">
                    <label>nama owner </label>
                    <input type="text" name="mobil_owner" value="<?= $data[
                        'mobil_owner'
                    ] ?>" require>
                </div>
                <div class="inputBox">
                    <label>address </label>
                    <input type="textarea" name="mobil_address" value="<?= $data[
                        'mobil_address'
                    ] ?>" require>
                </div>

                <div class="inputBox">
                    <label>Phone </label>
                    <input type="number" name="mobil_phone" value="<?= $data[
                        'mobil_phone'
                    ] ?>" require>
                </div>

                <div class="inputBox">
                    <label>tgl booking </label>
                    <input type="date" name="mobil_booking_tgl" value="<?= $data[
                        'mobil_booking_tgl'
                    ] ?>" require>
                </div>

                <div class="inputBox">
                    <label>tgl booking </label>
                    <input type="time" name="mobil_booking_wkt" value="<?= $data[
                        'mobil_booking_wkt'
                    ] ?>" require>
                </div>
            </div>
            <!-- end input -->
            <input type="submit" name="save" value="save" class="btn" require>
            <input type="reset" name="reset" value="reset" class="btn" require>
            <input type="hidden" name="no_id_kendaraan" value="<?= $data[
                'no_id_kendaraan'
            ] ?>" require>
            <p><a href="read_mobil.php">CANCEL</a></p>

        </form>
    </section>
</body>

</html>