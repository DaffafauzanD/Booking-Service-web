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

    <section>

        <div class="container-read">
            <table class="read-table">
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
                    <th>edit</th>
                    <th>delete</th>
                </tr>
                <?php
                include 'connection.php';
                $query = 'SELECT * FROM mobil_tb';
                $mobils = mysqli_query($db_connection, $query);

                $i = 1;
                foreach ($mobils as $data): ?>
                <tr>
                    <td data-th="no"><?php echo $i++; ?></td>
                    <td data-th="TIPE"><a href="data_mobil.php?id_mobil=<?= $data[
                        'no_id_kendaraan'
                    ] ?>"><?php echo $data['mobil_type']; ?></a></td>
                    <td data-th="No kendaraan"><?php echo $data[
                        'mobil_no_plat'
                    ]; ?></td>
                    <td data-th="service"><?php echo $data[
                        'mobil_komplain'
                    ]; ?></td>
                    <td data-th="Nama owner"><?php echo $data[
                        'mobil_owner'
                    ]; ?></td>
                    <td data-th="alamat"><?php echo $data[
                        'mobil_address'
                    ]; ?></td>
                    <td data-th="phone"><?php echo $data['mobil_phone']; ?></td>
                    <td data-th="tgl booking"><?php echo $data[
                        'mobil_booking_tgl'
                    ]; ?></td>
                    <td data-th="waktu booking"><?php echo $data[
                        'mobil_booking_wkt'
                    ]; ?></td>
                    <td data-th="edit"><a href="edit_mobil.php?id=<?= $data[
                        'no_id_kendaraan'
                    ] ?>">Edit mobil</a></td>
                    <td data-th="delete"><a href="delete_mobil.php?id=<?= $data[
                        'no_id_kendaraan'
                    ] ?>" onclick="return confirm('are you sure?')">delete pet</a></td>
                </tr>
                <?php endforeach;
                ?>
            </table>
        </div>

    </section>

    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <script src="js/script.js"></script>
</body>

</html>