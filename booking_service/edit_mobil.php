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
</head>

<body>
    <h1>PT.Onder Jaya</h1>
    <h3>Form edit mobil</h3>
    <?php
    include 'connection.php';
    $query = "SELECT * FROM mobil_tb WHERE no_id_kendaraan='$_GET[id]'";
    $mobils = mysqli_query($db_connection, $query);
    $data = mysqli_fetch_assoc($mobils);
    ?>
    <section>
        <form method="post" action="update_mobil.php">
            <div>
                <div>
                    <div>
                        <label>tipe mobil </label>
                        <input type="text" name="mobil_type" value="<?= $data[
                            'mobil_type'
                        ] ?>" require>
                    </div>
                    <div>
                        <label>no plat mobil </label>
                        <input type="text" name="mobil_no_plat" value="<?= $data[
                            'mobil_no_plat'
                        ] ?>" require>
                    </div>

                    <div>
                        <label>layanan servis </label>
                        <input type="text" name="mobil_komplain" value="<?= $data[
                            'mobil_komplain'
                        ] ?>" require>
                    </div>

                    <div>
                        <label>nama owner </label>
                        <input type="text" name="mobil_owner" value="<?= $data[
                            'mobil_owner'
                        ] ?>" require>
                    </div>
                    <div>
                        <label>address </label>
                        <input type="textarea" name="mobil_address" value="<?= $data[
                            'mobil_address'
                        ] ?>" require>
                    </div>

                    <div>
                        <label>Phone </label>
                        <input type="number" name="mobil_phone" value="<?= $data[
                            'mobil_phone'
                        ] ?>" require>
                    </div>

                    <div>
                        <label>tgl booking </label>
                        <input type="date" name="mobil_booking_tgl" value="<?= $data[
                            'mobil_booking_tgl'
                        ] ?>" require>
                    </div>

                    <div>
                        <label>tgl booking </label>
                        <input type="time" name="mobil_booking_wkt" value="<?= $data[
                            'mobil_booking_wkt'
                        ] ?>" require>
                    </div>

                    <input type="submit" name="save" value="save" require>
                    <input type="reset" name="reset" value="reset" require>
                    <input type="hidden" name="no_id_kendaraan" value="<?= $data[
                        'no_id_kendaraan'
                    ] ?>" require>
                    <p><a href="read_mobil.php">CANCEL</a></p>
                </div>
            </div>
        </form>
    </section>
</body>

</html>