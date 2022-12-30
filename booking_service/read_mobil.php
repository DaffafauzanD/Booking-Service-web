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

    <section class="box-table">
        <div class="table-read">
            <div class="box-menu">
                <div class="menu-add">
                    <ul>
                        <li>
                            <a href="add_mobil.php">booking service</a>
                        </li>
                    </ul>
                </div>
                <div class="menu-back">
                    <ul>
                        <li>
                            <a href="home.php">BACK TO THE MENU</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="table-content">
                <table>
                    <thead>
                        <tr>
                            <th>no</th>
                            <th>tipe mobil</th>
                            <th>no plat</th>
                            <th>keluhan</th>
                            <th>owner</th>
                            <th>address</th>
                            <th>phone</th>
                            <th>tanggal booking</th>
                            <th>waktu booking</th>
                            <th colspan="2">action</th>
                        </tr>
                    </thead>
                    <?php
                    include 'connection.php';
                    $query = 'SELECT * FROM mobil_tb';
                    $mobils = mysqli_query($db_connection, $query);

                    $i = 1;
                    foreach ($mobils as $data): ?>
                    <tr>
                        <td data-header="no"><?php echo $i++; ?></td>
                        <td data-header="TIPE"><?php echo $data[
                            'mobil_type'
                        ]; ?></td>
                        <td data-header="No kendaraan"><?php echo $data[
                            'mobil_no_plat'
                        ]; ?></td>
                        <td data-header="service"><?php echo $data[
                            'mobil_komplain'
                        ]; ?></td>
                        <td data-header="Nama owner"><?php echo $data[
                            'mobil_owner'
                        ]; ?></td>
                        <td data-header="alamat"><?php echo $data[
                            'mobil_address'
                        ]; ?></td>
                        <td data-header="phone"><?php echo $data[
                            'mobil_phone'
                        ]; ?></td>
                        <td data-header="tgl booking"><?php echo $data[
                            'mobil_booking_tgl'
                        ]; ?></td>
                        <td data-header="waktu booking"><?php echo $data[
                            'mobil_booking_wkt'
                        ]; ?></td>
                        <td><a href="edit_mobil.php?id=<?= $data[
                            'no_id_kendaraan'
                        ] ?>">Edit mobil</a></td>
                        <td><a href="delete_mobil.php?id=<?= $data[
                            'no_id_kendaraan'
                        ] ?>" onclick="return confirm('are you sure?')">delete pet</a></td>
                    </tr>
                    <?php endforeach;
                    ?>
                </table>
            </div>
        </div>
        </div>
    </section>

    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <script src="js/script.js"></script>
</body>

</html>