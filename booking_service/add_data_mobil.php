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

    <h1>Pet Clinic Daffa</h1>
    <h3>Medical Records</h3>
    <?php
    include 'connection.php';
    $querypet = "SELECT * FROM mobil_tb WHERE no_id_kendaraan='$_GET[id_mobil]'";
    $pet = mysqli_query($db_connection, $querypet);
    $data1 = mysqli_fetch_assoc($pet);
    $querydoc = 'SELECT * FROM user_tb';
    $doctor = mysqli_query($db_connection, $querydoc);
    ?>
    <table>
        <tr>
            <td>mobil Id/Name</td>
            <td>: <?= $data1['no_id_kendaraan'] ?> / <?= $data1[
     'mobil_owner'
 ] ?> </td>
        </tr>
        <tr>
            <td>Type mobil/keluhan mobil</td>
            <td>: <?= $data1['mobil_type'] ?> / <?= $data1['mobil_komplain'] ?>
        </tr>
        <tr>
            <td>Owner</td>
            <td>: <?= $data1['mobil_owner'] ?> / <?= $data1[
     'mobil_address'
 ] ?> / <?= $data1['mobil_phone'] ?></td>
        </tr>
    </table>
    <hr>
    <form method="post" action="create_data.php">
        <table>
            <tr>
                <td>Doctor</td>
                <td>
                    <select name="doctors_id" required>
                        <option value="">choose</option>
                        <?php foreach ($doctor as $data2): ?>
                        <option value="<?= $data2['no_id_user'] ?>">
                            <?= $data2['user_name'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>tipe mobil</td>
                <td><input type="text" name="data_mobil_type" required></td>
            </tr>
            <tr>
                <td>keluhan mobil</td>
                <td><input type="text" name="data_mobil_komplain" required></td>
            </tr>
            <tr>
                <td>service treatment</td>
                <td><input type="text" name="data_service" required></td>
            </tr>
            <tr>
                <td>cost</td>
                <td><input type="number" name="data_cost" required></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="save" value="SAVE">
                    <input type="reset" name="reset" value="RESET">
                    <input type="hidden" name="id_mobil" value="<?= $data1[
                        'no_id_kendaraan'
                    ] ?>">
                    <input type="hidden" name="id_user" value="<?= $data2[
                        'no_id_user'
                    ] ?>">
                </td>
            </tr>
        </table>
    </form>
    <p><a href="data_mobil.php?id_mobil=<?= $data1[
        'no_id_kendaraan'
    ] ?>">cancel</a></p>
</body>

</html>