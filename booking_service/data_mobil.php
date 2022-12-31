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
    <title>Document</title>
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
        <div class="container-table">
            <h1>Pet Clinic Daffa</h1>
            <h3>Service Records</h3>
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
            <table>
                <tr>
                    <td>mobil Id/Name</td>
                    <td>: <?= $data1['no_id_kendaraan'] ?>/<?= $data1[
    'mobil_owner'
] ?>
                    </td>
                </tr>
                <tr>
                    <td>Type mobil/keluhan mobil/No plat</td>
                    <td>: <?= $data1['mobil_type'] ?> / <?= $data1[
     'mobil_komplain'
 ] ?> / <?= $data1['mobil_no_plat'] ?>
                </tr>
                <tr>
                    <td>Owner</td>
                    <td>: <?= $data1['mobil_owner'] ?> / <?= $data1[
     'mobil_address'
 ] ?> / <?= $data1['mobil_phone'] ?></td>
                </tr>
            </table>
            <p><a href="add_data_mobil.php?id_mobil=<?= $data1[
                'no_id_kendaraan'
            ] ?>">Add New Records</a></p>

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
    <p><a href="read_mobil.php">Back to Pet List</a></p>
</body>

</html>