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
            <a href="home.php">home</a>
            <?php if ($_SESSION['usertype'] == 'admin') { ?>
            <a href="read_mobil.php">report service</a>
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

    <section class="container-record">
        <?php
        include 'connection.php';
        $querypet = "SELECT * FROM mobil_tb WHERE no_id_kendaraan='$_GET[id_mobil]'";
        $pet = mysqli_query($db_connection, $querypet);
        $data1 = mysqli_fetch_assoc($pet);
        // $querymed = "SELECT * FROM mobil_data WHERE pet_id='$_GET[pet_id]'";
        $querymed = "SELECT * FROM data_tb AS m, user_tb AS d WHERE m.no_id_kendaraan='$_GET[id_mobil]' AND m.no_id_user = 
                d.no_id_user";
        $mobil_data = mysqli_query($db_connection, $querymed);
        ?>
        <div class="table-record">
            <h1>user Records</h1>
            <div class="btn-record-box">
                <div class="btn-record">
                    <p><a href="add_data_mobil.php?id_mobil=<?= $data1[
                        'no_id_kendaraan'
                    ] ?>">Add New Records</a></p>
                </div>
                <div class="btn-record">
                    <p><a href="read_mobil.php">Back to Pet List</a></p>
                </div>
            </div>
            <table class="record-table">
                <tr>
                    <th>mobil Id</th>
                    <th>Type mobil</th>
                    <th>keluhan mobil</th>
                    <th>No plat</th>
                    <th>Owner</th>
                    <th>address</th>
                    <th>phone</th>
                </tr>
                <tr>
                    <td data-th="ID"><?= $data1['no_id_kendaraan'] ?></td>
                    <td data-th="Tipe mobil"><?= $data1['mobil_type'] ?>
                    <td data-th="Keluhan mobil"><?= $data1[
                        'mobil_komplain'
                    ] ?> </td>
                    <td data-th="No plat"><?= $data1['mobil_no_plat'] ?></td>
                    <td data-th="Owner"><?= $data1['mobil_owner'] ?></td>
                    <td data-th="Address"><?= $data1['mobil_address'] ?></td>
                    <td data-th="phone"><?= $data1['mobil_phone'] ?></td>
                </tr>
            </table>
        </div>
        <div class="container-table">
            <h1>admin Records</h1>
            <table class="data-table">
                <tr>
                    <th>No</th>
                    <th>Date</th>
                    <th>Tipe mobil</th>
                    <th>Owner</th>
                    <th>keluhan mobil</th>
                    <th>Service Treatment</th>
                    <th>Cost ($)</th>
                </tr>
                <?php if (mysqli_num_rows($mobil_data) > 0) {
                    $i = 1;
                    foreach ($mobil_data as $data2): ?>
                <tr>
                    <td data-th="ID"><?= $i++ ?></td>
                    <td data-th="date"><?= date(
                        'l, d M Y H:i:s',
                        strtotime($data2['data_tgl'])
                    ) ?></td>
                    <td data-th="tipe"><?= $data2['data_mobil_type'] ?></td>
                    <td data-th="name"><?= $data2['user_name'] ?></td>
                    <td data-th="komplain"><?= $data2[
                        'data_mobil_komplain'
                    ] ?></td>
                    <td data-th="service"><?= $data2['data_service'] ?></td>
                    <td data-th="cost"><?= $data2['data_cost'] ?></td>
                </tr>
                <?php endforeach;
                } else {
                     ?>
                <tr>
                    <td colspan="7" align="center">No Records !</td>
                </tr>
                <?php
                } ?>
            </table>
        </div>


    </section>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/63807ffb7d.js" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>

</html>