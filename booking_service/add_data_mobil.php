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
            <a href="pending_service.php">history service</a>
            <?php } ?>
            <a href="logout.php">logout</a>
        </nav>
        <div id="menu-btn" class="fas fa-bars"></div>
    </section>
    <!-- end header section -->
    <?php
    include 'connection.php';
    $querypet = "SELECT * FROM mobil_tb WHERE no_id_kendaraan='$_GET[id_mobil]'";
    $pet = mysqli_query($db_connection, $querypet);
    $data1 = mysqli_fetch_assoc($pet);
    $querydoc = 'SELECT * FROM user_tb WHERE user_usertype LIKE "admin"';
    $doctor = mysqli_query($db_connection, $querydoc);
    ?>
    <div class="table-record">
        <h1>user Records</h1>
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
    <hr>
    <section class="booking">
        <form method="post" action="create_data.php" class="book-form">
            <div class="flex">
                <div class="inputBox">
                    <label>admin</label>
                    <select name="doctors_id" required>
                        <option value="">choose</option>
                        <?php foreach ($doctor as $data2): ?>
                        <option value="<?= $data2['no_id_user'] ?>">
                            <?= $data2['user_name'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="inputBox">
                    <label>tipe mobil</label>
                    <input type="text" name="data_mobil_type" required>
                </div>
                <div class="inputBox">
                    <label>keluhan mobil</label>
                    <input type="text" name="data_mobil_komplain" required>
                </div>
                <div class="inputBox">
                    <label>service treatment</label>
                    <input type="text" name="data_service" required>
                </div>
                <div class="inputBox">
                    <label>cost</label>
                    <input type="number" name="data_cost" required>
                </div>
            </div>
            <input type="submit" name="save" value="SAVE" class="btn">
            <input type="reset" name="reset" value="RESET" class="btn">
            <input type="hidden" name="id_mobil" value="<?= $data1[
                'no_id_kendaraan'
            ] ?>">
            <input type="hidden" name="id_user" value="<?= $data2[
                'no_id_user'
            ] ?>">
            <p><a href="data_mobil.php?id_mobil=<?= $data1[
                'no_id_kendaraan'
            ] ?>">cancel</a></p>
        </form>

    </section>

    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/63807ffb7d.js" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>

</html>